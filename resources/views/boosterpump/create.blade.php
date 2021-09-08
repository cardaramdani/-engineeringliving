@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
     Add Logsheet boosterpump
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
      <h1 align="center" class="my-5">Form Add Booster Pump</h1>

<table class="table table-bordered table-striped table-sm">

<thead class="thead-dark" align="center">

<tr>

        <th scope="col" align="center" rowspan="3" class="align-middle">Shift</th>
        <th scope="col" align="center" colspan="3">Booster pump 1</th>
        <th scope="col" align="center" colspan="3">Booster pump 1</th>
        <th scope="col" align="center" rowspan="3" class="align-middle">Kondisi Pompa</th>

    <tr>
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" class="align-middle" rowspan="2">Status</th>
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" class="align-middle" rowspan="2" >Status</th>
    </tr>
        <th scope="col" align="center" >Valve hisap</th>
        <th scope="col" align="center" >Valve suply</th>
        <th scope="col" align="center" >Valve hisap</th>
        <th scope="col" align="center" >Valve suply</th>


</tr>

</thead>
<tbody>
  <form method="post" action="/boosterpump/add" >
      @csrf
   <input type="hidden" name="teknisi" value="{{ Auth::user()->username }}">
   <input type="hidden" name="spv" value="Kosong">
    <tr>

        <td scope="col" align="center" class="align-middle">
            <div class="form-group was-validated">
              <select class="custom-select" name="shift" required>
              <option value="">pilih shift</option>
              <option value="Pagi">Pagi</option>
              <option value="Siang">Siang</option>
              <option value="Malam">Malam</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center"class="align-middle"  >
            <div class="form-group was-validated">
              <select class="custom-select" name="valvehisappompa1" required>
              <option value="">pilih status valve</option>
              <option value="Tutup">Tutup</option>
              <option value="Buka">Buka</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center"class="align-middle"  >
              <div class="form-group was-validated">
                <select class="custom-select" name="valvesuplypompa1" required>
                <option value="">pilih status valve</option>
                <option value="Tutup">Tutup</option>
                <option value="Buka">Buka</option>
                </select>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center"class="align-middle"  >
             <div class="form-group was-validated">
                <select class="custom-select" name="selektorpompa1" required>
                <option value="">pilih status selektor</option>
                <option value="Manual">Manual</option>
                <option value="Off">Off</option>
                <option value="Auto">Auto</option>
                </select>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center"class="align-middle"  >
            <div class="form-group was-validated">
              <select class="custom-select" name="valvehisappompa2" required>
              <option value="">pilih status valve</option>
              <option value="Tutup">Tutup</option>
              <option value="Buka">Buka</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center"class="align-middle"  >
              <div class="form-group was-validated">
                <select class="custom-select" name="valvesuplypompa2" required>
                <option value="">pilih status valve</option>
                <option value="Tutup">Tutup</option>
                <option value="Buka">Buka</option>
                </select>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center"class="align-middle"  >
             <div class="form-group was-validated">
                <select class="custom-select" name="selektorpompa2" required>
                <option value="">pilih status selektor</option>
                <option value="Manual">Manual</option>
                <option value="Off">Off</option>
                <option value="Auto">Auto</option>
                </select>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center" class="align-middle">
              <div class="form-group was-validated">
                <select class="custom-select" name="kondisi" required>
                <option value="">pilih status pompa</option>
                <option value="Kotor">Kotor</option>
                <option value="Bersih">Bersih</option>
                <option value="Bocor">Bocor</option>
                </select>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
    </tr>
    <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Submit form</button>
  </form>




</tbody>
</table>
@endsection

