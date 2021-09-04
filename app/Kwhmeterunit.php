<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Kwhmeterunit extends Model
{
 protected $table ='kwhmeterunits';
 protected $fillable =['Unit', 'teknisi', 'NoSeri','Daya', 'StandAwal', 'GambarAwal', 'StandAkhir', 'GambarAkhir', 'TotalPakai', 'TanggalBAST','created_at'];
 public function getCreatedAtAttribute(){
    return Carbon::Parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
 }
}
