<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'rooms';
   protected $fillable =[
       'name',
//        'wo_category_id',
//    'category_system_id', 'equipment_id'
	];
}
