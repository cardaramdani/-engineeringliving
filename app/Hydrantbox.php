<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Hydrantbox extends Model
{

    protected $table = 'hydrantboxes';
   protected $fillable =[ 'teknisi', 'jadwalpm', 'planpm', 'tower','lantai', 'item_no',
    'l1', 'l2', 'l3', 'l4', 'l5', 'l6', 'l7', 'l8', 'l9', 'l10', 'l11', 'l12',
    	'l1k1','l2k2','l3k3','l4k4','l5k5','l6k6','l7k7','l8k8','l9k9','l10k10','l11k11','l12k12'
];
public function getCreatedAtAttribute(){
    return Carbon::Parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
 }
}
