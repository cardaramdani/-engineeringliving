<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class watermeterunit extends Model
{

    // protected $casts = ['created_at' => 'datetime:Y-M-d H:i:s',];
 protected $table = 'water_meter_units';
 public function getCreatedAtAttribute(){
    return Carbon::Parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
 }
 protected $fillable =['Unit', 'teknisi', 'NoSeri', 'StandAwal','GambarAwal', 'StandAkhir','GambarAkhir','TotalPakai', 'TanggalBAST'];
    }
