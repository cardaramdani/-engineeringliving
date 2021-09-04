<?php

namespace App\Exports;

use App\PowerHouse;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\cell\DataType;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class PowerhouseExport implements
WithColumnFormatting,
ShouldAutoSize,
WithHeadings,
WithEvents,
WithDrawings,
FromQuery,
WithMapping
{
    use Exportable;

    public function __construct(array $date)
    {
        $menitawal="00:00:00";
        $menitakhir="23:59:59";
        $this->form = $date['from_date'].' '.$menitawal;
        $this->to = $date['to_date'].' '.$menitakhir;

    }

    public function query()
    {
        return PowerHouse::query()->whereBetween('created_at', array($this->form, $this->to));
    }

    public function headings():array
    {
        return [
            'Created',
            'Teknisi',
            'Shift',
            'Supervisor',

            'KWH PUTR1',
            'KVA PUTR1',
            'AMPER R PUTR1',
            'AMPER S PUTR1',
            'AMPER T PUTR1',
            'VOLTAGE R-S PUTR1',
            'VOLTAGE S-T PUTR1',
            'VOLTAGE T-R PUTR1',
            'VOLTAGE R-N PUTR1',
            'VOLTAGE S-N PUTR1',
            'VOLTAGE T-N PUTR1',
            'LEVEL OLI TRAFO 1',
            'TEMPERATUR OLI TRAFO 1',
            'KWH PUTR2',
            'KVA PUTR2',
            'AMPER R PUTR2',
            'AMPER S PUTR2',
            'AMPER T PUTR2',
            'VOLTAGE R-S PUTR2',
            'VOLTAGE S-T PUTR2',
            'VOLTAGE T-R PUTR2',
            'VOLTAGE R-N PUTR2',
            'VOLTAGE S-N PUTR2',
            'VOLTAGE T-N PUTR2',
            'LEVEL OLI TRAFO 2',
            'TEMPERATUR OLI TRAFO 2',
            'Temuan'

        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class  => function(AfterSheet $event)
            {
                $event->sheet->getStyle('A1:AE1')->applyFromArray([
                    'font'=>[
                        'bold'=>true
                    ],
                ]);
            },
        ];
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/dataIMG_user/logo.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('AF1');

        return $drawing;
    }

    public function map($powerhouse):array
    {
        return [
            $powerhouse->created_at,
            $powerhouse->teknisi,
            $powerhouse->shift,
            $powerhouse->spv,
            $powerhouse->kwh1,
            $powerhouse->kva1,
            $powerhouse->ampere1r,
            $powerhouse->ampere1s,
            $powerhouse->ampere1t,
            $powerhouse->v1rs,
            $powerhouse->v1st,
            $powerhouse->v1tr,
            $powerhouse->v1rn,
            $powerhouse->v1sn,
            $powerhouse->v1tn,
            $powerhouse->levelolitrafo1,
            $powerhouse->temptrafo1,
            $powerhouse->kwh2,
            $powerhouse->kva2,
            $powerhouse->ampere2r,
            $powerhouse->ampere2s,
            $powerhouse->ampere2t,
            $powerhouse->v2rs,
            $powerhouse->v2st,
            $powerhouse->v2tr,
            $powerhouse->v2rn,
            $powerhouse->v2sn,
            $powerhouse->v2tn,
            $powerhouse->levelolitrafo2,
            $powerhouse->temptrafo2,
            $powerhouse->temuan,

        ];
    }

    public function columnFormats():array
    {
        return [
            'A' => DataType::TYPE_STRING,
            'B' => DataType::TYPE_STRING,
            'C' => DataType::TYPE_STRING,

        ];
    }
}
