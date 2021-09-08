@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
     Add Logsheet Stp
@endsection
@section('li_tambahan')


@endsection
@section('main-container')

              <h1 align="center">Form Add Logsheet Stp</h1>

<table class="table table-bordered table-striped">
<tbody>
   <form method="post" action="/stp/add" >
      @csrf

    <input type="hidden" name="teknisi" value="{{ Auth::user()->username }}">
    <input type="hidden" name="spv" value="Kosong">
    <thead class="thead-dark" align="center">
      <tr>
        <th scope="col" align="center"  class="align-middle">Item Pengecekan</th>
        <th scope="col" align="center" class="align-middle">Shift
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

<tr>

        <td scope="col" align="center">Basket Screen </td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
                <select class="custom-select" name="basketscreen" required>
                <option value="">Pilih status</option>
                <option value="Bersih">Bersih</option>
                <option value="Kotor">Kotor</option>
                </select>
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

        <td scope="col" align="center">Status Blower 1 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statusblower1" required>
              <option value="">Pilih status</option>
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
               <input type="text" class="form-control" name="pressureblower1" placeholder="Tekanan psi" required autocomplete="off">

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Kondisi Umum Blower 1</td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
              <select class="custom-select" name="kondisiblower1" required>
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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
               <input type="text" class="form-control" name="pressureblower2" placeholder="Tekanan psi" required autocomplete="off">

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>
<tr>

        <td scope="col" align="center">Kondisi Umum Blower 2</td>
        <td scope="col" align="center">
            <div class="form-group was-validated">
              <select class="custom-select" name="kondisiblower2" required>
              <option value="">Pilih status</option>
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

        <td scope="col" align="center">Status Equalizing pump 1 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statusequalizing1" required>
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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

        <td scope="col" align="center">Status Effluent pump 1 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statuseffluent1" required>
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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

        <td scope="col" align="center">Status Fillter pump 1 </td>
        <td scope="col" align="center">
          <div class="form-group was-validated">
              <select class="custom-select" name="statusfilter1" required>
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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
              <option value="">Pilih status</option>
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
               <input type="text" class="form-control" name="standmeter" placeholder="Angka Meteran Air" required autocomplete="off">

          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
        </td>

</tr>


<tr>
        <th scope="col" class="align-top" colspan="3"  class="font-weight-bold">Temuan:
          <div class="form-group ">
              <textarea class="form-control " id="catatan" placeholder="Uraikan temuan di lapangan" name="temuan" rows="2" autocomplete="off" ></textarea>
              <div class="invalid-feedback">input data sesuai aktual</div>


        </th>
</tr>
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Submit
</form>
</tbody>
</table>
@endsection

