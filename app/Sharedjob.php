<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharedjob extends Model
{
    //


    public function users() {
	return $this->belongsTo('App\User');
  }

  public function employers() {
	return $this->belongsTo('App\Employer');
	}
}
