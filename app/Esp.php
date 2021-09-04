<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esp extends Model
{
    protected $table='esps';
    protected $fillable =['sensor', 'value1', 'value2', 'status'];
    }
