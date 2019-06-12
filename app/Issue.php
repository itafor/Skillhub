<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
   protected $fillable = [
        'subject', 'phone', 'email','issues'
    ];
}
