@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   View PM Rooftank
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Rooftank</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/rooftank/export" >
      @csrf
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle" colspan="5">
        <img src="/dataIMG_user/logo.png" class="logo"/>

        </th>
        <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
          <div class="form-group">
            <select class="custom-select" name="jadwalpm" required>
            <option value="{{$rooftank->jadwalpm}}">{{$rooftank->jadwalpm}}</option>
            </select>
          </div>
        </th>
        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr  align="left">
  <th scope="col" colspan="5" class="align-middle" rowspan="2">EQUIPMENT : Roof Tank
  </th>


  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$rooftank->planpm}}" required>
    </div>
  </th>
<th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>

<th scope="col" colspan="4" class="align-middle" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr align="left">
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$rooftank->created_at}}"  required>
    </div>
  </th>
</tr>

</thead>

<tr>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">KETERANGAN</td>

</tr>

<tr>
        <td scope="col" align="left" colspan="18" class="font-weight-bold">Mingguan</td>

</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Water level control </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l1" required readonly>
            <option value="{{$rooftank->l1}}">{{$rooftank->l1}}</option>
            </select>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l1k1}}" name="l1k1" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check control booster pump</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l2" required readonly>
            <option value="{{$rooftank->l2}}">{{$rooftank->l2}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l2k2}}" name="l2k2" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col" align="left" colspan="18" class="font-weight-bold">6 Bulanan</td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Dinding  Roof Tank </td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l3" required readonly>
            <option value="{{$rooftank->l3}}">{{$rooftank->l3}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l3k3}}" name="l3k3" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Lantai  Roof Tank</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l4" required readonly>
            <option value="{{$rooftank->l4}}">{{$rooftank->l4}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l4k4}}" name="l4k4" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Roof Tank apakah bersih/kotor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l5" required readonly>
            <option value="{{$rooftank->l5}}">{{$rooftank->l5}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l5k5}}" name="l5k5" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Valve</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l6" required readonly>
            <option value="{{$rooftank->l6}}">{{$rooftank->l6}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l6k6}}" name="l6k6" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Lampu indikator panel Booster Pump</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l7" required readonly>
            <option value="{{$rooftank->l7}}">{{$rooftank->l7}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l7k7}}" name="l7k7" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Switch mode panel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l8" required readonly>
            <option value="{{$rooftank->l8}}">{{$rooftank->l8}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l8k8}}" name="l8k8" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Tangga</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l9" required readonly>
            <option value="{{$rooftank->l9}}">{{$rooftank->l9}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l9k9}}" name="l9k9" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check  Pipa Discharge</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l10" required readonly>
            <option value="{{$rooftank->l10}}">{{$rooftank->l10}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l10k10}}" name="l10k10" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check  Pipa Suction</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l11" required readonly>
            <option value="{{$rooftank->l11}}">{{$rooftank->l11}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l11k11}}" name="l11k11" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan Strainer</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l12" required readonly>
            <option value="{{$rooftank->l12}}">{{$rooftank->l12}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$rooftank->l12k12}}" name="l12k12" readonly>
        </div>
        </td>
</tr>

<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="teknisi">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$rooftank->teknisi}}" required readonly name="teknisi" id="teknisi" >
        </div>
        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="spv">Diperiksa</label>
         <input type="text" class="form-control" autofocus="" required name="spv" id="spv">
        </div>
        </td>
</tr>


</tbody>
@role('Admin|Eng-spv|')
<tfoot>
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">EXPORT TO EXCEL
</tfoot>
@endrole
</form>
  </table>
@endsection

