<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Panel_name extends Model
{
    protected $table = 'panel_names';
    protected $fillable =['name', 'room_id'];
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
    //room_id, name
}
