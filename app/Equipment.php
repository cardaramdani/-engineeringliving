<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipment';
   protected $fillable =[
       'name', 'wo_category_id',
   'category_system_id', 'equipment_id'
	];
}
