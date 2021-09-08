<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Stp.xls");
?>
<h3>Data Stp</h3>
<h3>Bulan : <?php echo DATE('M-Y')?></h3>
    
<table border="1" cellpadding="5">

    <thead class="thead-dark" align="center">
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">No</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Tanggal</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Teknisi</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Shift</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Item Pengecekan</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Status</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Diperiksa (spv)</th>
    </thead>

    @php $no=1; @endphp
    @foreach ($Stp as $stp)
    

<tr>
    <th scope="col" align="center" rowspan="30" class="font-weight-bold">{{$no++}}</th>
    <th scope="col" align="center"  class="font-weight-bold " rowspan="28" >{{$stp->created_at}}</th>
    <th scope="col" align="center"  class="font-weight-bold " rowspan="28" >{{$stp->teknisi}}</th>
    <th scope="col" align="center"  class="font-weight-bold " rowspan="28" >{{$stp->shift}}</th>
    <td scope="col" align="center">Basket Screen </td>
    <td scope="col" align="center">{{$stp->basketscreen}}</td>
    <th scope="col" align="center" rowspan="30">{{$stp->spv}}</th>
       
</tr>
<tr>
  <td scope="col" align="center" colspan="2" class="font-weight-bold">A. Blower </td>
</tr>
<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">{{$stp->selektorblower}}</td>   
</tr>
<tr>
        <td scope="col" align="center">Status Blower 1 </td>
        <td scope="col" align="center">{{$stp->statusblower1}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Pressure Blower 1 </td>
        <td scope="col" align="center">{{$stp->pressureblower1}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Kondisi Umum Blower 1</td> 
        <td scope="col" align="center">{{$stp->kondisiblower1}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Status Blower 2 </td>
        <td scope="col" align="center">{{$stp->statusblower2}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Pressure Blower 2 </td>
        <td scope="col" align="center">{{$stp->pressureblower2}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Kondisi Umum Blower 2</td>
        <td scope="col" align="center">{{$stp->kondisiblower2}}</td>    
</tr>
<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">B. Equalizing Pump </td>
</tr>
<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">{{$stp->selektorequalizing}}</td>   
</tr>
<tr>
        <td scope="col" align="center">Status Equalizing pump 1 </td>
        <td scope="col" align="center">{{$stp->statusequalizing1}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Status Equalizing pump 2 </td>
        <td scope="col" align="center">{{$stp->statusequalizing2}}</td>    
</tr>
<tr>    
        <td scope="col" align="center">Level Tank Equalizing </td>
        <td scope="col" align="center">{{$stp->levelequalizing}}</td>
</tr>
<tr>
        <td scope="col" align="center">Kondisi Air Equalizing </td>
        <td scope="col" align="center">{{$stp->kondisiequalizing}}</td>    
</tr>
<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">C. Effluent Pump </td>
</tr>
<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">{{$stp->selektoreffluent}}</td>   
</tr>
<tr>
        <td scope="col" align="center">Status Effluent pump 1 </td>
        <td scope="col" align="center">{{$stp->statuseffluent1}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Status Effluent pump 2 </td>
        <td scope="col" align="center">{{$stp->statuseffluent2}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Level Tank Effluent </td>
        <td scope="col" align="center">{{$stp->leveleffluent}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Kondisi Air Effluent </td>
        <td scope="col" align="center">{{$stp->kondisieffluent}}</td>    
</tr>
<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">D. Fillter Pump </td>
</tr>
<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">{{$stp->selektorfilter}}</td>   
</tr>
<tr>
        <td scope="col" align="center">Status Fillter pump 1 </td>
        <td scope="col" align="center">{{$stp->statusfilter1}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Status Fillter pump 2 </td>
        <td scope="col" align="center">{{$stp->statusfilter2}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Intake Fan </td>
        <td scope="col" align="center">{{$stp->intakefan}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Exhaust Fan </td>
        <td scope="col" align="center">{{$stp->exhaustfan}}</td>    
</tr>
<tr>
        <td scope="col" align="center">Stand Meteran Air </td>
        <td scope="col" align="center">{{$stp->standmeter}}</td>   
</tr>
<tr>
        <th scope="col" class="align-top" colspan="5" rowspan="2" class="font-weight-bold" style="color: red">Temuan: {{$stp->temuan}} 
        </th>
</tr>
<tr></tr>
 @endforeach


</table>