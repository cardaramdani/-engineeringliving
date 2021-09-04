<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Sumpitpump extends Model
{
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
    protected $table = 'sumpits';
    protected $fillable =[
    	'teknisi','shift', 'spv',
    'powerpit1', 'selektorpit1','wlcpit1', 'kondisipit1',
    'powerpit2', 'selektorpit2','wlcpit2', 'kondisipit2',
    'powerpit3', 'selektorpit3','wlcpit3', 'kondisipit3',
    'powerpit4', 'selektorpit4','wlcpit4', 'kondisipit4',
    'powerpit5', 'selektorpit5','wlcpit5', 'kondisipit5',
    'powerpit6', 'selektorpit6','wlcpit6', 'kondisipit6',
    'powerpit7', 'selektorpit7','wlcpit7', 'kondisipit7',
    'powerpit8', 'selektorpit8','wlcpit8', 'kondisipit8',
    'powerpit9', 'selektorpit9','wlcpit9', 'kondisipit9',
    'powerpit10', 'selektorpit10','wlcpit10', 'kondisipit10'
    ];
}
