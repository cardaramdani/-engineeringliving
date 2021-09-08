@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
      Logsheet Sumpit
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
      <h1 align="center" class="my-5">Logsheet Sumpit Pump</h1>

<table class="table table-bordered table-striped table-sm">

<thead class="thead-dark" align="center">
<input type="hidden" name="spv" value="kosong">
<tr>

        <th scope="col" align="center" rowspan="3" class="align-middle">Teknisi</th>
        <th scope="col" align="center" rowspan="3" class="align-middle">Shift</th>

    <tr>
        <th scope="col" align="center" colspan="8">Sumpit 1</th>
        <th scope="col" align="center" colspan="8">Sumpit 2</th>
        <th scope="col" align="center" colspan="8">Sumpit 3</th>
        <th scope="col" align="center" colspan="8">Sumpit 4</th>
        <th scope="col" align="center" colspan="8">Sumpit 5</th>

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
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
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


        <td scope="col" align="center" rowspan="4" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" id="teknisi" name="teknisi" required>
          <option value="{{$sumpitpump->teknisi}}">{{$sumpitpump->teknisi}}</option>
          <option value="Dimas" >Dimas</option>
          <option value="ali">ali</option>
          <option value="norman">norman</option>
          <option value="misbun">misbun</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
       </td>

        <td scope="col" align="center" rowspan="4" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="shift" required>
          <option value="{{$sumpitpump->shift}}">{{$sumpitpump->shift}}</option>
          <option value="Pagi">Pagi</option>
          <option value="Siang">Siang</option>
          <option value="Malam">Malam</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit1" required>
          <option value="{{$sumpitpump->powerpit1}}">{{$sumpitpump->powerpit1}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit1" required>
          <option value="{{$sumpitpump->selektorpit1}}">{{$sumpitpump->selektorpit1}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit1" required>
          <option value="{{$sumpitpump->wlcpit1}}">{{$sumpitpump->wlcpit1}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit1" required>
          <option value="{{$sumpitpump->kondisipit1}}">{{$sumpitpump->kondisipit1}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit2" required>
          <option value="{{$sumpitpump->powerpit2}}">{{$sumpitpump->powerpit2}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit2" required>
          <option value="{{$sumpitpump->selektorpit2}}">{{$sumpitpump->selektorpit2}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit2" required>
          <option value="{{$sumpitpump->wlcpit2}}">{{$sumpitpump->wlcpit2}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit2" required>
          <option value="{{$sumpitpump->kondisipit2}}">{{$sumpitpump->kondisipit2}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit3" required>
          <option value="{{$sumpitpump->powerpit3}}">{{$sumpitpump->powerpit3}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit3" required>
          <option value="{{$sumpitpump->selektorpit3}}">{{$sumpitpump->selektorpit3}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit3" required>
          <option value="{{$sumpitpump->wlcpit3}}">{{$sumpitpump->wlcpit3}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit3" required>
          <option value="{{$sumpitpump->kondisipit3}}">{{$sumpitpump->kondisipit3}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit4" required>
          <option value="{{$sumpitpump->powerpit4}}">{{$sumpitpump->powerpit4}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit4" required>
          <option value="{{$sumpitpump->selektorpit4}}">{{$sumpitpump->selektorpit4}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit4" required>
          <option value="{{$sumpitpump->wlcpit4}}">{{$sumpitpump->wlcpit4}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit4" required>
          <option value="{{$sumpitpump->kondisipit4}}">{{$sumpitpump->kondisipit4}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit5" required>
          <option value="{{$sumpitpump->powerpit5}}">{{$sumpitpump->powerpit5}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit5" required>
          <option value="{{$sumpitpump->selektorpit5}}">{{$sumpitpump->selektorpit5}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit5" required>
          <option value="{{$sumpitpump->wlcpit5}}">{{$sumpitpump->wlcpit5}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit5" required>
          <option value="{{$sumpitpump->kondisipit5}}">{{$sumpitpump->kondisipit5}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>
    </tr>

    <tr>
        <th scope="col" align="center" colspan="8">sumpit 6</th>
        <th scope="col" align="center" colspan="8">Sumpit 7</th>
        <th scope="col" align="center" colspan="8">Sumpit 8</th>
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
        <th scope="col" align="center" colspan="2">Power</th>
        <th scope="col" align="center" colspan="2">Selektor</th>
        <th scope="col" align="center" colspan="2">Wlc</th>
        <th scope="col" align="center" colspan="2">Kondisi</th>
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
          <select class="custom-select" name="powerpit6" required>
          <option value="{{$sumpitpump->powerpit6}}">{{$sumpitpump->powerpit6}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit6" required>
          <option value="{{$sumpitpump->selektorpit6}}">{{$sumpitpump->selektorpit6}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit6" required>
          <option value="{{$sumpitpump->wlcpit6}}">{{$sumpitpump->wlcpit6}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit6" required>
          <option value="{{$sumpitpump->kondisipit6}}">{{$sumpitpump->kondisipit6}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit7" required>
          <option value="{{$sumpitpump->powerpit7}}">{{$sumpitpump->powerpit7}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit7" required>
          <option value="{{$sumpitpump->selektorpit7}}">{{$sumpitpump->selektorpit7}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit7" required>
          <option value="{{$sumpitpump->wlcpit7}}">{{$sumpitpump->wlcpit7}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit7" required>
          <option value="{{$sumpitpump->kondisipit7}}">{{$sumpitpump->kondisipit7}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit8" required>
          <option value="{{$sumpitpump->powerpit8}}">{{$sumpitpump->powerpit8}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit8" required>
          <option value="{{$sumpitpump->selektorpit8}}">{{$sumpitpump->selektorpit8}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit8" required>
          <option value="{{$sumpitpump->wlcpit8}}">{{$sumpitpump->wlcpit8}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit8" required>
          <option value="{{$sumpitpump->kondisipit8}}">{{$sumpitpump->kondisipit8}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit9" required>
          <option value="{{$sumpitpump->powerpit9}}">{{$sumpitpump->powerpit9}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit9" required>
          <option value="{{$sumpitpump->selektorpit9}}">{{$sumpitpump->selektorpit9}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit9" required>
          <option value="{{$sumpitpump->wlcpit9}}">{{$sumpitpump->wlcpit9}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit9" required>
          <option value="{{$sumpitpump->kondisipit9}}">{{$sumpitpump->kondisipit9}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>
        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="powerpit10" required>
          <option value="{{$sumpitpump->powerpit10}}">{{$sumpitpump->powerpit10}}</option>
          <option value="On">On</option>
          <option value="Off">Off</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="selektorpit10" required>
          <option value="{{$sumpitpump->selektorpit10}}">{{$sumpitpump->selektorpit10}}</option>
          <option value="Auto">Auto</option>
          <option value="Off">Off</option>
          <option value="Manual">Manual</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="wlcpit10" required>
          <option value="{{$sumpitpump->wlcpit10}}">{{$sumpitpump->wlcpit10}}</option>
          <option value="Ok">Ok</option>
          <option value="Tidak">Tidak</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

        <td scope="col" align="center" colspan="2" class="was-validated align-middle">
          <div class="form-group">
          <select class="custom-select" name="kondisipit10" required>
          <option value="{{$sumpitpump->kondisipit10}}">{{$sumpitpump->kondisipit10}}</option>
          <option value="Bersih">Bersih</option>
          <option value="Kotor">Kotor</option>
          </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </td>

    </tr>
    <tr>
      <tr>
       <td scope="col" align="center" colspan="19"></td>

        <td scope="col" align="center" colspan="6" class="was-validated">
            <div class="form-group">
               <input type="text" class="form-control" name="spv" value="{{$sumpitpump->spv}}">
              <div class="invalid-feedback">input data sesuai nama pemeriksa</div>
            </div>
        </td>
        <td scope="col" align="center" colspan="19"></td>
    </tr>
</tr>
<tr>

</thead>
</table>
@endsection

