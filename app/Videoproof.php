<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videoproof extends Model
{
     protected $fillable = [ 'name','video'];

    public function users() {
	return $this->belongsTo('App\User');
  }
}
