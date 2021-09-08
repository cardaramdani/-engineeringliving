



<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pm_Toilet.xls");
?>
        
<h1 align="center" class="my-5" >Form Preventive Toilet</h1>
<table border="1" cellpadding="5">    
<tbody>
    <thead class="thead-dark" align="center">
<tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
            LOGO
            </th>
            <th scope="col" align="center" class="align-middle" colspan="9" style="background-color: gray">PM SCHEDULE : {{$toilet->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="4" style="background-color: gray">Halaman 1-1</th>
</tr>

<tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">EQUIPMENT : Toilet<br>
            Lokasi Unit : {{$toilet->lokasi_unit}}
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$toilet->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="left"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr>
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$toilet->aktualcek}}</th>

</tr>

</thead>

<tr>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</td>
        
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Drain Urinal tidak tersumbat</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
            {{$toilet->l1}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
         {{$toilet->l1k1}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Flushing Urinal valve berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l2}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l2k2}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Washtaple Drain tidak tersumbat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l3}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l3k3}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kran Washtaple berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l4}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l4k4}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Drain Closet tidak tersumbat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l5}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l5k5}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Flushing valve Closet berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l6}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l6k6}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Handle pintu tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l7}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l7k7}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Daun pintu tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l8}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l8k8}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">FD Tidak tersumbat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l9}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l9k9}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Keramik tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l10}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l10k10}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cat Dinding Tidak Kotor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l11}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l11k11}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cermin Tidak Rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l12}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l12k12}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning Utrap Washtaple</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$toilet->l13}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$toilet->l13k13}}

        </td>
</tr>

<tr>
  
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Dikerjakan Oleh :
         {{$toilet->teknisi}}

        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Diperiksa Supervisor : {{$toilet->spv}}</td>
</tr>

</tbody>

  </table>
