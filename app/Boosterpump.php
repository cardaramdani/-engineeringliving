<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Boosterpump extends Model
{
    protected $table='boosterpump';
	protected $fillable =[
				'teknisi', 'shift', 'spv', 'valvehisappompa1','valvehisappompa2','valvesuplypompa1', 'valvesuplypompa2', 'selektorpompa1','selektorpompa2', 'kondisi'];
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
        }
}
