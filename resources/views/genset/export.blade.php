<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Genset.xls");
?>
<h3>Data Genset</h3>
<h3>Bulan : <?php echo DATE('M-Y')?></h3>
    
<table border="1" cellpadding="5">
    <thead class="thead-dark" align="center">
        
            <th scope="col"   class="align-middle" style="background-color: cyan">No</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Tanggal</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Teknisi</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Shift</th>
            <th scope="col" align="center"  class="align-middle" style="background-color: cyan">Item Pengecekan</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Batasan Normal</th>
            <th scope="col" align="center" class="align-middle" style="background-color: cyan">Status</th>
            <th scope="col" align="center" class="align-middle"  style="background-color: cyan">Diperiksa (spv)</th>
        
    </thead>

    @php $no=1; @endphp
    @foreach ($Genset as $genset)
        <tr>
                <th scope="col" align="center" rowspan="13" class="font-weight-bold">{{$no++}}</th>
                <th scope="col" align="center"  class="font-weight-bold" rowspan="12" >{{$genset->created_at}}</th>
                <th scope="col" align="center"  class="font-weight-bold" rowspan="12" >{{$genset->teknisi}}</th>
                <th scope="col" align="center"  class="font-weight-bold" rowspan="12" >{{$genset->shift}}</th>
                <td scope="col" align="center">Level oli engine </td>
                <td scope="col" align="center">High / Low </td>
                <td scope="col" align="center">{{$genset->leveloli}}</td>
                <th scope="col" align="center" rowspan="12">{{$genset->spv}}</th>
        </tr>        

        <tr>
        
        <td scope="col" align="center">Mode OPS Modul PKG </td>
        <td scope="col" align="center">Auto / Off / Manual </td>
        <td scope="col" align="center">{{$genset->modemodulpkg}}</td>
        
        </tr>
        <tr>
                
                <td scope="col" align="center">Level Air Radiator </td>
                <td scope="col" align="center">High / Low </td>
                <td scope="col" align="center">{{$genset->levelradiator}}</td>
                
        </tr>
        <tr>
                
                <td scope="col" align="center">Odometer Running Hours </td>
                <td scope="col" align="center">250 Jam </td>
                <td scope="col" align="center">{{$genset->odometer}}</td>
                
        </tr>
        <tr>
                
                <td scope="col" align="center">Air filter </td>
                <td scope="col" align="center">Bersih / Kotor </td>
                <td scope="col" align="center">{{$genset->airfilter}}</td>
               
        </tr>
        <tr>
                
                <td scope="col" align="center">Selektor Swicth Pompa Solar </td>
                <td scope="col" align="center">Auto / Off / Manual </td>
                <td scope="col" align="center">{{$genset->pompasolar}}</td>
                
        </tr>
        <tr>
               
                <td scope="col" align="center">Valve Suply Solar </td>
                <td scope="col" align="center">Buka / Tutup </td>
                <td scope="col" align="center">{{$genset->valvesolar}}</td>
               
        </tr>
        <tr>
                
                <td scope="col" align="center">Voltage Accu </td>
                <td scope="col" align="center">23-24Vdc </td>
                <td scope="col" align="center">{{$genset->voltageaccu}}</td>
                
        </tr>
        <tr>
                
                <td scope="col" align="center">Voltage Charge Accu </td>
                <td scope="col" align="center">23-27Vdc </td>
                <td scope="col" align="center">{{$genset->voltagecharger}}</td>
                 
        </tr>
        <tr>
                
                <td scope="col" align="center">Automatic Main Failure </td>
                <td scope="col" align="center">Auto / Off / Manual </td>
                <td scope="col" align="center">{{$genset->amf}}</td>
                
        </tr>
        <tr>
                
                <td scope="col" align="center">Emergency Stop Button </td>
                <td scope="col" align="center">NO / NC </td>
                <td scope="col" align="center">{{$genset->emergencybutton}}</td>
                
        </tr>
        <tr>
                
                <td scope="col" align="center">Body Gen-Set </td>
                <td scope="col" align="center">Bersih / Kotor </td>
                <td scope="col" align="center">{{$genset->bodygenset}}</td>
               
        </tr>
        <tr>
        <th scope="col" class="align-top" colspan="7" align="left" class="font-weight-bold">Temuan:{{$genset->catatan}} 
        </th>
       
        </tr>

    @endforeach


</table>