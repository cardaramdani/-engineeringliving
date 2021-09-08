<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pm_POMPA.xls");
?>
    
<h1 class="align-middle" align="center">Form Preventive PUMPS</h1>
    
<table border="1" cellpadding="5">
<tbody>
<thead class="thead-dark" align="center">
        <tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
            LOGO
            </th>
            <th scope="col" align="center" class="align-middle" colspan="8" style="background-color: gray">PM SCHEDULE : {{$pmpompa->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="5" style="background-color: gray">Halaman 1-1</th>
        </tr>

        <tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">EQUIPMENT : Pompa - Pompa <br>
            Lokasi Unit : {{$pmpompa->lokasi_unit}} <br>
            Nama Pompa  : {{$pmpompa->nama_pompa}}
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$pmpompa->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="center"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
                        
        </tr>

        <tr>
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$pmpompa->aktualcek}}</th>

        </tr>
        
</thead>
<tr>
        <th scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</th>
        <th scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</th>
        <th scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</th>   
</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold">Bulanan</th>
        
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold">Bersihkan Pompa - pompa</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l1}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l1k1}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Pengecekan Joint Coupling dan rubber Joint Coupling</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l2}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l2k2}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Pengecekan dudukan motor dan pompa</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l3}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l3k3}}
        </td>
</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold align-middle">3 Bulanan</th>
        
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Motor</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l4}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l4k4}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Bearing Motor</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l5}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l5k5}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Terminal Motor </td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l6}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l6k6}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Kipas Motor</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l7}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l7k7}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Poros Motor</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l8}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l8k8}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Pompa</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l9}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l9k9}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Valve</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l10}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l10k10}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Rubber Mounting</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l11}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l11k11}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Rubber Kopling</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l12}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l12k12}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Bearing Pompa</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l13}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l13k13}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Mekanikal Seal</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l14}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l14k14}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Impeler Pompa</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l15}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l15k15}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Presure Gauge</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l16}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
          {{$pmpompa->l16k16}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Presure Switch</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l17}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
          {{$pmpompa->l17k17}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Greasing Motor</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l18}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l18k18}}
        </td>
</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold align-middle">Tahunan</th>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Overhaul/Service motor & pompa</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l19}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l19k19}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Gulungan Motor</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l20}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l20k20}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Bersihkan Check Valve dan Gate valve</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l21}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l21k21}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Amper Meter Sesuai Name Plate</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmpompa->l22}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmpompa->l22k22}}
        </td>
</tr>

<tr>
    
    <td scope="col" align="center" class="font-weight-bold" colspan="9">Dikerjakan oleh : {{$pmpompa->teknisi}}</td>
    <td scope="col" align="center" class="font-weight-bold" colspan="9">Diperiksa Supervisor : {{$pmpompa->spv}}</td>
</tr>
</tbody>
</table>
