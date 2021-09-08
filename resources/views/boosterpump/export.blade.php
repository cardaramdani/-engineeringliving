<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Boosterpump.xls");
?>
<h3>Data Boosterpump</h3>
    <h3>Bulan : <?php echo DATE('M-Y')?></h3>
<table border="1" cellpadding="5">

 
    <thead class="thead-dark" align="center">
        <tr>
        <th scope="col" align="center" rowspan="3" class="align-middle" style="background-color: cyan">No</th>
        <th scope="col" align="center" rowspan="3" class="align-middle" style="background-color: cyan">Tanggal</th>
        <th scope="col" align="center" rowspan="3" class="align-middle" style="background-color: cyan">Teknisi</th>
        <th scope="col" align="center" rowspan="3" class="align-middle" style="background-color: cyan">Shift</th>
        <th scope="col" align="center" colspan="3" style="background-color: cyan">Booster pump 1</th>
        <th scope="col" align="center" colspan="3" style="background-color: cyan">Booster pump 1</th>
        <th scope="col" align="center" rowspan="3" class="align-middle" style="background-color: cyan">Kondisi Pompa</th>
        <th scope="col" align="center" rowspan="3" class="align-middle" style="background-color: cyan">Diperiksa oleh (spv)</th>
      
    <tr>
        <th scope="col" align="center" colspan="2" style="background-color: cyan">Posisi Valve</th>
        <th scope="col" align="center" class="align-middle" rowspan="2" style="background-color: cyan">Status</th>
        <th scope="col" align="center" colspan="2" style="background-color: cyan">Posisi Valve</th>
        <th scope="col" align="center" class="align-middle" rowspan="2" style="background-color: cyan">Status</th>
    </tr>
        <th scope="col" align="center" style="background-color: cyan">Valve hisap</th>
        <th scope="col" align="center" style="background-color: cyan">Valve suply</th>
        <th scope="col" align="center" style="background-color: cyan">Valve hisap</th>
        <th scope="col" align="center" style="background-color: cyan">Valve suply</th>
    
    
</tr>
    </thead>
<tbody>
     @php $no=1; @endphp
@foreach ($Boosterpump as $boosterpump)
<tr>
        <td scope="col" align="center" class="font-weight-bold">{{$no++}}</td>
        <td scope="col" class="align-middle" align="center" >{{$boosterpump->updated_at}}</td>
        <td scope="col" align="center "  class="align-middle">{{$boosterpump->teknisi}}
        <td scope="col" align="center" class="align-middle">{{$boosterpump->shift}}</td>
        <td scope="col" align="center"class="align-middle"  >{{$boosterpump->valvehisappompa1}}</td>
        <td scope="col" align="center"class="align-middle"  >{{$boosterpump->valvesuplypompa1}}</td>
        <td scope="col" align="center"class="align-middle"  >{{$boosterpump->selektorpompa1}}</td>
        <td scope="col" align="center"class="align-middle"  >{{$boosterpump->valvehisappompa2}}</td>
        <td scope="col" align="center"class="align-middle"  >{{$boosterpump->valvesuplypompa2}}</td>
        <td scope="col" align="center"class="align-middle"  >{{$boosterpump->selektorpompa2}}</td>
        <td scope="col" align="center" class="align-middle">{{$boosterpump->kondisi}}</td>
        <td scope="col" align="center"  class="align-middle">{{$boosterpump->spv}}
        </td>  
</tr>
 @endforeach
</tbody>

       
  

  
</table>