<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name', 'experiece', 'onlineproof','description','skill_level'
    ];


public function users() {
	return $this->belongsTo('App\User');
}

}