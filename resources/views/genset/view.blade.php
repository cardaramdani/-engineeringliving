@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   View Logsheet Genset
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center">Form Logsheet Genset</h1>
<table class="table table-bordered table-striped">

<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" align="center" class="align-middle">Tanggal</th>
        <th scope="col" align="center" class="align-middle">Teknisi</th>
        <th scope="col" align="center"  class="align-middle">Item Pengecekan</th>
        <th scope="col" align="center" class="align-middle">Batasan Normal</th>
        <th scope="col" align="center" class="align-middle">Shift
          {{$genset->shift}}
        </th>
        <th scope="col" align="center" class="align-middle">Diperiksa (spv)</th>

</tr>

</thead>

<tr>
        <td scope="col" align="center"  class="font-weight-bold" rowspan="12" >{{$genset->created_at}}</td>
        <td scope="col" align="center"  class="font-weight-bold" rowspan="12" >{{$genset->teknisi}}</td>
        <td scope="col" align="center">Level oli engine </td>
        <td scope="col" align="center">High / Low </td>
        <td scope="col" align="center">{{$genset->leveloli}}</td>
        <td scope="col" align="center" rowspan="12">{{$genset->spv}}</td>
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
        <th scope="col" class="align-top" colspan="7" rowspan="2" class="font-weight-bold" style="color: red">Temuan: {{$genset->catatan}}
        </th>

</tr>




</tbody>

   </table>
@endsection
