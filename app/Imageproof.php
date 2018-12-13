<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imageproof extends Model
{
     protected $fillable = [ 'name','image'];

    public function users() {
	return $this->belongsTo('App\User');
  }
}
