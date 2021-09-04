<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Amr extends Model
{
    protected $table = 'amrs';
    //$total = ['wbp'+'lwbp'];
    protected $fillable =['shift', 'teknisi', 'cosp', 'lwbp', 'total', 'wbp', 'kvarh', 'penalty', 'created_at'];
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
}

