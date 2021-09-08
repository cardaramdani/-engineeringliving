



<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pm_IF&EF.xls");
?>

<h1 align="center" class="my-5" >Form Preventive IF & EF</h1>
<table border="1" cellpadding="5">
<tbody>
    <thead class="thead-dark" align="center">
<tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
            LOGO
            </th>
            <th scope="col" align="center" class="align-middle" colspan="9" style="background-color: gray">PM SCHEDULE : {{$fan->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="4" style="background-color: gray">Halaman 1-1</th>
</tr>

<tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">EQUIPMENT : If & EF<br>
            Lokasi Unit : {{$fan->lokasi_unit}} <br>
            Type Fan : {{$fan->nama_fan}}
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$fan->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="left"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr>
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$fan->created_at}}</th>

</tr>

</thead>

<tr>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</td>

</tr>

<tr >
  <th scope="col" align="left" colspan="18" class="font-weight-bold">
    3 Bulanan
  </th>
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Amati tegangan  dan kondisi v-belt</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
            {{$fan->l1}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
         {{$fan->l1k1}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Greasing Fan shaft bearings dan motor bearings</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l2}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l2k2}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Periksa damper</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l3}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l3k3}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Amati Jika vibrasi dan suara tidak normal</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l4}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l4k4}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan Fan blade dari kotoran</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l5}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l5k5}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Panel starter, bersihkan contactor , periksa operating ampere</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l6}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l6k6}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Suara Bearing tidak kasar</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l7}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l7k7}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kencangkan baut Kedudukan motor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l8}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l8k8}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kencangkan Connector</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l9}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l9k9}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Periksa Karet monting</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l10}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l10k10}}

        </td>
</tr>

<tr >
  <th scope="col" align="left" colspan="18" class="font-weight-bold">
    Tahunan
  </th>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Struktur terhadap karat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l11}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l11k11}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check megger motor, kencangkan sambungan - sambungan , baut - baut dan dudukannya</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l12}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l12k12}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Ganti V-belt</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l13}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l13k13}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Ganti Bearing motor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$fan->l14}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$fan->l14k14}}

        </td>
</tr>

<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Dikerjakan Oleh :
         {{$fan->teknisi}}

        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Diperiksa Supervisor : Carda</td>
</tr>

</tbody>

  </table>
