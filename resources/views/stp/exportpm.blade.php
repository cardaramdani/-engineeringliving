<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pm_STP.xls");
?>
    
<h1 class="align-middle" align="center">Form Preventive STP</h1>
    
<table border="1" cellpadding="5">
<tbody>
<thead class="thead-dark" align="center">
        <tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
            LOGO
            </th>
            <th scope="col" align="center" class="align-middle" colspan="8" style="background-color: gray">PM SCHEDULE :  {{$pmstp->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="5" style="background-color: gray">Halaman 1-1</th>
        </tr>

        <tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">EQUIPMENT : Sewage Treatment Plan
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$pmstp->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="center"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
                        
        </tr>

        <tr>
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$pmstp->aktualcek}}</th>

        </tr>
        
</thead>
<tr>
        <th scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</th>
        <th scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</th>
        <th scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</th>   
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold">Check Ketinggian lumpur / ketebalan</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l1}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l1k1}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Pompa Effluent</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l2}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l2k2}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Kabel Pompa</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l3}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l3k3}}
        </td>
</tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Floating Switch</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l4}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l4k4}}
        </td>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Valve</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l5}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l5k5}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Grease trap</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l6}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l6k6}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Bracket inlet pipa</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l7}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l7k7}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Grill</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l8}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l8k8}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Carbon Filter</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l9}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l9k9}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Dozink pump</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l10}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l10k10}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Clorine tank</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l11}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l11k11}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Filter Pump</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l12}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l12k12}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Distribution pump</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l13}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l13k13}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Greasing Blower Pump</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l14}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l14k14}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check V-Belt Blower Pump</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l15}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l15k15}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Intake Fan</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l16}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
          {{$pmstp->l16k16}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Exhaust Fan</td>
        
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l17}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
          {{$pmstp->l17k17}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Lampu Penerangan</td>
  
        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmstp->l18}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmstp->l18k18}}
        </td>
</tr>


<tr>
    
    <td scope="col" align="center" class="font-weight-bold" colspan="9">Dikerjakan oleh : {{$pmstp->teknisi}}</td>
    <td scope="col" align="center" class="font-weight-bold" colspan="9">Diperiksa Supervisor : {{$pmstp->spv}}</td>
</tr>
</tbody>
</table>
