<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=AMR.xls");
?>
<h3>Data Amr</h3>
    <h3>Bulan : <?php echo DATE('M-Y')?></h3>
<table border="1" cellpadding="5">
  <tr>
    <th style="background-color: cyan">No</th>
    <th style="background-color: cyan">Shift</th>
    <th style="background-color: cyan">Teknisi</th>
    <th style="background-color: cyan">Cosp</th>
    <th style="background-color: cyan">Lwbp</th>
    <th style="background-color: cyan">Wbp</th>
    <th style="background-color: cyan">Total</th>
    <th style="background-color: cyan">Kvarh</th>
    <th style="background-color: cyan">Penalty</th>
    <th style="background-color: cyan">Tanggal Catat</th>
   

  </tr>
  
  <?php $i = 1;?>
 
  <?php foreach($Amr as $row):?>
    <?php $kali= "=16*"?>
  <tr>
    <th><?=$i; ?></th>
    <th><?=$row["shift"]; ?></th>
    <th><?=$row["teknisi"]; ?></th>
    <th><?=$row["cosp"]; ?></th>
    <th><?=$kali.$row["lwbp"]; ?></th>
    <th><?=$kali.$row["wbp"]; ?></th>
    <th><?=$kali.$row["total"]; ?></th>
    <th><?=$kali.$row["kvarh"]; ?></th>
    <th><?=$kali.$row["penalty"]; ?></th>
    <th><?=$row["created_at"]; ?></th>
  
  </tr>
    
   <?php $i++;?> 
  <?php endforeach;?>
  
</table>