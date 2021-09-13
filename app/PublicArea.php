<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicArea extends Model
{
     protected $table = 'public_area';
   protected $fillable =[ 'public_area', 'tower_id'
	];
}
