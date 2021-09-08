<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pm_Panel.xls");
?>
    
<h1 class="align-middle" align="center">Form Preventive Panel</h1>
    
<table border="1" cellpadding="5">
<tbody>
<thead class="thead-dark" align="center">
        <tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
            LOGO
            </th>
            <th scope="col" align="center" class="align-middle" colspan="8" style="background-color: gray">PM SCHEDULE :  {{$pmpanel->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="5" style="background-color: gray">Halaman 1-1</th>
        </tr>

        <tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" style="background-color: gray">EQUIPMENT : Panel Power
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$pmpanel->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="center"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
                        
        </tr>

        <tr>
          <th scope="col" align="left" class="align-middle" colspan="5" style="background-color: gray">LOKASI & NAMA PANEL : {{$pmpanel->lokasi}}
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$pmpanel->aktualcek}}</th>

        </tr>

        
</thead>
        <tr>
            <th scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</th>
            <th scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</th>
            <th scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</th>   
        </tr>

        <tr>
        <td scope="col" colspan="6" class="font-weight-bold">Cleaning Box Panel </td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          {{$pmpanel->l1}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
          {{$pmpanel->l1k1}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Kencangkan Sreuw Terminal kabel</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l2}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
          {{$pmpanel->l2k2}}
        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Cleaning Contaktor</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l3}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
          {{$pmpanel->l3k3}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Cleaning Relay</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l4}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
          {{$pmpanel->l4k4}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Push Botton</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l5}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
          {{$pmpanel->l5k5}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Ampere Meter</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l6}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
          {{$pmpanel->l6k6}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Volt Meter</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l7}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
          {{$pmpanel->l7k7}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Indikator lamp</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l8}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
          {{$pmpanel->l8k8}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Cleaning MCB Panel</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l9}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
          {{$pmpanel->l9k9}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Kabel</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l10}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l10k10}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Exhaust Fan</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l11}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l11k11}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Lampu Penerangan</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l12}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l12k12}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check MMCB Panel</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l13}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l13k13}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check ACB Panel</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l14}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l14k14}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Kapasitor</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l15}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l15k15}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle">Check Thermis Relay</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l16}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l16k16}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle">Check Fuse</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l17}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l17k17}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle">Check Timer</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l18}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l18k18}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle">Bersihkan panel listrik dari debu</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l19}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l19k19}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle">Check Temperature Koneksi Main mcb</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          
            {{$pmpanel->l20}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          
            {{$pmpanel->l20k20}}
        </td>
</tr>

        <tr>
            
            <td scope="col" align="center" class="font-weight-bold" colspan="9">Dikerjakan oleh : {{$pmpanel->teknisi}}</td>
            <td scope="col" align="center" class="font-weight-bold" colspan="9">Diperiksa Supervisor : {{$pmpanel->spv}}</td>
        </tr>
</tbody>
</table>
