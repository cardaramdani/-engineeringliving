<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=PDAM.xls");
?>
<h3>Data PDAM</h3>
    <h3>Bulan : <?php echo DATE('M-Y')?></h3>
<table border="1" cellpadding="5">
  <tr>
    <th style="background-color: cyan">No</th>
    <th style="background-color: cyan">Teknisi</th>
    <th style="background-color: cyan">Shift</th>
    <th style="background-color: cyan">Stand Water Meter</th>
    <th style="background-color: cyan">Tanggal Catat</th>


  </tr>

  <?php $i = 1;?>

  <?php foreach($Pdam as $row):?>

  <tr>
    <th><?=$i; ?></th>
    <th><?=$row["teknisi"]; ?></th>
    <th><?=$row["shift"]; ?></th>
    <th><?=$row["stand"]; ?></th>
    <th><?=$row["created_at"]; ?></th>

  </tr>

   <?php $i++;?>
  <?php endforeach;?>

</table>
