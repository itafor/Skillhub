<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onlineproof extends Model
{
     protected $fillable = [ 'name','url'];

     public function users() {
	return $this->belongsTo('App\User');
   }
}
