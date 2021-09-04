<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pdam extends Model
{
    protected $table = 'pdam';
    protected $fillable =[ 'teknisi', 'shift', 'stand' ];
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
}
