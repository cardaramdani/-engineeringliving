<?php

namespace App\Exports;

use App\Pmac;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
class PmacExport implements
FromQuery,
FromView
{
    use Exportable;

    public function __construct(array $data)
    {

        $this->Pmac = $data;

    }
    public function query()
    {
        return Pmac::query()->findOrFail('id', array($this->Pmac));
    }

    public function view(): View
    {
        return $Pmac;
        return view('ac.exportpm', [
            'Pmac' => Pmac::all()
        ]);
    }

}
