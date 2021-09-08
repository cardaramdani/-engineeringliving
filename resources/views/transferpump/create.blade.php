@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
     Add Logsheet transferpump
@endsection
@section('li_tambahan')


@endsection
@section('main-container')

    <h1 align="center" class="my-5">Form Tambah Data Transfer Pump</h1>
<table class="table table-bordered table-striped table-sm">
<thead class="thead-dark" align="center">
<tr>

    <th scope="col" align="center" rowspan="8" class="align-middle">Shift</th>
    <tr>
        <th scope="col" align="center" colspan="5">Transfer pump A</th>
        <th scope="col" align="center" colspan="5">Transfer pump B</th>
        
        <th scope="col" align="center" colspan="3" rowspan="2" class="align-middle">Kondisi Pompa</th>
    </tr>
    <tr>
        
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" colspan="3">Status</th>
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" colspan="3">Status</th>
    </tr>
    <form method="post" action="/transferpump/add" >
      @csrf
      <input type="hidden" name="teknisi" value="{{ Auth::user()->username }}">
    <tr>
        
        <th scope="col" align="center">Buka</th>
        <th scope="col" align="center">Tutup</th>
        <th scope="col" align="center">Manual</th>
        <th scope="col" align="center">Off</th>
        <th scope="col" align="center">Auto</th>
        <th scope="col" align="center">Buka</th>
        <th scope="col" align="center">Tutup</th>
        <th scope="col" align="center">Manual</th>
        <th scope="col" align="center">Off</th>
        <th scope="col" align="center">Auto</th>
        <th scope="col" align="center">Bersih</th>
        <th scope="col" align="center">Kotor</th>
        <th scope="col" align="center">Bocor</th>
    </tr>

    <td scope="col" align="center" colspan="2" class="was-validated">
       <div class="form-group">
      <select class="custom-select" name="valve_tfa" required>
      <option value="">1Open this select menu</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center" colspan="3" class="was-validated" >
        <div class="form-group">
        <select class="custom-select" name="status_tfa" required>
          <option value="">2Open this select menu</option>
          <option value="Manual">Manual</option>
          <option value="Off">Off</option>
          <option value="Auto">Auto</option>
        </select>
        <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>

    <td scope="col" align="center" colspan="2" class="was-validated">
      <div class="form-group">
        <select class="custom-select" name="valve_tfb" required>
        <option value="">3Open this select menu</option>
        <option value="Buka">Buka</option>
        <option value="Tutup">Tutup</option>
        </select>
        <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center" colspan="3" class="was-validated" >
      <div class="form-group">
        <select class="custom-select" name="status_tfb" required>
        <option value="">4Open this select menu</option>
        <option value="Manual">Manual</option>
        <option value="Off">Off</option>
        <option value="Auto">Auto</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>

    <td scope="col" align="center" colspan="3" rowspan="4" class="was-validated">
          <div class="form-group">
        <select class="custom-select" name="kondisi" required>
          <option value="">5Open this select menu</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          <option value="Bocor">Bocor</option>
        </select>
        <div class="invalid-feedback">input data sesuai aktual</div>
      </div>

    </td>

    <tr>
        
        <th scope="col" align="center" colspan="5">Transfer pump C</th>
        <th scope="col" align="center" colspan="5">Transfer pump Cadangan</th>
        
    </tr>
    
    <tr>
       
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" colspan="3">Status</th>
        <th scope="col" align="center" colspan="2">Posisi Valve</th>
        <th scope="col" align="center" colspan="3">Status</th>
    </tr>
    <tr>
        
        <th scope="col" align="center">Buka</th>
        <th scope="col" align="center">Tutup</th>
        <th scope="col" align="center">Manual</th>
        <th scope="col" align="center">Off</th>
        <th scope="col" align="center">Auto</th>
        <th scope="col" align="center">Buka</th>
        <th scope="col" align="center">Tutup</th>
        <th scope="col" align="center">Manual</th>
        <th scope="col" align="center">Off</th>
        <th scope="col" align="center">Auto</th>
        
    </tr>
</tr>
</thead>


    

 <td scope="col" align="center" class="was-validated">

       <div class="form-group">
      <select class="custom-select" name="shift" required>
      <option value="">6Open this select menu</option>
      <option value="Pagi">Pagi</option>
      <option value="Siang">Siang</option>
      <option value="Malam">Malam</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>

</td>


  <td scope="col" align="center" colspan="2" class="was-validated">
    <div class="form-group">
      <select class="custom-select" name="valve_tfc" required>
        <option value="">7Open this select menu</option>
        <option value="Buka">Buka</option>
        <option value="Tutup">Tutup</option>
      </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
</td>

<td scope="col" align="center" colspan="3" class="was-validated">
       <div class="form-group">
      <select class="custom-select"name="status_tfc" required>
      <option value="">8Open this select menu</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>

</td>

<td scope="col" align="center" colspan="2" class="was-validated">

       <div class="form-group">
      <select class="custom-select" name="valve_tfd" required>
      <option value="">9Open this select menu</option>
      <option value="Buka">Buka</option>
      <option value="Tutup">Tutup</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>
</td>

<td scope="col" align="center" colspan="3" class="was-validated">

       <div class="form-group">
      <select class="custom-select" name="status_tfd" required>
      <option value="">10Open this select menu</option>
      <option value="Manual">Manual</option>
      <option value="Off">Off</option>
      <option value="Auto">Auto</option>
    </select>
    <div class="invalid-feedback">input data sesuai aktual</div>
  </div>

</td>



<input type="hidden" name="spv" value="kosong">

<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Submit form</button>

  </form>
  
</table>
@endsection
