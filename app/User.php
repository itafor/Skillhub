<?php

namespace App;
use App\Notifications\VerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','address','photo','sex','role','about','qualification','mycv','token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function skills(){
        return $this->hasMany('App\Skill');
    }

    public function education(){
        return $this->hasMany('App\Education');
    }

    public function employers(){
   
    return $this->hasMany('App\Employer');
    }

    public function guarantors(){
        return $this->hasMany('App\Guarantor');
    }

    public function onlineproofs(){
        return $this->hasMany('App\Onlineproof')->take(1);
    }

    public function imageproofs(){
        return $this->hasMany('App\Imageproof')->take(1);
    }

    public function videos(){
        return $this->hasMany('App\Videoproof')->take(1);
    }

     public function hiremes(){
        return $this->hasMany('App\Hireme');
    }

     public function sharedjobs(){
        return $this->hasMany('App\Sharedjob');
    }

     public function jobapplications(){
        return $this->hasMany('App\Jobapplication');
    }
// returns true if the user is verified
   
public function verified(){
    return $this->token == null;
}

//send the user a verification email
public function sendVerificationEmail(){

    $this->notify(new VerifyEmail($this));

}


}
