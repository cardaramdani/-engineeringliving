<?php

namespace App\Exports;

use App\watermeterunit;
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
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class WatermeterExport implements
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
        return watermeterunit::query()->whereBetween('created_at', array($this->form, $this->to));
    }

    public function headings():array
    {
        return [
            'Unit',
            'Serial No.',
            'Start',
            'End',
            'Current Use',
            'Price/kwh',
            'Admin',
            'Maintenance',
            'Total Billing',
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

    public function map($Watermeterunit):array
    {
        if ($Watermeterunit->StandAwal == null) {
            $Watermeterunit->StandAwal= "0";
        }else{
            $Watermeterunit->StandAwal=$Watermeterunit->StandAwal;
        }
        if ($Watermeterunit->StandAkhir == null) {
            $Watermeterunit->StandAkhir= "0";
        }else{
            $Watermeterunit->StandAkhir=$Watermeterunit->StandAkhir;
        }
        if ($Watermeterunit->TotalPakai == null) {
            $Watermeterunit->TotalPakai= "0";
        }else{
            $Watermeterunit->TotalPakai=$Watermeterunit->TotalPakai;
        }

        return [
            $Watermeterunit->Unit,
            $Watermeterunit->NoSeri,
            $Watermeterunit->StandAwal,
            $Watermeterunit->StandAkhir,
            $Watermeterunit->TotalPakai,
            "Rp. 12550",
            "Rp. 10000",
            "Rp. 43000",
            $Watermeterunit->TotalPakai*12550+10000+43000,
        ];
    }

    public function columnFormats():array
    {
        return [
            'I' => NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,

        ];
    }
}
