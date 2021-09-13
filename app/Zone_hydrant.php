<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Zone_hydrant extends Model
{
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
     }
     protected $table = 'zone_hydrants';
   protected $fillable =[ 'floor_zone_id', 'name'];
    //floor_zone_id, name
}
