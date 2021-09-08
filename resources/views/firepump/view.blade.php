@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
  Logsheet FirePump
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
      <h1 align="center" class="my-5">Fire Pump</h1>

<table class="table table-bordered table-striped">

<tbody>
    <thead class="thead-dark" align="center">
<tr>


        <th scope="col" align="center" class="align-middle">Item Pengecekan</th>
        <th scope="col" align="center" class="align-middle">Batasan Normal</th>
        <th scope="col" align="center" class="align-middle">Shift</th>
        <th scope="col" align="center" class="align-middle">Diperiksa Oleh Spv</th>


</tr>

<tr>
    <th scope="col" align="center"   class="font-weight-bold align-middle" colspan="2">A. Jockey Pump</th>
    <td scope="col" align="center" class="align-middle" >
      <div class="form-group was-validated">
          <select class="custom-select" name="shift" required>
          <option value="{{$firepump->shift}}">{{$firepump->shift}}</option>
          <option value="Pagi">Pagi</option>
          <option value="Siang">Siang</option>
          <option value="Malam">Malam</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
    </td>
    <td scope="col" align="center" class="align-middle" rowspan="27">
      <div class="form-group was-validated">
             <input type="text" class="form-control" name="spv" value="{{$firepump->spv}}">

              <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
      </td>
