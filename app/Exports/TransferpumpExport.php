<?php

namespace App\Exports;

use App\Transferpump;
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


class TransferpumpExport implements
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
        return Transferpump::query()->whereBetween('created_at', array($this->form, $this->to));
    }

    public function headings():array
    {
        return [
            'Created',
            'Teknisi',
            'Shift',
            'Supervisor',

            'Status Pump 1',
            'Status Pump 2',
            'Status Pump 3',
            'Status Pump 4',
            'Kondisi Pompa',
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class  => function(AfterSheet $event)
            {
                $event->sheet->getStyle('A1:I1')->applyFromArray([
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
        $drawing->setCoordinates('J1');

        return $drawing;
    }

    public function map($transferpump):array
    {
        return [
            $transferpump->created_at,
            $transferpump->teknisi,
            $transferpump->shift,
            $transferpump->spv,
            $transferpump->status_tfa,
            $transferpump->status_tfb,
            $transferpump->status_tfc,
            $transferpump->status_tfd,
            $transferpump->kondisi,
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
