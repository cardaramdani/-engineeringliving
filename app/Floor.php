<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $table = 'floor';
   protected $fillable =[ 'name','tower_floor_id'
];
}
