<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename= Transferpump.xls");
?>
<h3>Data TransferPump</h3>
    <h3>Bulan : <?php echo DATE('M-Y')?></h3>
<table border="1" cellpadding="5">
  <thead class="thead-dark" align="center">

  
    <tr>
        <th scope="col" align="center" rowspan="2" class="align-middle" style="background-color: cyan">No</th>
        <th scope="col" align="center" rowspan="2" class="align-middle" style="background-color: cyan">Tanggal</th>
        <th scope="col" align="center" rowspan="2" class="align-middle" style="background-color: cyan">Teknisi</th>
        <th scope="col" align="center" rowspan="2" class="align-middle" style="background-color: cyan">Shift</th>

        <th scope="col" align="center" colspan="2" style="background-color: cyan">Transfer pump A</th>
        <th scope="col" align="center" colspan="2" style="background-color: cyan">Transfer pump B</th>
        <th scope="col" align="center" colspan="2" style="background-color: cyan">Transfer pump C</th>
        <th scope="col" align="center" colspan="2" style="background-color: cyan">Transfer pump Cadangan</th>
        <th scope="col" align="center"  rowspan="2" class="align-middle" style="background-color: cyan">Kondisi Pompa</th>
        <th scope="col" align="center" rowspan="2" class="align-middle" style="background-color: cyan">Diperiksa oleh (spv)</th>
    </tr> 
    <tr>
        <th scope="col" align="center" style="background-color: cyan">Posisi Valve</th>
        <th scope="col" align="center" style="background-color: cyan">Status</th>
        <th scope="col" align="center" style="background-color: cyan">Posisi Valve</th>
        <th scope="col" align="center" style="background-color: cyan">Status</th>
        <th scope="col" align="center" style="background-color: cyan">Posisi Valve</th>
        <th scope="col" align="center" style="background-color: cyan">Status</th>
        <th scope="col" align="center" style="background-color: cyan">Posisi Valve</th>
        <th scope="col" align="center" style="background-color: cyan">Status</th>
    </tr>
    


</thead>
  
  <?php $i = 1;?>
 
  <?php foreach($Transferpump as $row):?>
    
  <tr>
        <td scope="col" align="center" class="align-middle font-weight-bold" >{{$i++}}</td>
        <td scope="col" class="align-middle" align="center" >{{$row->created_at}}</td>
        <td scope="col" align="center" class="align-middle">{{$row->teknisi}}
        <td scope="col" align="center" class="align-middle">{{$row->shift}}</td>
        
        <td scope="col" align="center"class="align-middle"  >{{$row->valve_tfa}}</td>
        <td scope="col" align="center"class="align-middle" >{{$row->status_tfa}}</td>
        <td scope="col" align="center"class="align-middle"  >{{$row->valve_tfb}}</td>
        <td scope="col" align="center"class="align-middle" >{{$row->status_tfb}}</td>
        <td scope="col" align="center"class="align-middle"  >{{$row->valve_tfc}}</td>
        <td scope="col" align="center"class="align-middle" >{{$row->status_tfc}}</td>
        <td scope="col" align="center"class="align-middle"  >{{$row->valve_tfd}}</td>
        <td scope="col" align="center" class="align-middle">{{$row->status_tfd}}</td>
        <td scope="col" align="center" class="align-middle" >{{$row->kondisi}}</td>
        <td scope="col" align="center"  class="align-middle">{{$row->spv}}
        </td>
        
</tr>
    
   <?php $i++;?> 
  <?php endforeach;?>
</table>