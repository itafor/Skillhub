<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
     protected $fillable = [
         'skillReq','noOfAplicant','gender','companyAddress','compPhone','compEmail','state','lga','recruitDeadline','jobdescription','jobrequirement','jobresponsibility','jobExpLevel','compName','jobTitle','expired'
    ];


public function users() {
	return $this->belongsTo('App\User');
}

public function sharedjobs(){
        return $this->hasMany('App\Sharedjob');
    }
 public function jobapplications(){
        return $this->hasMany('App\Jobapplication');
    }

    public function expireJob () {
 //  $mytime = Carbon\Carbon::now();
 // $today = $mytime->toDateTimeString();

     return $this->Employer::where('recruitDeadline','<=','2018/11/10 02:16')
        ->update([
            'expired'=>'closed'
        ]);

}
 }
