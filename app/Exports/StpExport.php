<?php

namespace App\Exports;

use App\Stp;
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

class StpExport implements
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
        return Stp::query()->whereBetween('created_at', array($this->form, $this->to));
    }

    public function headings():array
    {
        return [
            'Created',
            'Teknisi',
            'Shift',
            'Supervisor',
            'Water Meter',
            'Basket Screen',
            'Mode Blower',
            'Preassure Blower 1',
            'Preassure Blower 2',
            'Mode Equalizing Pump',
            'Mode Effluent Pump',
            'Mode Fillter Pump',
            'Status Intake Fan',
            'Status Exhaust Fan',
            'Temuan',

        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class  => function(AfterSheet $event)
            {
                $event->sheet->getStyle('A1:O1')->applyFromArray([
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
        $drawing->setCoordinates('P1');

        return $drawing;
    }

    public function map($stp):array
    {
        return [
            $stp->created_at,
            $stp->teknisi,
            $stp->shift,
            $stp->spv,
            $stp->standmeter,
            $stp->basketscreen,
            $stp->selektorblower,
            $stp->pressureblower1,
            $stp->pressureblower2,
            $stp->selektorequalizing,
            $stp->selektoreffluent,
            $stp->selektorfilter,
            $stp->intakefan,
            $stp->exhaustfan,
            $stp->temuan,
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
