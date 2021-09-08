@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
     Logsheet Stp
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
            <h1 align="center">Form Logsheet Stp</h1>

<table class="table table-bordered table-striped">
<tbody>

    <thead class="thead-dark" align="center">
      <tr>
        <th scope="col" align="center" class="align-middle">Tanggal</th>
        <th scope="col" align="center" class="align-middle">Teknisi</th>
        <th scope="col" align="center" class="align-middle">Shift</th>
        <th scope="col" align="center"  class="align-middle">Item Pengecekan</th>
        <th scope="col" align="center"  class="align-middle">Status</th>
        <th scope="col" align="center"  class="align-middle">Diperiksa oleh Spv</th>

      </tr>

    </thead>

<tr>
      <td scope="col" align="center" rowspan="28">{{$stp->created_at}}</td>
      <td scope="col" align="center" rowspan="28">
        <div class="form-group was-validated">
               <input type="text" class="form-control" name="teknisi" value="{{$stp->teknisi}}" required autocomplete="off">

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
      </td>
      <td scope="col" align="center" rowspan="28">
        <div class="form-group was-validated">
              <select class="custom-select" name="shift" required>
              <option value="{{$stp->shift}}">{{$stp->shift}}</option>
              <option value="Pagi">Pagi</option>
              <option value="Siang">Siang</option>
              <option value="Malam">Malam</option>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
      </td>
        <td scope="col" align="center">Basket Screen </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
                <select class="custom-select" name="basketscreen" required>
                <option value="{{$stp->basketscreen}}">{{$stp->basketscreen}}</option>
                <option value="Bersih">Bersih</option>
                <option value="Kotor">Kotor</option>
                </select>
                <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
        </td>
       <td scope="col" align="center" rowspan="28">
            <div class="form-group was-validated">
               <input type="text" class="form-control" name="spv" value="{{$stp->spv}}">

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>
</tr>

<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">A. Blower </td>
</tr>

<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="selektorblower" required>
              <option value="{{$stp->selektorblower}}">{{$stp->selektorblower}}</option>
              <option value="Manual">Manual</option>
              <option value="Off">Off</option>
              <option value="Auto">Auto</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Status Blower 1 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statusblower1" required>
              <option value="{{$stp->statusblower1}}">{{$stp->statusblower1}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Pressure Blower 1 </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
               <input type="text" class="form-control" name="pressureblower1" value="{{$stp->pressureblower1}}" required autocomplete="off">

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Kondisi Umum Blower 1</td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
              <select class="custom-select" name="kondisiblower1" required>
              <option value="{{$stp->kondisiblower1}}">{{$stp->kondisiblower1}}</option>
              <option value="Abnormal">Abnormal</option>
              <option value="Normal">Normal</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Status Blower 2 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statusblower2" required>
              <option value="{{$stp->statusblower2}}">{{$stp->statusblower2}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Pressure Blower 2 </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
               <input type="text" class="form-control" name="pressureblower2" value="{{$stp->pressureblower2}}" required autocomplete="off">

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Kondisi Umum Blower 2</td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
              <select class="custom-select" name="kondisiblower2" required>
              <option value="{{$stp->kondisiblower2}}">{{$stp->kondisiblower2}}</option>
              <option value="Abnormal">Abnormal</option>
              <option value="Normal">Normal</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">B. Equalizing Pump </td>
</tr>

<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="selektorequalizing" required>
              <option value="{{$stp->selektorequalizing}}">{{$stp->selektorequalizing}}</option>
              <option value="Manual">Manual</option>
              <option value="Off">Off</option>
              <option value="Auto">Auto</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Status Equalizing pump 1 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statusequalizing1" required>
              <option value="{{$stp->statusequalizing1}}">{{$stp->statusequalizing1}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Status Equalizing pump 2 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statusequalizing2" required>
              <option value="{{$stp->statusequalizing2}}">{{$stp->statusequalizing2}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Level Tank Equalizing </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="levelequalizing" required>
              <option value="{{$stp->levelequalizing}}">{{$stp->levelequalizing}}</option>
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Kondisi Air Equalizing </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="kondisiequalizing" required>
              <option value="{{$stp->kondisiequalizing}}">{{$stp->kondisiequalizing}}</option>
              <option value="Keruh">Keruh</option>
              <option value="Jernih">Jernih</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>


<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">C. Effluent Pump </td>
</tr>

<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="selektoreffluent" required>
              <option value="{{$stp->selektoreffluent}}">{{$stp->selektoreffluent}}</option>
              <option value="Manual">Manual</option>
              <option value="Off">Off</option>
              <option value="Auto">Auto</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Status Effluent pump 1 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statuseffluent1" required>
              <option value="{{$stp->statuseffluent1}}">{{$stp->statuseffluent1}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Status Effluent pump 2 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statuseffluent2" required>
              <option value="{{$stp->statuseffluent2}}">{{$stp->statuseffluent2}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Level Tank Effluent </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="leveleffluent" required>
              <option value="{{$stp->leveleffluent}}">{{$stp->leveleffluent}}</option>
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Kondisi Air Effluent </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="kondisieffluent" required>
              <option value="{{$stp->kondisieffluent}}">{{$stp->kondisieffluent}}</option>
              <option value="Keruh">Keruh</option>
              <option value="Jernih">Jernih</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>

<tr>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">D. Fillter Pump </td>
</tr>

<tr>
        <td scope="col" align="center">Selector Switch </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="selektorfilter" required>
              <option value="{{$stp->selektorfilter}}">{{$stp->selektorfilter}}</option>
              <option value="Manual">Manual</option>
              <option value="Off">Off</option>
              <option value="Auto">Auto</option>
              </select>
            <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Status Fillter pump 1 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statusfilter1" required>
              <option value="{{$stp->statusfilter1}}">{{$stp->statusfilter1}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Status Fillter pump 2 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statusfilter2" required>
              <option value="{{$stp->statusfilter2}}">{{$stp->statusfilter2}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Intake Fan </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="intakefan" required>
              <option value="{{$stp->intakefan}}">{{$stp->intakefan}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Exhaust Fan </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="exhaustfan" required>
              <option value="{{$stp->exhaustfan}}">{{$stp->exhaustfan}}</option>
              <option value="Off">Off</option>
              <option value="On">On</option>
              </select>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Stand Meteran Air </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
               <input type="text" class="form-control" name="standmeter" value="{{$stp->standmeter}}" required autocomplete="off">

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>


<tr>
        <th scope="col" class="align-top" colspan="6"  class="font-weight-bold">Temuan:
          <div class="form-group ">
              <textarea class="form-control "  name="temuan" rows="2" autocomplete="off" >{{$stp->temuan}}</textarea>
              <div class="invalid-feedback">input data sesuai aktual</div>


        </th>
</tr>

</tbody>
</table>
@endsection

