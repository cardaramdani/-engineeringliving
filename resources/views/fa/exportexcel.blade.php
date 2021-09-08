



<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pm_FireAlarm.xls");
?>

<h1 align="center" class="my-5" >Form Preventive Fire Alarm</h1>
<table border="1" cellpadding="5">
<tbody>
    <thead class="thead-dark" align="center">
<tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
            LOGO
            </th>
            <th scope="col" align="center" class="align-middle" colspan="9" style="background-color: gray">PM SCHEDULE : {{$firealarm->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="4" style="background-color: gray">Halaman 1-1</th>
</tr>

<tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">EQUIPMENT : Fire Alarm
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$firealarm->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="left"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr>
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$firealarm->created_at}}</th>

</tr>

</thead>

<tr>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</td>

</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold">3 Bulanan</th>

</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Panel MCFA apakah berfunfsi dengan baik</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
            {{$firealarm->l1}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
         {{$firealarm->l1k1}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan Panel MCFA</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l2}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l2k2}}

        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Power Supplay</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l3}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l3k3}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Modul</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l4}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l4k4}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Jack Phone</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l5}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l5k5}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Indikator lamp</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l6}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l6k6}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Indikator zone</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l7}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l7k7}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Bell</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l8}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l8k8}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Smoke Detector</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l9}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l9k9}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Heat Detector</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l10}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l10k10}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Flow Switch</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l11}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l11k11}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Anounciator</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l12}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l12k12}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Printer Alarm</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l13}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l13k13}}

        </td>
</tr>

<tr>
        <td scope="col" align="left" colspan="18" class="font-weight-bold">Tahunan</td>

</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Lakukan pengetesan fungsi smoke detector dan Alarm System</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$firealarm->l14}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$firealarm->l14k14}}

        </td>
</tr>

<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Dikerjakan Oleh :
         {{$firealarm->teknisi}}

        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Diperiksa Supervisor : Carda</td>
</tr>

</tbody>

  </table>
