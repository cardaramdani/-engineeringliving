@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
     Update Logsheet Sumpit
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
      <h1 align="center" class="my-5">Form Update Sumpit Pump</h1>

<table class="table table-bordered table-striped table-sm">
  <form method="post" action="/sumpitpump/edit/{{$sumpitpump->id}}" >
    @method('patch')
      @csrf
      <table class="table table-bordered table-striped table-sm">
  <form method="post" action="/sumpitpump/add" >
      @csrf
<thead class="thead-dark" align="center">
<input type="hidden" name="spv" value="kosong">
<tr>
    <th scope="col" align="center" colspan="4" class="align-middle">Shift</th>
      
        <td scope="col" align="center" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="shift" required>
          <option selected>{{$sumpitpump->shift}}</option>
          <option value="Pagi">Pagi</option>
          <option value="Siang">Siang</option>
          <option value="Malam">Malam</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
        </td>
    <th scope="col" align="center" colspan="4" class="align-middle">Nama</th>
    <td scope="col" align="center" class="was-validated align-middle">
    <input type="text" name="teknisi" value="{{$sumpitpump->teknisi}}">
    </td>
    <th scope="col" align="center" colspan="4" class="align-middle">Supervisor</th>
    <td scope="col" align="center" class="was-validated align-middle">
    <input type="text" name="teknisi" value="{{$sumpitpump->spv}}">
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
          <option selected>{{$sumpitpump->powerpit1}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit1" required>
          <option selected>{{$sumpitpump->selektorpit1}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit1" required>
          <option selected>{{$sumpitpump->wlcpit1}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit1" required>
          <option selected>{{$sumpitpump->kondisipit1}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit2" required>
          <option selected>{{$sumpitpump->powerpit2}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit2" required>
          <option selected>{{$sumpitpump->selektorpit2}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit2" required>
          <option selected>{{$sumpitpump->wlcpit2}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit2" required>
          <option selected>{{$sumpitpump->kondisipit2}}</option>
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
              <option selected>{{$sumpitpump->powerpit3}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit3" required>
              <option selected>{{$sumpitpump->selektorpit3}}</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit3" required>
              <option selected>{{$sumpitpump->wlcpit3}}</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit3" required>
              <option selected>{{$sumpitpump->kondisipit3}}</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit4" required>
              <option selected>{{$sumpitpump->powerpit4}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit4" required>
              <option selected>{{$sumpitpump->selektorpit4}}</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit4" required>
              <option selected>{{$sumpitpump->wlcpit4}}</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit4" required>
              <option selected>{{$sumpitpump->kondisipit4}}</option>
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
              <option selected>{{$sumpitpump->powerpit5}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit5" required>
              <option selected>{{$sumpitpump->selektorpit5}}</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit5" required>
              <option selected>{{$sumpitpump->wlcpit5}}</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit5" required>
              <option selected>{{$sumpitpump->kondisipit5}}</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>
            
            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit6" required>
              <option selected>{{$sumpitpump->powerpit6}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit6" required>
              <option selected>{{$sumpitpump->selektorpit6}}</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit6" required>
              <option selected>{{$sumpitpump->wlcpit6}}</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit6" required>
              <option selected>{{$sumpitpump->kondisipit6}}</option>
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
              <option selected>{{$sumpitpump->powerpit7}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit7" required>
              <option selected>{{$sumpitpump->selektorpit7}}</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit7" required>
              <option selected>{{$sumpitpump->wlcpit7}}</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit7" required>
              <option selected>{{$sumpitpump->kondisipit7}}</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit8" required>
              <option selected>{{$sumpitpump->powerpit8}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit8" required>
              <option selected>{{$sumpitpump->selektorpit8}}</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit8" required>
              <option selected>{{$sumpitpump->wlcpit8}}</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit8" required>
              <option selected>{{$sumpitpump->kondisipit8}}</option>
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
              <option selected>{{$sumpitpump->powerpit9}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit9" required>
              <option selected>{{$sumpitpump->selektorpit9}}</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit9" required>
              <option selected>{{$sumpitpump->wlcpit9}}</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit9" required>
              <option selected>{{$sumpitpump->kondisipit9}}</option>
              <option value="Bersih">Bersih</option>
              <option value="Kotor">Kotor</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="powerpit10" required>
              <option selected>{{$sumpitpump->powerpit10}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="selektorpit10" required>
              <option selected>{{$sumpitpump->selektorpit10}}</option>
              <option value="Auto">Auto</option>
              <option value="Off">Off</option>
              <option value="Manual">Manual</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="wlcpit10" required>
              <option selected>{{$sumpitpump->wlcpit10}}</option>
              <option value="Ok">Ok</option>
              <option value="Tidak">Tidak</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </td>

            <td scope="col" align="center" colspan="2" class="was-validated align-middle">
              <div class="form-group">
              <select class="custom-select" name="kondisipit10" required>
              <option selected>{{$sumpitpump->kondisipit10}}</option>
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

