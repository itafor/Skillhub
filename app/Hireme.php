<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hireme extends Model
{
    protected $fillable = [
        'empName','empphone', 'empEmail', 'Empdescription'
    ];

    public function users() {
	return $this->belongsTo('App\User');
  }
}
