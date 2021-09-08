<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Logbook.xls");
?>
<h3>Data Logbook</h3>
    <h3>Bulan : <?php echo DATE('M-Y')?></h3>
<table border="1" cellpadding="5">
  <tr>
    <th style="background-color: cyan">No</th>
    <th style="background-color: cyan">Shift</th>
    <th style="background-color: cyan">Teknisi</th>
    <th style="background-color: cyan">Deskripsi</th>
    <th style="background-color: cyan">Tanggal Catat</th>


  </tr>

  <?php $i = 1;?>

  <?php foreach($Logbook as $row):?>

  <tr>
    <th align="center" class="align-middle"><?=$i; ?></th>
    <th align="center" class="align-middle"><?=$row["shift"]; ?></th>
    <th align="center" class="align-middle"><?=$row["teknisi"]; ?></th>
    <th align="center" class="align-middle">
        <textarea  cols="90" rows="10" name="deskripsi"><?=$row["deskripsi"]; ?></textarea>
    </th>
    <th align="center" class="align-middle"><?=$row["created_at"]; ?></th>

  </tr>

   <?php $i++;?>
  <?php endforeach;?>

</table>

