<?php

namespace App\Exports;

use App\Sumpitpump;
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

class SumpitExport implements
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
        return Sumpitpump::query()->whereBetween('created_at', array($this->form, $this->to));
    }

    public function headings():array
    {
        return [
            'Created',
            'Teknisi',
            'Shift',
            'Supervisor',

            'Power Sumpit 1',
            'Mode Sumpit 1',
            'WLC Sumpit 1',
            'Kondisi Sumpit 1',
            'Power Sumpit 2',
            'Mode Sumpit 2',
            'WLC Sumpit 2',
            'Kondisi Sumpit 2',
            'Power Sumpit 3',
            'Mode Sumpit 3',
            'WLC Sumpit 3',
            'Kondisi Sumpit 3',
            'Power Sumpit 4',
            'Mode Sumpit 4',
            'WLC Sumpit 4',
            'Kondisi Sumpit 4',
            'Power Sumpit 5',
            'Mode Sumpit 5',
            'WLC Sumpit 5',
            'Kondisi Sumpit 5',
            'Power Sumpit 6',
            'Mode Sumpit 6',
            'WLC Sumpit 6',
            'Kondisi Sumpit 6',
            'Power Sumpit 7',
            'Mode Sumpit 7',
            'WLC Sumpit 7',
            'Kondisi Sumpit 7',
            'Power Sumpit 8',
            'Mode Sumpit 8',
            'WLC Sumpit 8',
            'Kondisi Sumpit 8',
            'Power Sumpit 9',
            'Mode Sumpit 9',
            'WLC Sumpit 9',
            'Kondisi Sumpit 9',
            'Power Sumpit 10',
            'Mode Sumpit 10',
            'WLC Sumpit 10',
            'Kondisi Sumpit 10',

        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class  => function(AfterSheet $event)
            {
                $event->sheet->getStyle('A1:AR1')->applyFromArray([
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
        $drawing->setCoordinates('AT1');

        return $drawing;
    }

    public function map($sumpit):array
    {
        return [
            $sumpit->created_at,
            $sumpit->teknisi,
            $sumpit->shift,
            $sumpit->spv,

            $sumpit->powerpit1,
            $sumpit->selektorpit1,
            $sumpit->wlcpit1,
            $sumpit->kondisipit1,
            $sumpit->powerpit2,
            $sumpit->selektorpit2,
            $sumpit->wlcpit2,
            $sumpit->kondisipit2,
            $sumpit->powerpit3,
            $sumpit->selektorpit3,
            $sumpit->wlcpit3,
            $sumpit->kondisipit3,
            $sumpit->powerpit4,
            $sumpit->selektorpit4,
            $sumpit->wlcpit4,
            $sumpit->kondisipit4,
            $sumpit->powerpit5,
            $sumpit->selektorpit5,
            $sumpit->wlcpit5,
            $sumpit->kondisipit5,
            $sumpit->powerpit6,
            $sumpit->selektorpit6,
            $sumpit->wlcpit6,
            $sumpit->kondisipit6,
            $sumpit->powerpit7,
            $sumpit->selektorpit7,
            $sumpit->wlcpit7,
            $sumpit->kondisipit7,
            $sumpit->powerpit8,
            $sumpit->selektorpit8,
            $sumpit->wlcpit8,
            $sumpit->kondisipit8,
            $sumpit->powerpit9,
            $sumpit->selektorpit9,
            $sumpit->wlcpit9,
            $sumpit->kondisipit9,
            $sumpit->powerpit10,
            $sumpit->selektorpit10,
            $sumpit->wlcpit10,
            $sumpit->kondisipit10,
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
