<?php

namespace App\Exports;

use App\Kwhcomersile;
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
class KwhcomersileExport implements
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
        return Kwhcomersile::query()->whereBetween('created_at', array($this->form, $this->to));
    }

    public function headings():array
    {
        return [
            'Unit',
            'Serial No.',
            'Daya',
            'Faktor kali',
            'Start lwbp',
            'End lwbp',
            'Start wbp',
            'End wbp',
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
                $event->sheet->getStyle('A1:L1')->applyFromArray([
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
        $drawing->setCoordinates('M1');

        return $drawing;
    }

    public function map($kwhcomersile):array
    {
        $abodemen = $kwhcomersile->Daya * 40;
        if ($kwhcomersile->StandAwal_lwbp == null) {
            $kwhcomersile->StandAwal_lwbp= "0";
        }else{
            $kwhcomersile->StandAwal=$kwhcomersile->StandAwal_lwbp;
        }
        if ($kwhcomersile->StandAwal_wbp == null) {
            $kwhcomersile->StandAwal_wbp= "0";
        }else{
            $kwhcomersile->StandAwal=$kwhcomersile->StandAwal_wbp;
        }

        if ($kwhcomersile->StandAkhir_lwbp == null) {
            $kwhcomersile->StandAkhir_lwbp= "0";
        }else{
            $kwhcomersile->StandAkhir_lwbp=$kwhcomersile->StandAkhir_lwbp;
        }
        if ($kwhcomersile->StandAkhir_wbp == null) {
            $kwhcomersile->StandAkhir_wbp= "0";
        }else{
            $kwhcomersile->StandAkhir_wbp=$kwhcomersile->StandAkhir_wbp;
        }


        if ($kwhcomersile->total == null) {
            $kwhcomersile->total= "0";
        }else{
            $kwhcomersile->total=$kwhcomersile->total;
        }

        if ($kwhcomersile->total<=$abodemen) {
            $rupiah= (($abodemen *1444.7) + 10000 + (($abodemen *1444.7)*0.024));
        }else{
            $rupiah= ((1444.7 * $kwhcomersile->total) + 10000 + ((1444.7 * $kwhcomersile->total)*0.024));
        }

        return [
            $kwhcomersile->Unit,
            $kwhcomersile->NoSeri,
            $kwhcomersile->Daya,
            $kwhcomersile->Faktor_kali,
            $kwhcomersile->StandAwal_lwbp,
            $kwhcomersile->StandAkhir_lwbp,
            $kwhcomersile->StandAwal_wbp,
            $kwhcomersile->StandAkhir_wbp,
            $kwhcomersile->total,
            "Rp. 1444,7",
            "Rp. 10000",
            $rupiah
        ];
    }
    public function columnFormats():array
    {
        return [
            'L' => NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,
        ];
    }
}
