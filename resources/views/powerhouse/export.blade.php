<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=PowerHouse.xls");
?>
<h3>Data PowerHouse</h3>
<h3>Bulan : <?php echo DATE('M-Y')?></h3>
    
<table border="1" cellpadding="5">
    @php $no=1; @endphp
    @foreach ($PowerHouse as $ph)
    <thead class="thead-dark" align="center">
        
            <th scope="col"   class="align-middle" style="background-color: cyan">No</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Tanggal</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Teknisi</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Shift</th>
            <th scope="col" align="center"  class="align-middle" style="background-color: cyan">Item Pengecekan</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">PUTR 1 </th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">PUTR 2 </th>
            <th scope="col" align="center" class="align-middle"  style="background-color: cyan">Diperiksa (spv)</th>
        
    </thead>

    
         <tr>
    <th scope="col" align="center"   class="font-weight-bold align-middle" rowspan="28">{{$no++}}</th>
    <th scope="col" align="center"   class="font-weight-bold align-middle" rowspan="27">{{$ph->created_at}}</th>
    <th scope="col" align="center"   class="font-weight-bold align-middle" rowspan="27">{{$ph->teknisi}}</th>
    <th scope="col" align="center"   class="font-weight-bold align-middle" rowspan="27">{{$ph->shift}}</th>
    <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="3">A. POWER METER PUTR</td>
    <th scope="col" align="center" class="align-middle" rowspan="28" class="font-weight-bold">{{$ph->spv}}</th>
    
</tr>
<tr>
    <td scope="col" align="center">Total KWH</td>
    <td scope="col" align="center">{{$ph->kwh1}}</td>
    <td scope="col" align="center">{{$ph->kwh2}}</td>
</tr>
<tr>
    <td scope="col" align="center">Total Kva</td>
    <td scope="col" align="center">{{$ph->kva1}}</td>
    <td scope="col" align="center">{{$ph->kva2}}</td>
</tr>

<tr>
    <td scope="col" align="center">Total KVarH</td>
    <td scope="col" align="center">{{$ph->kvarh1}}</td>
    <td scope="col" align="center">{{$ph->kvarh2}}</td>
</tr>
<tr>
    <td scope="col" align="center">Ampere R</td>
    <td scope="col" align="center">{{$ph->ampere1r}}</td>
    <td scope="col" align="center">{{$ph->ampere2r}}</td>
</tr>
<tr>
    <td scope="col" align="center">Ampere S</td>
    <td scope="col" align="center">{{$ph->ampere1s}}</td>
    <td scope="col" align="center">{{$ph->ampere2s}}</td>
</tr>
<tr>
    <td scope="col" align="center">Ampere T</td>
    <td scope="col" align="center">{{$ph->ampere1t}}</td>
    <td scope="col" align="center">{{$ph->ampere2t}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage R-S</td>
    <td scope="col" align="center">{{$ph->v1rs}}</td>
    <td scope="col" align="center">{{$ph->v2rs}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage S-T</td>
    <td scope="col" align="center">{{$ph->v1st}}</td>
    <td scope="col" align="center">{{$ph->v2st}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage T-R</td>
    <td scope="col" align="center">{{$ph->v1tr}}</td>
    <td scope="col" align="center">{{$ph->v2tr}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage R-N</td>
    <td scope="col" align="center">{{$ph->v1rn}}</td>
    <td scope="col" align="center">{{$ph->v2rn}}</td>
</tr>
<tr>
    <td scope="col" align="center">Voltage S-N</td>
    <td scope="col" align="center">{{$ph->v1sn}}</td>
    <td scope="col" align="center">{{$ph->v2sn}}</td>
</tr>
<tr>
    <td scope="col" align="center">VoltageT-N</td>
    <td scope="col" align="center">{{$ph->v1tn}}</td>
    <td scope="col" align="center">{{$ph->v2tn}}</td>
</tr>
<tr>
    <td scope="col" align="center">Frequency </td>
    <td scope="col" align="center">{{$ph->freq1}}</td>
    <td scope="col" align="center">{{$ph->freq2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Selector Panel</td>
    <td scope="col" align="center">{{$ph->selektor1}}</td>
    <td scope="col" align="center">{{$ph->selektor2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Fan Blower panel</td>
    <td scope="col" align="center">{{$ph->fan1}}</td>
    <td scope="col" align="center">{{$ph->fan2}}</td>
</tr>
<tr>
    <td scope="col" align="center"   class="font-weight-bold" colspan="3">B. CAPASITOR BANK</td>
</tr>
<tr>    
    <td scope="col" align="center">Power Factor(cosp)</td>
    <td scope="col" align="center">{{$ph->pf1}}</td>
    <td scope="col" align="center">{{$ph->pf2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Step Cap On</td>
    <td scope="col" align="center">{{$ph->cap1}}</td>
    <td scope="col" align="center">{{$ph->cap2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Fan Blowe Panel</td>
    <td scope="col" align="center">{{$ph->fancap1}}</td>
    <td scope="col" align="center">{{$ph->fancap2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Temperature panel</td>
    <td scope="col" align="center">{{$ph->tempcap1}}</td>
    <td scope="col" align="center">{{$ph->tempcap2}}</td>
</tr>
<tr>
    <td scope="col" align="center"   class="font-weight-bold" colspan="3">C. TRAFO 1</td>
</tr>
<tr>    
    <td scope="col" align="center" >Level Oli Trafo</td>
    <td scope="col" align="center" colspan="2">{{$ph->levelolitrafo1}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Temperature Oli </td>
    <td scope="col" align="center" colspan="2">{{$ph->temptrafo1}}</td>
</tr>
<tr>
    <td scope="col" align="center"   class="font-weight-bold" colspan="3">D. TRAFO 2 </td>
</tr>
<tr>    
    <td scope="col" align="center">Level Oli Trafo</td>
    <td scope="col" align="center" colspan="2">{{$ph->levelolitrafo2}}</td>
</tr>
<tr>    
    <td scope="col" align="center">Temperature Oli </td>
    <td scope="col" align="center" colspan="2">{{$ph->temptrafo2}}</td>
</tr>
<tr>
    
    <td scope="col" align="left" colspan="6" class="font-weight-bold text-danger ">Temuan :   {{$ph->temuan}} </td>
    
</tr>
@endforeach


</table>