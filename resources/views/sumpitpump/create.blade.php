@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
     Add Logsheet Sumpit
@endsection
@section('li_tambahan')


@endsection
@section('main-container')

    <h1 align="center" class="my-5">Form Add Sumpit Pump</h1>

<table class="table table-bordered table-striped table-sm">
  <form method="post" action="/sumpitpump/add" >
      @csrf
<thead class="thead-dark" align="center">
<input type="hidden" name="spv" value="kosong">
<tr>
    <th scope="col" align="center" colspan="3" class="align-middle">Shift</th>
      <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
        <td scope="col" align="center" colspan="12" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="shift" required>
          <option value="">Pilih Shift</option>
          <option value="Pagi">Pagi</option>
          <option value="Siang">Siang</option>
          <option value="Malam">Malam</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
        </td>
</tr>
<tr>
       
    <tr>
        <th scope="col" align="center" colspan="8">Sumpit 1</th>
        <th scope="col" align="center" colspan="8">Sumpit 2</th>
        
    </tr>

    <tr>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        
    </tr>

    <tr>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit1" required>
          <option value="">Pilih status</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit1" required>
          <option value="">Pilih status</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit1" required>
          <option value="">Pilih status</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit1" required>
          <option value="">Pilih status</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit2" required>
          <option value="">Pilih status</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit2" required>
          <option value="">Pilih status</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit2" required>
          <option value="">Pilih status</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit2" required>
          <option value="">Pilih status</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        
    </tr>

        <tr>
          <th scope="col" align="center" colspan="8">Sumpit 3</th>
            <th scope="col" align="center" colspan="8">Sumpit 4</th>
        </tr>

        <tr>
          <th scope="col" align="center" colspan="2">Power</th>
          <th scope="col" align="center" colspan="2">Selektor</th>
          <th scope="col" align="center" colspan="2">Wlc</th>
          <th scope="col" align="center" colspan="2">Kondisi</th>
          <th scope="col" align="center" colspan="2">Power</th>
          <th scope="col" align="center" colspan="2">Selektor</th>
          <th scope="col" align="center" colspan="2">Wlc</th>
          <th scope="col" align="center" colspan="2">Kondisi</th>
        </tr>

        <tr>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit3" required>
              <option value="">Pilih status</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit3" required>
              <option value="">Pilih status</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit3" required>
              <option value="">Pilih status</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit3" required>
              <option value="">Pilih status</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit4" required>
              <option value="">Pilih status</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit4" required>
              <option value="">Pilih status</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit4" required>
              <option value="">Pilih status</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit4" required>
              <option value="">Pilih status</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>
        </tr>

    </tr>

    <tr>
      <th scope="col" align="center" colspan="8">Sumpit 5</th>
      <th scope="col" align="center" colspan="8">Sumpit 6</th>
       
    </tr>

    <tr>
      <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
    </tr>

    <tr>
    <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit5" required>
              <option value="">Pilih status</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit5" required>
              <option value="">Pilih status</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit5" required>
              <option value="">Pilih status</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit5" required>
              <option value="">Pilih status</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>
            
            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit6" required>
              <option value="">Pilih status</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit6" required>
              <option value="">Pilih status</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit6" required>
              <option value="">Pilih status</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit6" required>
              <option value="">Pilih status</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

                  

    </tr>

    <tr>
      <th scope="col" align="center" colspan="8">Sumpit 7</th>
      <th scope="col" align="center" colspan="8">Sumpit 8</th>
       
    </tr>

    <tr>
      <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
    </tr>

    <tr>
    <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit7" required>
              <option value="">Pilih status</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit7" required>
              <option value="">Pilih status</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit7" required>
              <option value="">Pilih status</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit7" required>
              <option value="">Pilih status</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit8" required>
              <option value="">Pilih status</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit8" required>
              <option value="">Pilih status</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit8" required>
              <option value="">Pilih status</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit8" required>
              <option value="">Pilih status</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            
    </tr>

    <tr>
      <th scope="col" align="center" colspan="8">Sumpit 9</th>
      <th scope="col" align="center" colspan="8">Sumpit 10</th>
       
    </tr>

    <tr>
      <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
    </tr>

    <tr>
    <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit9" required>
              <option value="">Pilih status</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit9" required>
              <option value="">Pilih status</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit9" required>
              <option value="">Pilih status</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit9" required>
              <option value="">Pilih status</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit10" required>
              <option value="">Pilih status</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit10" required>
              <option value="">Pilih status</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit10" required>
              <option value="">Pilih status</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit10" required>
              <option value="">Pilih status</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>
    </tr>
<tr>
  <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Submit form</button>
</tr>

</thead>
</form>
</table>
@endsection

