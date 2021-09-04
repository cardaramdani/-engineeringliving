<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Kwhcomersile extends Model
{
    protected $table ='kwhcomersile';
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
     }

 protected $fillable =[
     'Unit',
     'teknisi',
     'NoSeri',
     'Daya',
     'Faktor_kali',
     'StandAwal_lwbp',
     'StandAkhir_lwbp',
     'StandAwal_wbp',
     'StandAkhir_wbp',
     'GambarAwal_lwbp' ,
     'GambarAkhir_lwbp',
     'GambarAwal_wbp',
     'GambarAkhir_wbp',
     'total',
     'TanggalBAST',
     'created_at'];

    }
