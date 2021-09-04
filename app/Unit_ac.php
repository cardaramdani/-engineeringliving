<?php

namespace App;
use Illuminate\Support\Carbon;

use Illuminate\Database\Eloquent\Model;

class Unit_ac extends Model
{
    protected $table = 'unit_acs';
    //$total = ['wbp'+'lwbp'];
    protected $fillable =['name', 'room_id'];
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
}
