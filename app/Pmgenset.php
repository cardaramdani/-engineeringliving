<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pmgenset extends Model
{
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
     }
     protected $table = 'pmgenset';
    protected $fillable =[ 'teknisi', 'jadwalpm', 'planpm',
    'l1', 'l2', 'l3', 'l4', 'l5', 'l6', 'l7', 'l8', 'l9', 'l10', 'l11', 'l12', 'l13', 'l14', 'l15', 'vr', 'vs', 'vt','ampr', 'amps', 'ampt', 'l18', 'l19', 'l20', 'l21', 'l22', 'l23', 'l24', 'l25', 'l26',
    	'l1k1','l2k2','l3k3','l4k4','l5k5','l6k6','l7k7','l8k8','l9k9','l10k10','l11k11','l12k12','l13k13','l14k14','l15k15','l16k16','l17k17','l18k18','l19k19','l20k20','l21k21','l22k22','l23k23','l24k24','l25k25','l26k26'
];}
