<?php

namespace App\Exports;

use App\Kwhmeterunit;
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

class KwhunitExport implements
ShouldAutoSize,
WithHeadings,
WithEvents,
WithDrawings,
FromQuery,
WithMapping,
WithColumnFormatting
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
        return Kwhmeterunit::query()->whereBetween('created_at', array($this->form, $this->to));
    }

    public function headings():array
    {
        return [
            'Unit',
            'Serial No.',
            'Daya',
            'Start',
            'End',
            'Current Use',
            'Price/kwh',
            'Admin',
            'Total Billing',
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class  => function(AfterSheet $event)
            {
                $event->sheet->getStyle('A1:J1')->applyFromArray([
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
        $drawing->setCoordinates('K1');

        return $drawing;
    }

    public function map($kwhunit):array
    {
        $abodemen = $kwhunit->Daya * 40;
        if ($kwhunit->StandAwal == null) {
            $kwhunit->StandAwal= "0";
        }else{
            $kwhunit->StandAwal=$kwhunit->StandAwal;
        }
        if ($kwhunit->StandAkhir == null) {
            $kwhunit->StandAkhir= "0";
        }else{
            $kwhunit->StandAkhir=$kwhunit->StandAkhir;
        }
        if ($kwhunit->TotalPakai == null) {
            $kwhunit->TotalPakai= "0";
        }else{
            $kwhunit->TotalPakai=$kwhunit->TotalPakai;
        }
        if ($kwhunit->TotalPakai<=$abodemen) {
            $rupiah= ($abodemen * 1444.7) + 10000+(($abodemen * 1444.7)*0.024);
        }else{
            $rupiah= (1444.7 * $kwhunit->TotalPakai) + 10000 + ((1444.7 * $kwhunit->TotalPakai)*0.024);
        }

        return [
            $kwhunit->Unit,
            $kwhunit->NoSeri,
            $kwhunit->Daya,
            $kwhunit->StandAwal,
            $kwhunit->StandAkhir,
            $kwhunit->TotalPakai,
            "Rp. 1444,7",
            "Rp. 10000",
            $rupiah
        ];
    }

    public function columnFormats():array
    {
        return [
            'I' => NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,
        ];
    }
}
