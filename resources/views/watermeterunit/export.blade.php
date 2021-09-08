<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename= watermeter unit.xls");
?>
<h3>Data Water Meter Unit</h3>
    <h3>Bulan : <?php echo DATE('M-Y')?></h3>
<table border="1" cellpadding="5">
  <tr>
    <th style="background-color: cyan">No</th>
    <th style="background-color: cyan">Unit</th>
    <th style="background-color: cyan">No Seri</th>
    <th style="background-color: cyan">Stand AWal</th>
    <th style="background-color: cyan">Stand Akhir</th>
    <th style="background-color: cyan">Pemakaian</th>
    <th style="background-color: cyan">Tarif Pemakaian</th>
    <th style="background-color: cyan">Biaya Pemakaian</th>
    <th style="background-color: cyan">Biaya Admin</th>
    <th style="background-color: cyan">Biaya Pemeliharaan</th>
    <th style="background-color: cyan">Total Tagihan</th>
  </tr>
  
  <?php $i = 1; $p = 6;?>
 <?php  $admin=10000;?>
 <?php $harga=12550;?>
 <?php $m=43000;?>
 
  <?php foreach($Watermeterunit as $row):?>
    
  <tr>
  <th><?=$i; ?></th>
  <th><?=$row["Unit"]; ?></th>
  <th><?=$row["NoSeri"]; ?></th>
  <th><?=$row["StandAwal"]; ?></th>
  <th><?=$row["StandAkhir"]; ?></th>
  <th><?=$row["TotalPakai"]; ?></th>
  <th><?=$harga?></th>
  <th><?=($row["TotalPakai"]*12550); ?></th>
  <th><?=$admin; ?></th>
  <th><?=$m; ?></th>
  <th>=((h<?=$p?>)+(I<?=$p?>)+(J<?=$p?>))</th> 
  </tr>
    
   <?php $i++; $p++;?> 
  <?php endforeach;?>
</table>