</tr>
<tr>


    <th scope="col" align="center" class="align-middle">Status</th>
    <th scope="col" align="center" class="align-middle">On / Off</th>
    <td scope="col" align="center" class="align-middle">
      <div class="form-group was-validated">
          <select class="custom-select" name="statusjockey" required>
          <option value="{{$firepump->statusjockey}}">{{$firepump->statusjockey}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>

<tr>

    <th scope="col" align="center" class="align-middle">Selector Switch</th>
    <th scope="col" align="center" class="align-middle">Auto / Off / Manual</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="selectorjockey" required>
          <option value="{{$firepump->selectorjockey}}">{{$firepump->selectorjockey}}</option>
          <option value="Manual">Manual</option>
          <option value="Off">Off</option>
          <option value="Auto">Auto</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
    </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Status Valve</th>
    <th scope="col" align="center" class="align-middle">Buka / Tutup</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="valvejockey" required>
          <option value="{{$firepump->valvejockey}}">{{$firepump->valvejockey}}</option>
          <option value="Buka">Buka</option>
          <option value="Tutup">Tutup</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
    </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Pressure (On)</th>
    <th scope="col" align="center" class="align-middle">Min 10 Bar</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="onpressurejockey" required>
          <option value="{{$firepump->onpressurejockey}}">{{$firepump->onpressurejockey}}</option>
          <option value="11 Bar">11 Bar</option>
          <option value="10 Bar">10 Bar</option>
          <option value="9 Bar">9 Bar</option>
          <option value="8 Bar">8 Bar</option>
          <option value="7 Bar">7 Bar</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
    </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Pressure (Off)</th>
    <th scope="col" align="center" class="align-middle">11 Bar</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="ofpressurejockey" required>
          <option value="{{$firepump->ofpressurejockey}}">{{$firepump->ofpressurejockey}}</option>
          <option value="11 Bar">11 Bar</option>
          <option value="10 Bar">10 Bar</option>
          <option value="9 Bar">9 Bar</option>
          <option value="8 Bar">8 Bar</option>
          <option value="7 Bar">7 Bar</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
    </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Kebersihan Pompa</th>
    <th scope="col" align="center" class="align-middle">Bersih / Kotor </th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="bodyjockey" required>
          <option value="{{$firepump->bodyjockey}}">{{$firepump->bodyjockey}}</option>
          <option value="Kotor">Kotor</option>
          <option value="Bersih">Bersih</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
    </td>
</tr>
<tr>
    <th scope="col" align="center"   class="font-weight-bold align-middle" colspan="3">B. Elektric Pump</th>

</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Status</th>
    <th scope="col" align="center" class="align-middle">On / Off</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="statuselectric" required>
          <option value="{{$firepump->statuselectric}}">{{$firepump->statuselectric}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
    </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Selector Switch</th>
    <th scope="col" align="center" class="align-middle">Auto / Off / Manual</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="selectorelectric" required>
          <option value="{{$firepump->selectorelectric}}">{{$firepump->selectorelectric}}</option>
          <option value="Manual">Manual</option>
          <option value="Off">Off</option>
          <option value="Auto">Auto</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
    </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Status Valve</th>
    <th scope="col" align="center" class="align-middle">Buka / Tutup</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="valveelectric" required>
          <option value="{{$firepump->valveelectric}}">{{$firepump->valveelectric}}</option>
          <option value="Buka">Buka</option>
          <option value="Tutup">Tutup</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
    </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Pressure (On)</th>
    <th scope="col" align="center" class="align-middle">Min 9 Bar</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="onpressureelectric" required>
          <option value="{{$firepump->onpressureelectric}}">{{$firepump->onpressureelectric}}</option>
          <option value="11 Bar">11 Bar</option>
          <option value="10 Bar">10 Bar</option>
          <option value="9 Bar">9 Bar</option>
          <option value="8 Bar">8 Bar</option>
          <option value="7 Bar">7 Bar</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Pressure (Off)</th>
    <th scope="col" align="center" class="align-middle">Manual </th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="ofpressureelectric" required>
          <option value="{{$firepump->ofpressureelectric}}">{{$firepump->ofpressureelectric}}</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Kebersihan Pompa</th>
    <th scope="col" align="center" class="align-middle">Bersih / Kotor </th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="bodyelectric" required>
          <option value="{{$firepump->bodyelectric}}">{{$firepump->bodyelectric}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>
        <th scope="col" align="center"   class="font-weight-bold" colspan="3">C. Diesel Pump</th>

</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Status</th>
    <th scope="col" align="center" class="align-middle">On / Off</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="statusdiesel" required>
          <option value="{{$firepump->statusdiesel}}">{{$firepump->statusdiesel}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Selector Switch</th>
    <th scope="col" align="center" class="align-middle">Auto / Off / Manual</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="selectordiesel" required>
          <option value="{{$firepump->selectordiesel}}">{{$firepump->selectordiesel}}</option>
          <option value="Manual">Manual</option>
          <option value="Off">Off</option>
          <option value="Auto">Auto</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Status Valve</th>
    <th scope="col" align="center" class="align-middle">Buka / Tutup</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="valvediesel" required>
          <option value="{{$firepump->valvediesel}}">{{$firepump->valvediesel}}</option>
          <option value="Buka">Buka</option>
          <option value="Tutup">Tutup</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Pressure (On)</th>
    <th scope="col" align="center" class="align-middle">Min 7 Bar</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="onpressurediesel" required>
          <option value="{{$firepump->onpressurediesel}}">{{$firepump->onpressurediesel}}</option>
          <option value="11 Bar">11 Bar</option>
          <option value="10 Bar">10 Bar</option>
          <option value="9 Bar">9 Bar</option>
          <option value="8 Bar">8 Bar</option>
          <option value="7 Bar">7 Bar</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Pressure (Off)</th>
    <th scope="col" align="center" class="align-middle">Manual </th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="ofpressurediesel" readonly required>
          <option value="Manual" >Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Battery Charger</th>
    <th scope="col" align="center" class="align-middle">24-26 Vdc</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="batterycharger" required>
          <option value="{{$firepump->batterycharger}}">{{$firepump->batterycharger}}</option>
          <option value="23 Vdc">23 Vdc</option>
          <option value="24 Vdc">24 Vdc</option>
          <option value="25 Vdc">25 Vdc</option>
          <option value="26 Vdc">26 Vdc</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Level Oli</th>
    <th scope="col" align="center" class="align-middle">High / Low </th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="leveloli" required>
          <option value="{{$firepump->leveloli}}">{{$firepump->leveloli}}</option>
          <option value="High">High</option>
          <option value="Low">Low</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Level Air Radiator</th>
    <th scope="col" align="center" class="align-middle">High / Low </th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="levelradiator" required>
          <option value="{{$firepump->levelradiator}}">{{$firepump->levelradiator}}</option>
          <option value="High">High</option>
          <option value="Low">Low</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Level Solar</th>
    <th scope="col" align="center" class="align-middle">High / Low </th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="levelsolar" required>
          <option value="{{$firepump->levelsolar}}">{{$firepump->levelsolar}}</option>
          <option value="High">High</option>
          <option value="Low">Low</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>

    <th scope="col" align="center" class="align-middle">Aktual pressure Pipa Header</th>
    <th scope="col" align="center" class="align-middle">7-10 Bar</th>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" name="aktualpressureheader" required>
        <option value="{{$firepump->aktualpressureheader}}">{{$firepump->aktualpressureheader}}</option>
          <option value="11 Bar">11 Bar</option>
          <option value="10 Bar">10 Bar</option>
          <option value="9 Bar">9 Bar</option>
          <option value="8 Bar">8 Bar</option>
          <option value="7 Bar">7 Bar</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
</tr>
<tr>
    <th scope="col" class="align-top" colspan="2" class="font-weight-bold">Temuan:</th>
    <th scope="col" align="center" class="font-weight-bold">Teknisi</th>
</tr>
<tr>
    <td scope="col" class="align-top" colspan="2" class="font-weight-bold">
      <div class="form-group">
             <input type="text" class="form-control"  placeholder="Temuan" name="temuan" value="{{$firepump->temuan}}"  autocomplete="off">

              <div class="invalid-feedback">input data sesuai aktual</div>
      </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
          <select class="custom-select" id="teknisi" name="teknisi" required>
          <option value="{{$firepump->teknisi}}">{{$firepump->teknisi}}</option>
          <option value="Dimas" >Dimas</option>
          <option value="ali">ali</option>
          <option value="norman">norman</option>
          <option value="misbun">misbun</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>

</thead>


</tbody>
</table>
@endsection
