@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
     Add Logsheet Genset
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
      <h1 align="center" class="align-middle">Form Add Logsheet Genset</h1>
        <table class="table table-bordered table-striped">

      <tbody>

         <form method="post" action="/genset/add" >
            @csrf
          <thead class="thead-dark" align="center" class="align-middle">

      <tr>

              <th scope="col" align="center" class="align-middle"  class="align-middle">Item Pengecekan</th>
              <th scope="col" align="center" class="align-middle" class="align-middle">Batasan Normal</th>
              <th scope="col" align="center" class="align-middle" class="align-middle">Shift

                <div class="form-group">
                    <select class="custom-select" name="shift" required>
                    <option value="">Pilih Shift</option>
                    <option value="Pagi">Pagi</option>
                    <option value="Siang">Siang</option>
                    <option value="Malam">Malam</option>
                    </select>
                    <div class="invalid-feedback">input data sesuai aktual</div>
                </div>
              </th>
      </tr>

      </thead>

      <input type="hidden" name="teknisi" value="{{ Auth::user()->username }}">
      <input type="hidden" name="spv" value="Kosong">
      <tr>

              <td scope="col" align="center" class="align-middle" class="align-middle">Level oli engine </td>
              <td scope="col" align="center" class="align-middle" class="align-middle">High / Low </td>
              <td scope="col" align="center" class="align-middle" class="align-middle">
                  <div class="form-group was-validated">
                      <select class="custom-select" name="leveloli" required>
                      <option value="">Pilih status</option>
                      <option value="High">High</option>
                      <option value="Low">Low</option>
                      </select>
                      <div class="invalid-feedback">input data sesuai aktual</div>
                </div>
              </td>

      </tr>

      <tr>

              <td scope="col" align="center" class="align-middle">Mode OPS Modul PKG </td>
              <td scope="col" align="center" class="align-middle">Auto / Off / Manual </td>
              <td scope="col" align="center" class="align-middle">
                <div class="form-group was-validated">
                    <select class="custom-select" name="modemodulpkg" required>
                    <option value="">Pilih status</option>
                    <option value="Manual">Manual</option>
                    <option value="Off">Off</option>
                    <option value="Auto">Auto</option>
                    </select>
                  <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
              </td>

      </tr>
      <tr>

              <td scope="col" align="center" class="align-middle">Level Air Radiator </td>
              <td scope="col" align="center" class="align-middle">High / Low </td>
              <td scope="col" align="center" class="align-middle">
                <div class="form-group was-validated">
                    <select class="custom-select" name="levelradiator" required>
                    <option value="">Pilih status</option>
                    <option value="High">High</option>
                    <option value="Low">Low</option>
                    </select>
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
              </td>

      </tr>
      <tr>

              <td scope="col" align="center" class="align-middle">Odometer Running Hours </td>
              <td scope="col" align="center" class="align-middle">250 Jam </td>
              <td scope="col" align="center" class="align-middle">
                  <div class="form-group was-validated">
                     <input type="text" class="form-control" name="odometer" placeholder="Masukan running houres" required autocomplete="off">

                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
              </td>

      </tr>
      <tr>

              <td scope="col" align="center" class="align-middle">Air filter </td>
              <td scope="col" align="center" class="align-middle">Bersih / Kotor </td>
              <td scope="col" align="center" class="align-middle">
                <div class="form-group was-validated">
                    <select class="custom-select" name="airfilter" required>
                    <option value="">Pilih status</option>
                    <option value="Bersih">Bersih</option>
                    <option value="Kotor">Kotor</option>
                    </select>
                    <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
              </td>

      </tr>
      <tr>

              <td scope="col" align="center" class="align-middle">Selektor Swicth Pompa Solar </td>
              <td scope="col" align="center" class="align-middle">Auto / Off / Manual </td>
              <td scope="col" align="center" class="align-middle">
                  <div class="form-group was-validated">
                    <select class="custom-select" name="pompasolar" required>
                    <option value="">Pilih status</option>
                    <option value="Manual">Manual</option>
                    <option value="Off">Off</option>
                    <option value="Auto">Auto</option>
                    </select>
                  <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
              </td>

      </tr>
      <tr>

              <td scope="col" align="center" class="align-middle">Valve Suply Solar </td>
              <td scope="col" align="center" class="align-middle">Buka / Tutup </td>
              <td scope="col" align="center" class="align-middle">
                  <div class="form-group was-validated">
                    <select class="custom-select" name="valvesolar" required>
                    <option value="">Pilih status</option>
                    <option value="Buka">Buka</option>
                    <option value="Tutup">Tutup</option>
                    </select>
                  <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
              </td>

      </tr>
      <tr>

              <td scope="col" align="center" class="align-middle">Voltage Accu </td>
              <td scope="col" align="center" class="align-middle">23-24Vdc </td>
              <td scope="col" align="center" class="align-middle">
                   <div class="form-group was-validated">
                      <select class="custom-select" name="voltagecharger" required>
                      <option value="">Pilih status</option>
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

              <td scope="col" align="center" class="align-middle">Voltage Charge Accu </td>
              <td scope="col" align="center" class="align-middle">23-27Vdc </td>
              <td scope="col" align="center" class="align-middle">
                  <div class="form-group was-validated">
                      <select class="custom-select" name="voltageaccu" required>
                      <option value="">Pilih status</option>
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

              <td scope="col" align="center" class="align-middle">Automatic Main Failure </td>
              <td scope="col" align="center" class="align-middle">Auto / Off / Manual </td>
              <td scope="col" align="center" class="align-middle">
                     <div class="form-group was-validated">
                        <select class="custom-select" name="amf" required>
                        <option value="">Pilih status</option>
                        <option value="Manual">Manual</option>
                        <option value="Off">Off</option>
                        <option value="Auto">Auto</option>
                        </select>
                  <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
              </td>

      </tr>
      <tr>

              <td scope="col" align="center" class="align-middle">Emergency Stop Button </td>
              <td scope="col" align="center" class="align-middle">NO / NC </td>
              <td scope="col" align="center" class="align-middle">
                     <div class="form-group was-validated">
                    <select class="custom-select" name="emergencybutton" required>
                    <option value="">Pilih status</option>
                    <option value="NO">NO</option>
                    <option value="NC">NC</option>
                    </select>
                  <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
              </td>

      </tr>

      <tr>
              <td scope="col" align="center" class="align-middle">Body Gen-Set </td>
              <td scope="col" align="center" class="align-middle">Bersih / Kotor </td>
              <td scope="col" align="center" class="align-middle">
                 <div class="form-group was-validated">
                    <select class="custom-select" name="bodygenset" required>
                    <option value="">Pilih status</option>
                    <option value="Bersih">Bersih</option>
                    <option value="Kotor">Kotor</option>
                    </select>
                  <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
              </td>
      </tr>

      <tr>
              <th scope="col" class="align-top" colspan="3"  class="font-weight-bold">Temuan:
                <div class="form-group ">
                    <textarea class="form-control " id="catatan" placeholder="Uraikan temuan di lapangan" name="catatan" rows="3" autocomplete="off" ></textarea>
                    <div class="invalid-feedback">input data sesuai aktual</div>


              </th>
      </tr>
      </tbody>
<tfoot>
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Submit

</tfoot>
</form>
    </table>
@endsection


