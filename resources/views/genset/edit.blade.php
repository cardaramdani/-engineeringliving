@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
     Update Logsheet Genset
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
       <h1 align="center" class="my-5">Update Logsheet Genset</h1>
<table class="table table-bordered table-striped">

<tbody>

    <!-- @php $tgl = Date('2020/03/01'); @endphp -->

    <thead class="thead-dark" align="center">
      <form method="post" action="/genset/edit/{{$genset->id}}" >
    @method('patch')
      @csrf
<tr>

        <th scope="col" align="center" class="font-weight-bold align-middle">Teknisi</th>
        <th scope="col" align="center" class="font-weight-bold align-middle">Tanggal</th>
        <th scope="col" align="center" rowspan="2" class="align-middle">Item Pengecekan</th>
        <th scope="col" align="center" rowspan="2" class="align-middle">Batasan Normal</th>
        <th scope="col" align="center" rowspan="2" class="align-middle">Shift
          <div class="form-group was-validated">
              <select class="custom-select" name="shift" required>
              <option value="{{$genset->shift}}">{{$genset->shift}}</option>
              <option value="Pagi">Pagi</option>
              <option value="Siang">Siang</option>
              <option value="Malam">Malam</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
        </th>
        <th scope="col" align="center" rowspan="2" class="align-middle">Diperiksa (spv)</th>

</tr>

</thead>
<tr>

        <td scope="col" align="center" rowspan="12" class="font-weight-bold">
          <div class="form-group was-validated">
              <select class="custom-select" name="teknisi" required>
              <option value="{{$genset->teknisi}}">{{$genset->teknisi}}</option>
              <option value="Dimas" >Dimas</option>
              <option value="ali">ali</option>
              <option value="norman">norman</option>
              <option value="misbun">misbun</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
        </td>
        <td scope="col" align="center" rowspan="12" class="font-weight-bold">{{$genset->created_at}}</td>
        <td scope="col" align="center">Level oli engine </td>
        <td scope="col" align="center">High / Low </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
                <select class="custom-select" name="leveloli" required>
                <option value="{{$genset->leveloli}}">{{$genset->leveloli}}</option>
                <option value="High">High</option>
                <option value="Low">Low</option>
                </select>
                <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
        </td>
        <td scope="col" align="center" class="align-middle" rowspan="12" class="font-weight-bold">
            <div class="form-group was-validated">
               <input type="text" class="form-control" name="spv" value="{{$genset->spv}}">

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>
</tr>

<tr>
        <td scope="col" align="center">Mode OPS Modul PKG </td>
        <td scope="col" align="center">Auto / Off / Manual </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
              <select class="custom-select" name="modemodulpkg" required>
              <option value="{{$genset->modemodulpkg}}">{{$genset->modemodulpkg}}</option>
              <option value="Manual">Manual</option>
              <option value="Off">Off</option>
              <option value="Auto">Auto</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Level Air Radiator </td>
        <td scope="col" align="center">High / Low </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="levelradiator" required>
              <option value="{{$genset->levelradiator}}">{{$genset->levelradiator}}</option>
              <option value="High">High</option>
              <option value="Low">Low</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Odometer Running Hours </td>
        <td scope="col" align="center">250 Jam </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
               <input type="text" class="form-control" name="odometer" placeholder="Masukan running houres" value="{{$genset->odometer}}" required>

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Air filter </td>
        <td scope="col" align="center">Bersih / Kotor </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
              <select class="custom-select" name="airfilter" required>
              <option value="{{$genset->airfilter}}">{{$genset->airfilter}}</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Selektor Swicth Pompa Solar </td>
        <td scope="col" align="center">Auto / Off / Manual </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
              <select class="custom-select" name="pompasolar" required>
              <option value="{{$genset->pompasolar}}">{{$genset->pompasolar}}</option>
              <option value="Manual">Manual</option>
              <option value="Off">Off</option>
              <option value="Auto">Auto</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Valve Suply Solar </td>
        <td scope="col" align="center">Buka / Tutup </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="valvesolar" required>
              <option value="{{$genset->valvesolar}}">{{$genset->valvesolar}}</option>
              <option value="Buka">Buka</option>
              <option value="Tutup">Tutup</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Voltage Accu </td>
        <td scope="col" align="center">23-24Vdc </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
                <select class="custom-select" name="voltagecharger" required>
                <option value="{{$genset->voltageaccu}}">{{$genset->voltageaccu}}</option>
                <option value="23 Vdc">23 Vdc</option>
                <option value="24 Vdc">24 Vdc</option>
                <option value="25 Vdc">25 Vdc</option>
                <option value="26 Vdc">26 Vdc</option>
                <option value="27 Vdc">27 Vdc</option>
                </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Voltage Charge Accu </td>
        <td scope="col" align="center">23-27Vdc </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
                <select class="custom-select" name="voltageaccu" required>
                <option value="{{$genset->voltagecharger}}">{{$genset->voltagecharger}}</option>
                <option value="23 Vdc">23 Vdc</option>
                <option value="24 Vdc">24 Vdc</option>
                <option value="25 Vdc">25 Vdc</option>
                <option value="26 Vdc">26 Vdc</option>
                <option value="27 Vdc">27 Vdc</option>
                </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Automatic Main Failure </td>
        <td scope="col" align="center">Auto / Off / Manual </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
                  <select class="custom-select" name="amf" required>
                  <option value="{{$genset->amf}}">{{$genset->amf}}</option>
                  <option value="Manual">Manual</option>
                  <option value="Off">Off</option>
                  <option value="Auto">Auto</option>
                  </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Emergency Stop Button </td>
        <td scope="col" align="center">NO / NC </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
              <select class="custom-select" name="emergencybutton" required>
              <option value="{{$genset->emergencybutton}}">{{$genset->emergencybutton}}</option>
              <option value="NO">NO</option>
              <option value="NC">NC</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center">Body Gen-Set </td>
        <td scope="col" align="center">Bersih / Kotor </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
              <select class="custom-select" name="bodygenset" required>
              <option value="{{$genset->bodygenset}}">{{$genset->bodygenset}}</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>

<tr>
        <th scope="col" class="align-top" colspan="7" class="font-weight-bold">Temuan:
            <div class="form-group">
              <textarea class="form-control " id="catatan" placeholder="Uraikan temuan di lapangan" name="catatan" rows="3"  >{{$genset->catatan}}</textarea>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </th>

</tr>
<tr>
        <th scope="col" class="align-top" colspan="7" class="font-weight-bold"></th>

</tr>
</tbody>
<tfoot>
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit; ">UPDATE</button>

</tfoot>
</form>
  </table>
@endsection


