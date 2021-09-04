<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Transferpump extends Model
{
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
    protected $table ='transferpumps';

 protected $fillable =['valve_tfa','status_tfa' ,'valve_tfb','status_tfb', 'valve_tfc','status_tfc', 'valve_tfd','status_tfd' , 'kondisi', 'teknisi', 'shift', 'spv' ];
}
