<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename= SumpitPump.xls");
?>
<h3>Data SumpitPump</h3>
    <h3>Bulan : <?php echo DATE('M-Y')?></h3>
<table border="1" cellpadding="5">
  
@php $no=1;  @endphp
@foreach ($Sumpitpump as $sumpit)
        
    <tr>
        <th scope="col" align="center" rowspan="2" class="align-middle" style="background-color: cyan">No</th>
        <th scope="col" align="center" rowspan="2" class="align-middle" style="background-color: cyan">Tanggal</th>
        <th scope="col" align="center" rowspan="2" class="align-middle" style="background-color: cyan">Teknisi</th>
        <th scope="col" align="center" rowspan="2" class="align-middle" style="background-color: cyan">Shift</th>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 1</th>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 2</th>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 3</th>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 4</th>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 5</th>
        
    </tr>
      
    <tr>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
    </tr>

<tr>
        <th scope="col" align="center" rowspan="6" class="align-middle">{{$no++}}</th>
        <th scope="col" align="center" rowspan="6" class="align-middle">{{$sumpit->created_at}}</th>
        <th scope="col" align="center" rowspan="6" class="align-middle">{{$sumpit->teknisi}}</th>
        <th scope="col" align="center" rowspan="6" class="align-middle">{{$sumpit->shift}}</th>
        
        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit1}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit1}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit1}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit1}}</td>

        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit2}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit2}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit2}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit2}}</td>

        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit3}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit3}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit3}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit3}}</td>

        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit4}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit4}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit4}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit4}}</td>

        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit5}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit5}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit5}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit5}}</td>
    </tr>

    <tr>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 6</th>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 7</th>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 8</th>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 9</th>
        <th scope="col" align="center" colspan="4" style="background-color: cyan">Sumpit 10</th>
        
    </tr>

    <tr>
      <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Power</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Selektor</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Wlc</th>
        <th scope="col" align="center" colspan="1" style="background-color: cyan">Kondisi</th>
    </tr>
    <tr>
        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit6}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit6}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit6}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit6}}</td>

        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit7}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit7}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit7}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit7}}</td>

        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit8}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit8}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit8}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit8}}</td>

        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit9}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit9}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit9}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit9}}</td>

        <td scope="col" align="center" colspan="1">{{$sumpit->powerpit10}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->selektorpit10}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->wlcpit10}}</td>
        <td scope="col" align="center" colspan="1">{{$sumpit->kondisipit10}}</td>

    </tr>
    <tr>
       
        <th scope="col" align="center" colspan="7"></th>
        <th scope="col" align="center" colspan="6">Diperika oleh Spv
        <th scope="col" align="center" colspan="7"></th>
       </th>
    </tr>
    <tr>
       <td scope="col" align="center" colspan="7"></td>
       <td scope="col" align="center" colspan="6">{{$sumpit->spv}}</td>
        <td scope="col" align="center" colspan="7"></td>
    </tr>
    <tr>
      <td scope="col" align="center" colspan="24" style="background-color: red"></td>
    </tr>

@endforeach
</table>