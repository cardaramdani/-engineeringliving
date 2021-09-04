<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class PowerHouse extends Model
{
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
  protected $table = 'powerhouse';
  protected $fillable =[
   'teknisi', 'shift', 'spv' ,'kwh1','kwh2','kva1','kva2','kvarh1','kvarh2','ampere1r','ampere2r','ampere1s','ampere2s','ampere1t','ampere2t','v1rs','v2rs','v1st','v2st','v1tr','v2tr','v1rn','v2rn','v1sn','v2sn','v1tn','v2tn','freq1','freq2','selektor1','selektor2','fan1','fan2','pf1','pf2','cap1','cap2','fancap1','fancap2','tempcap1','tempcap2','levelolitrafo1','levelolitrafo2','temptrafo1','temptrafo2','temuan'

	];


}
