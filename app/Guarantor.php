<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    protected $fillable = [
        'guarantorsFullName', 'relationship', 'relDuration','phone','businessAddress','photo','sex','nameOfOrg','residentAddrress'
    ];

public function users() {
	return $this->belongsTo('App\User');
}

}