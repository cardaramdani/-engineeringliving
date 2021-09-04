<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_system extends Model
{
    protected $table = 'category_systems';
   protected $fillable =[
       'name', 'wo_category_id',

	];
}
