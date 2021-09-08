<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pm_Genset.xls");
?>
    
<h1 class="align-middle" align="center">Form Preventive Genset</h1>
    
<table border="1" cellpadding="5">
<tbody >
<thead class="thead-dark" align="center">
        <tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
            LOGO
            </th>
            <th scope="col" align="center" class="align-middle" colspan="8" style="background-color: gray">PM SCHEDULE :  {{$pmgenset->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="5" style="background-color: gray">Halaman 1-1</th>
        </tr>

        <tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">EQUIPMENT : GENSET 1250 KVA
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$pmgenset->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="center"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
                        
        </tr>

        <tr>
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$pmgenset->aktualcek}}</th>

        </tr>
        
</thead>
        <tr>
            <th scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</th>
            <th scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</th>
            <th scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</th>   
        </tr>

        <tr>
        <td scope="col" colspan="6" class="font-weight-bold">Check Level Oli Engine</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l1}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l1k1}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Air Filter</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l2}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l2k2}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Level Air Radiator</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l3}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l3k3}}
        </td>
</tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Valve Suply Solar</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l4}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l4k4}}
        </td>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Cleaning Body Genset</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l5}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l5k5}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Selektor Swicth Pompa Solar</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l6}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l6k6}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Level Tanki Harian</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l7}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l7k7}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Level Tanki Bulanan</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l8}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l8k8}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Emergency Stop Button</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l9}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l9k9}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Voltage Charger Accu</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l10}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l10k10}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Voltage Accu</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l11}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l11k11}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Odometer Running Hours</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l12}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l12k12}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Mode OPS Modul PKG</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l13}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l13k13}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Selektor Swicth CB Outgoing</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l14}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l14k14}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Durasi Warmingup 5 s/d 10 Menit</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l15}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l15k15}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="5" rowspan="3" class="font-weight-bold ">Check Voltage</td>
        
        <td scope="col"  class="font-weight-bold">R-S</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->vr}}
        </td>
        
        <td scope="col" align="center" colspan="5" rowspan="3" class="font-weight-bold align-middle">
          {{$pmgenset->l16k16}}
        </td>
</tr>

<tr>
        <td scope="col"  class="font-weight-bold">S-T</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->vs}}
        </td>
        
</tr>

<tr>
        <td scope="col"  class="font-weight-bold">T-R</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->vt}}
        </td>
        
</tr>

<tr>
        <td scope="col"  colspan="5" rowspan="3" class="font-weight-bold align-middle">Check Ampere</td>
    
        <td scope="col"  class="font-weight-bold">R</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->ampr}}
        </td>
        
        <td scope="col" align="center" colspan="5" rowspan="3" class="font-weight-bold align-middle">
          {{$pmgenset->l17k17}}
        </td>
</tr>

<tr>
        <td scope="col"  class="font-weight-bold">S</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->amps}}
        </td>
        
</tr>

<tr>
        <td scope="col"  class="font-weight-bold">T</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->ampt}}
        </td>
        
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check WATT/KW</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l18}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l18k18}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Frequency (Hz)</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l19}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l19k19}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Pf (Cos p)</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l20}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l20k20}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check KWH</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l21}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l21k21}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Kva</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l22}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l22k22}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Check KvaRH</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l23}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l23k23}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Charger Alternator</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l24}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l24k24}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Temperature Engine</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l25}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l25k25}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Pressure Oli</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmgenset->l26}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgenset->l26k26}}
        </td>
</tr>
        <tr>
            
            <td scope="col" align="center" class="font-weight-bold" colspan="9">Dikerjakan oleh : {{$pmgenset->teknisi}}</td>
            <td scope="col" align="center" class="font-weight-bold" colspan="9">Diperiksa Supervisor : {{$pmgenset->spv}}</td>
        </tr>
</tbody>
</table>
