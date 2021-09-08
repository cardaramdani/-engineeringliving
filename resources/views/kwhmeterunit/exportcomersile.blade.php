<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename= Kwh_Comersile.xls");
?>
<h3>Data Kwh Meter Comersile</h3>
<h3>Bulan : <?php echo DATE('M-Y')


?></h3>
    
<table border="1" cellpadding="5">
  <tr>
    <th style="background-color: cyan">No</th>
    <th style="background-color: cyan">Unit</th>
    <th style="background-color: cyan">No Seri</th>
    <th style="background-color: cyan">Daya</th>
    <th style="background-color: cyan">Faktor Kali</th>
    <th style="background-color: cyan">Stand AWal Lwbp</th>
    <th style="background-color: cyan">Stand Akhir Lwbp</th>
    <th style="background-color: cyan">Pemakaian lwbp</th>
    <th style="background-color: cyan">Stand AWal wbp</th>
    <th style="background-color: cyan">Stand Akhir wbp</th>
    <th style="background-color: cyan">Pemakaian wbp</th>
    <th style="background-color: cyan">Tarif Pemakaian lwbp</th>
    <th style="background-color: cyan">Tarif Pemakaian wbp</th>
    <th style="background-color: cyan">Biaya Pemakaian lwbp</th>
    <th style="background-color: cyan">Biaya Pemakaian wbp</th>
    <th style="background-color: cyan">Biaya Admin</th>
    <th style="background-color: cyan">Abodement</th>
    <th style="background-color: cyan">Sub Tot</th>
    <th style="background-color: cyan">Total Tagihan</th>
  </tr>
  
  <?php $i = 1; $p = 6;?>
 <?php  $admin=10000;?>
 <?php 
 $harga_lwbp=1444.70;
 $harga_wbp=1444.70;
 $Abodement=1444.70;
 ?>
  <?php foreach($Kwhcomersile as $row):?>
    
  <tr>
  <th><?=$i;?></th>
  <th><?=$row["Unit"]; ?></th>
  <th><?=$row["NoSeri"]; ?></th>
  <th><?=number_format($row["Daya"],2,',','.');?></th>
  <th><?=$row["Faktor_kali"]; ?></th>
  <th><?=number_format($row["StandAwal_lwbp"],2,',','.');?></th>
  <th><?=number_format($row["StandAkhir_lwbp"],2,',','.');?></th>
  <th><?=number_format((($row["StandAkhir_lwbp"]-$row["StandAwal_lwbp"])*$row["Faktor_kali"]),2,',','.');?></th>
  <th><?=number_format($row["StandAwal_wbp"],2,',','.');?></th>
  <th><?=number_format($row["StandAkhir_wbp"],2,',','.');?></th>
  <th><?=number_format((($row["StandAkhir_wbp"]-$row["StandAwal_wbp"])*$row["Faktor_kali"]),2,',','.');?></th>
  <th><?=number_format($harga_lwbp,2,',','.');?></th>
  <th><?=number_format($harga_wbp,2,',','.');?></th>
  <th>=(H<?=$p?>*1444,70)</th>
  <th>=(K<?=$p?>*1444,70)</th>
  <th><?=number_format($admin,2,',','.');?></th>
  <th><?=number_format((($row["Daya"]*40)*$harga_lwbp ),2,',','.');?></th>
 
  <th><? if ($row["total"]<=($row["Daya"]*40)) 
  {echo number_format((($row["Daya"]*40)*$harga_lwbp ),2,',','.');}
  
  if ($row["total"]>=($row["Daya"]*40))
  {echo number_format((((($row["StandAkhir_lwbp"]-$row["StandAwal_lwbp"])*$row["Faktor_kali"])*$harga_lwbp)+((($row["StandAkhir_wbp"]-$row["StandAwal_wbp"])*$row["Faktor_kali"])*$harga_wbp)),2,',','.')  ;}
  
  ?></th>
  <th>=(2,4%*R<?=$p?>)+(P<?=$p?>+R<?=$p?>)</th>
  
  </tr>
    
   <?php $i++; $p++;?> 
  <?php endforeach;?>
</table>