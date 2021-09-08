@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
      Update Power House
@endsection

@section('main-container')
      <h1 align="center" class="my-5">Form Update Data Power House</h1>
            <table class="table table-bordered table-striped">
<tbody>

    <thead class="thead-dark" align="center">
      <tr>

              <th scope="col" align="center" class="align-middle" >Shift</th>
              <th scope="col" align="center" class="align-middle" >Item Pengecekan</th>
              <th scope="col" align="center" class="align-middle" >Batasan Normal</th>
              <th scope="col" align="center" class="align-middle" >PUTR1 </th>
              <th scope="col" align="center" class="align-middle" >PUTR2 </th>
              <th scope="col" align="center" class="align-middle" >Diperiksa (Spv) </th>
      </tr>
    </thead>

<form method="post" action="/PowerHouse/edit/{{$powerHouse->id}}" >
  @method('patch')
      @csrf
<input type="hidden" name="teknisi" value="{{$powerHouse->teknisi}}">


  <tr>

    <td scope="col" align="center"   class="font-weight-bold align-middle" rowspan="29">
      <div class="form-group was-validated">
              <select class="custom-select" name="shift" required>
              <option value="{{$powerHouse->shift}}">{{$powerHouse->shift}}</option>
              <option value="Pagi">Pagi</option>
              <option value="Siang">Siang</option>
              <option value="Malam">Malam</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
    </td>
    <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="5">A. POWER METER PUTR</td>

    </td>

