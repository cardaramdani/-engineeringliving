<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Firepump extends Model
{
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
    protected $table='firepumps';
	protected $fillable =[
 'spv', 'shift', 'teknisi',
 'statusjockey', 'selectorjockey', 'valvejockey', 'onpressurejockey', 'ofpressurejockey', 'bodyjockey',

 'statuselectric', 'selectorelectric', 'valveelectric', 'onpressureelectric', 'ofpressureelectric', 'bodyelectric',

 'statusdiesel', 'selectordiesel', 'valvediesel', 'onpressurediesel', 'ofpressurediesel', 'batterycharger', 'leveloli', 'levelsolar', 'levelradiator', 'aktualpressureheader', 'temuan'
	];
}
