<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Towers extends Model
{
     protected $table = 'towers';
   protected $fillable =[ 'tower', 'tower_type'
];
}
