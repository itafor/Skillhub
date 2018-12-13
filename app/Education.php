<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [ 'name'];


public function users() {
	return $this->belongsTo('App\User');
}

}