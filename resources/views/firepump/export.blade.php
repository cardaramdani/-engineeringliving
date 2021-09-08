<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Firepump.xls");
?>
<h3>Data Firepump</h3>
    
<table border="1" cellpadding="5">
<h3>Bulan : <?php echo DATE('M-Y')?></h3>
    <thead class="thead-dark" align="center">
<tr>
        
        <th scope="col" align="center"  class="align-middle " style="background-color: cyan" >NO</th>
        <th scope="col" align="center"  class="align-middle " style="background-color: cyan" >Tanggal</th>
        <th scope="col"  class="align-middle font-weight-bold" style="background-color: cyan" >Teknisi</th>
        <th scope="col" align="center" class="align-middle" style="background-color: cyan">Shift</th>
        <th scope="col" align="center" class="align-middle" style="background-color: cyan">Item Pengecekan</th>
        <th scope="col" align="center" class="align-middle" style="background-color: cyan">Batasan Normal</th>
        <th scope="col" align="center" class="align-middle"  style="background-color: cyan">Status </th>
        <th scope="col" align="center" class="align-middle"  style="background-color: cyan">Diperiksa (spv) </th>
    
</tr>

</thead>
  @php $no=1; @endphp
@foreach ($Firepump as $pf)

<tr>
    <th scope="col" align="center"   class="font-weight-bold" rowspan="26">{{$no++}}</th>
    <th scope="col" align="center"   class="font-weight-bold" rowspan="26">{{$pf->created_at}}</th>
    <th scope="col" align="center"   class="font-weight-bold" rowspan="26">{{$pf->teknisi}}</th>
    <th scope="col" align="center"   class="font-weight-bold" rowspan="26">{{$pf->shift}}</th>
    <th scope="col" align="center"   class="font-weight-bold" colspan="3">A. Jockey Pump</th>
    
    <th scope="col" align="center" class="align-middle" rowspan="26" class="font-weight-bold">{{$pf->spv}}</th>
    
</tr>
<tr>
    <th scope="col" align="center">Status</th>
    <th scope="col" align="center">On / Off</th>
    <td scope="col" align="center">{{$pf->statusjockey}}</td>
</tr>
<tr>
    <th scope="col" align="center">Selector Switch</th>
    <th scope="col" align="center">Auto / Off / Manual</th>
    <td scope="col" align="center">{{$pf->selectorjockey}}</td>
</tr>

<tr>
    
    <th scope="col" align="center">Status Valve</th>
    <th scope="col" align="center">Buka / Tutup</th>
    <td scope="col" align="center">{{$pf->valvejockey}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Pressure (On)</th>
    <th scope="col" align="center">Min 10 Bar</th>
    <td scope="col" align="center">{{$pf->onpressurejockey}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Pressure (Off)</th>
    <th scope="col" align="center">11 Bar</th>
    <td scope="col" align="center">{{$pf->ofpressurejockey}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Kebersihan Pompa</th>
    <th scope="col" align="center">Bersih / Kotor </th>
    <td scope="col" align="center">{{$pf->bodyjockey}}</td>
</tr>
<tr>
    <th scope="col" align="center"   class="font-weight-bold" colspan="3">B. Elektric Pump</th>
    
</tr>
<tr>
    
    <th scope="col" align="center">Status</th>
    <th scope="col" align="center">On / Off</th>
    <td scope="col" align="center">{{$pf->statuselectric}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Selector Switch</th>
    <th scope="col" align="center">Auto / Off / Manual</th>
    <td scope="col" align="center">{{$pf->selectorelectric}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Status Valve</th>
    <th scope="col" align="center">Buka / Tutup</th>
    <td scope="col" align="center">{{$pf->valveelectric}}</td>
</tr>
<tr>
 
    <th scope="col" align="center">Pressure (On)</th>
    <th scope="col" align="center">Min 9 Bar</th> 
    <td scope="col" align="center">{{$pf->onpressureelectric}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Pressure (Off)</th>
    <th scope="col" align="center">Manual </th>
    <td scope="col" align="center">{{$pf->ofpressureelectric}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Kebersihan Pompa</th>
    <th scope="col" align="center">Bersih / Kotor </th>
    <td scope="col" align="center">{{$pf->bodyelectric}}</td>
</tr>
<tr>
        <th scope="col" align="center"   class="font-weight-bold" colspan="3">C. Diesel Pump</th>
        
</tr>
<tr>
    
    <th scope="col" align="center">Status</th>
    <th scope="col" align="center">On / Off</th>
    <td scope="col" align="center">{{$pf->statusdiesel}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Selector Switch</th>
    <th scope="col" align="center">Auto / Off / Manual</th>
    <td scope="col" align="center">{{$pf->selectordiesel}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Status Valve</th>
    <th scope="col" align="center">Buka / Tutup</th>
    <td scope="col" align="center">{{$pf->valvediesel}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Pressure (On)</th>
    <th scope="col" align="center">Min 7 Bar</th>
    <td scope="col" align="center">{{$pf->onpressurediesel}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Pressure (Off)</th>
    <th scope="col" align="center">Manual </th>
    <td scope="col" align="center">{{$pf->ofpressurediesel}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Battery Charger</th>
    <th scope="col" align="center">24-26 Vdc</th>
    <td scope="col" align="center">{{$pf->batterycharger}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Level Oli</th>
    <th scope="col" align="center">High / Low </th>
    <td scope="col" align="center">{{$pf->leveloli}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Level Air Radiator</th>
    <th scope="col" align="center">High / Low </th>
    <td scope="col" align="center">{{$pf->levelradiator}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Level Solar</th>
    <th scope="col" align="center">High / Low </th>
    <td scope="col" align="center">{{$pf->levelsolar}}</td>
</tr>
<tr>
    
    <th scope="col" align="center">Aktual pressure Pipa Header</th>
    <th scope="col" align="center">7-10 Bar</th>
    <td scope="col" align="center">{{$pf->aktualpressureheader}}</td>
</tr>
<tr>
    <th scope="col" class="align-top" colspan="3" class="font-weight-bold">Temuan: {{$pf->temuan}}</th>
    
</tr>














        @endforeach
</table>