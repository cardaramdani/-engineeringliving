



<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pm_Rooftank.xls");
?>
        
<h1 align="center" class="my-5" >Form Preventive Roof Tank</h1>
<table border="1" cellpadding="5">    
<tbody>
    <thead class="thead-dark" align="center">
<tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
            LOGO
            </th>
            <th scope="col" align="center" class="align-middle" colspan="9" style="background-color: gray">PM SCHEDULE : {{$rooftank->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="4" style="background-color: gray">Halaman 1-1</th>
</tr>

<tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">EQUIPMENT : Clean Water Tank
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$rooftank->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="left"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr>
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$rooftank->aktualcek}}</th>

</tr>

</thead>

<tr>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</td>
        
</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold">Mingguan</th>
        
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Water level control</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
            {{$rooftank->l1}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
         {{$rooftank->l1k1}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check control booster pump</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l2}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l2k2}}

        </td>
</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold">6 Bulanan</th>
        
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Dinding  Roof Tank</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l3}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l3k3}}

        </td>
</tr>



<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Lantai  Roof Tank</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l4}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l4k4}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Roof Tank apakah bersih/kotor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l5}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l5k5}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check valve</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l6}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l6k6}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Lampu indikator panel Booster Pump</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l7}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l7k7}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Switch mode panel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l8}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l8k8}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Tangga</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l9}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l9k9}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check  Pipa Discharge</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l10}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l10k10}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check  Pipa Suction</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l11}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l11k11}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan Strainer</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$rooftank->l12}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$rooftank->l12k12}}

        </td>
</tr>

<tr>
  
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Dikerjakan Oleh :
         {{$rooftank->teknisi}}

        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Diperiksa Supervisor : {{$rooftank->spv}}</td>
</tr>

</tbody>

  </table>
