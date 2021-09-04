<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Genset extends Model
{
    public function getCreatedAtAttribute(){
        return Carbon::Parse($this->attributes['created_at'])->translatedFormat('Y/m/d H:i:s, l');
     }
protected $table ='gensets';
    protected $fillable =[
    						'teknisi', 'shift', 'spv',
                            'leveloli',
                            'modemodulpkg',
                             'levelradiator',
                              'odometer',
                               'airfilter',
                                'pompasolar',
                                 'valvesolar',
                                  'voltageaccu',
                                   'voltagecharger',
                                    'amf',
                                     'emergencybutton',
                                      'bodygenset',
                                       'catatan'
                        ];
}