</tr>
<tr>
    <td scope="col" align="center" class="font-weight-bold">KWH</td>
    <td scope="col" align="center" class="font-weight-bold">Total KWH</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="kwh1" placeholder="Stand kwh" value="{{$powerHouse->kwh1}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center" >
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="kwh2" placeholder="Stand kwh" value="{{$powerHouse->kwh2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center" class="align-middle" rowspan="28">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="spv" value="{{$powerHouse->spv}}" >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>
    <td scope="col" align="center" class="font-weight-bold">KVA</td>
    <td scope="col" align="center" class="font-weight-bold">Total Kva</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="kva1" value="{{$powerHouse->kva1}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="kva2" value="{{$powerHouse->kva2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>

<tr>

    <td scope="col" align="center" class="font-weight-bold">KVARH</td>
    <td scope="col" align="center" class="font-weight-bold">Total KVarH</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="kvarh1" value="{{$powerHouse->kvarh1}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="kvarh2" value="{{$powerHouse->kvarh2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Phase R</td>
    <td scope="col" align="center" class="font-weight-bold">ampere</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="ampere1r" value="{{$powerHouse->ampere1r}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="ampere2r" value="{{$powerHouse->ampere2r}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Phase S</td>
    <td scope="col" align="center" class="font-weight-bold">ampere</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="ampere1s" value="{{$powerHouse->ampere1s}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="ampere2s" value="{{$powerHouse->ampere2s}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Phase t</td>
    <td scope="col" align="center" class="font-weight-bold">ampere</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="ampere1t" value="{{$powerHouse->ampere1t}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="ampere2t" value="{{$powerHouse->ampere2t}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Voltage</td>
    <td scope="col" align="center" class="font-weight-bold">R-S</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v1rs" value="{{$powerHouse->v1rs}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v2rs" value="{{$powerHouse->v2rs}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Voltage</td>
    <td scope="col" align="center" class="font-weight-bold">S-T</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v1st" value="{{$powerHouse->v1st}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v2st" value="{{$powerHouse->v2st}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Voltage</td>
    <td scope="col" align="center" class="font-weight-bold">T-R</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v1tr" value="{{$powerHouse->v1tr}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v2tr" value="{{$powerHouse->v2tr}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Voltage</td>
    <td scope="col" align="center" class="font-weight-bold">R-N</td>
    <td scope="col" align="center" >
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v1rn" value="{{$powerHouse->v1rn}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v2rn" value="{{$powerHouse->v2rn}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Voltage</td>
    <td scope="col" align="center" class="font-weight-bold">S-N</td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v1sn" value="{{$powerHouse->v1sn}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v2sn" value="{{$powerHouse->v2sn}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Voltage</td>
    <td scope="col" align="center" class="font-weight-bold">T-N</td>
    <td scope="col" align="center" >
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v1tn" value="{{$powerHouse->v1tn}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="v2tn" value="{{$powerHouse->v2tn}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">FREQUENCY</td>
    <td scope="col" align="center" class="font-weight-bold">Hz </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="freq1" value="{{$powerHouse->freq1}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="freq2" value="{{$powerHouse->freq2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Selector Panel</td>
    <td scope="col" align="center" class="font-weight-bold">Manual / Off / Auto </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
              <select class="custom-select" name="selektor1" required>
              <option value="{{$powerHouse->selektor1}}">{{$powerHouse->selektor1}}</option>
              <option value="Manual">Manual</option>
              <option value="Off">Off</option>
              <option value="Auto">Auto</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
      </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="selektor2" value="{{$powerHouse->selektor2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
      </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Fan Blower panel</td>
    <td scope="col" align="center" class="font-weight-bold">On / Off </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
              <select class="custom-select" name="fan1" required>
              <option value="{{$powerHouse->fan1}}">{{$powerHouse->fan1}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
      </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="fan2" value="{{$powerHouse->fan2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>
    <td scope="col" align="center"   class="font-weight-bold" colspan="4">B. CAPASITOR BANK</td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Power Factor(cosp)</td>
    <td scope="col" align="center" class="font-weight-bold">0,86 - 0,99 </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="pf1" value="{{$powerHouse->pf1}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="pf2" value="{{$powerHouse->pf2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Step Cap On</td>
    <td scope="col" align="center" class="font-weight-bold">Step 1 - 13 </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="cap1" value="{{$powerHouse->cap1}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="cap2" value="{{$powerHouse->cap2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Fan Blowe Panel</td>
    <td scope="col" align="center" class="font-weight-bold">On / Off </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
              <select class="custom-select" name="fancap1" required>
              <option value="{{$powerHouse->fancap1}}">{{$powerHouse->fancap1}}</option>
              <option value="On">On</option>
              <option value="Off">Off</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="fancap2" value="{{$powerHouse->fancap2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Temperature panel</td>
    <td scope="col" align="center" class="font-weight-bold">Hot / Normal </td>
    <td scope="col" align="center">

      <div class="form-group was-validated">
              <select class="custom-select" name="tempcap1" required>
              <option value="{{$powerHouse->tempcap1}}">{{$powerHouse->tempcap1}}</option>
              <option value="Hot">Hot</option>
              <option value="Normal">Normal</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
      </td>
    <td scope="col" align="center">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="tempcap2" value="{{$powerHouse->tempcap2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>
    <td scope="col" align="center"   class="font-weight-bold" colspan="4">C. TRAFO 1</td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Level Oli Trafo</td>
    <td scope="col" align="center" class="font-weight-bold">High / Medium / Low </td>
    <td scope="col" align="center" colspan="2">
      <div class="form-group was-validated">
              <select class="custom-select" name="levelolitrafo1" required>
              <option value="{{$powerHouse->levelolitrafo1}}">{{$powerHouse->levelolitrafo1}}</option>
              <option value="High">High</option>
              <option value="Medium">Medium</option>
              <option value="Low">Low</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
      </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Temperature Oli </td>
    <td scope="col" align="center" class="font-weight-bold">30 - 60 </td>
    <td scope="col" align="center" colspan="2">
      <div class="form-group was-validated">
           <input type="number" class="form-control" name="temptrafo1" value="{{$powerHouse->temptrafo1}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>
    <td scope="col" align="center"   class="font-weight-bold" colspan="4">D. TRAFO 2 </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Level Oli Trafo</td>
    <td scope="col" align="center" class="font-weight-bold">High / Medium / Low </td>
    <td scope="col" align="center" colspan="2">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="levelolitrafo2" value="{{$powerHouse->levelolitrafo2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="center" class="font-weight-bold">Temperature Oli </td>
    <td scope="col" align="center" class="font-weight-bold">30 - 60 </td>
    <td scope="col" align="center" colspan="2">
      <div class="form-group was-validated">
           <input type="text" class="form-control" name="temptrafo2" value="{{$powerHouse->temptrafo2}}" required >
          <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
    </td>
</tr>
<tr>

    <td scope="col" align="left" class="font-weight-bold" colspan="4">Temuan :
           <input type="text" class="form-control" name="temuan" value="{{$powerHouse->temuan}}">
    </td>

</tr>

<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Submit
</form>


</tbody>
@endsection


