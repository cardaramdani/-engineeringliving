@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   View PM HydrantBox
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Hydrant Box</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/hydrant/export" >
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
            <option value="{{$hydrantbox->jadwalpm}}">{{$hydrantbox->jadwalpm}}</option>
            </select>
          </div>
        </th>
        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr  align="left">
  <th scope="col" colspan="5" class="align-middle" rowspan="2">EQUIPMENT : Hydrant Box <br>
  Tower : <div class="form-group">
            <select class="custom-select" name="tower" required>
            <option  selected>{{$hydrantbox->tower}}</option>
            @foreach ($Tower as $tower)
            <option value="{{$tower->tower}}" disabled>{{$tower->tower}}</option>
            @endforeach
            </select>
        </div>
        Floor : <div class="form-group">
              <select class="custom-select" name="lantai" required>
              <option  selected>{{$hydrantbox->lantai}}</option>
              @foreach ($Floor as $floor)
              <option value="{{$floor->floor}}" disabled>{{$floor->floor}}</option>
              @endforeach
              </select>
          </div>
Zona : <div class="form-group">
<select class="custom-select" name="item_no" required>
    <option  selected>{{$hydrantbox->item_no}}</option>
    <option value="1" disabled>1</option>
    <option value="2" disabled>2</option>
</select>
</div>
  </th>


  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$hydrantbox->planpm}}" required>
    </div>
  </th>
<th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>

<th scope="col" colspan="4" class="align-middle" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr align="left">
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$hydrantbox->created_at}}"  required>
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
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check kondisi Box Hydrant </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l1" required readonly>
            <option value="{{$hydrantbox->l1}}">{{$hydrantbox->l1}}</option>
            </select>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l1k1}}" name="l1k1" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Hose</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l2" required readonly>
            <option value="{{$hydrantbox->l2}}">{{$hydrantbox->l2}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l2k2}}" name="l2k2" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Nozle</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l3" required readonly>
            <option value="{{$hydrantbox->l3}}">{{$hydrantbox->l3}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l3k3}}" name="l3k3" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Valve</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l4" required readonly>
            <option value="{{$hydrantbox->l4}}">{{$hydrantbox->l4}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l4k4}}" name="l4k4" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Segel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l5" required readonly>
            <option value="{{$hydrantbox->l5}}">{{$hydrantbox->l5}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l5k5}}" name="l5k5" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Pipa</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l6" required readonly>
            <option value="{{$hydrantbox->l6}}">{{$hydrantbox->l6}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l6k6}}" name="l6k6" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Lampu Box Hydrant</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l7" required readonly>
            <option value="{{$hydrantbox->l7}}">{{$hydrantbox->l7}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l7k7}}" name="l7k7" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Hose Rell</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l8" required readonly>
            <option value="{{$hydrantbox->l8}}">{{$hydrantbox->l8}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l8k8}}" name="l8k8" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Jack Phone</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l9" required readonly>
            <option value="{{$hydrantbox->l9}}">{{$hydrantbox->l9}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l9k9}}" name="l9k9" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check  Panic Button</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l10" required readonly>
            <option value="{{$hydrantbox->l10}}">{{$hydrantbox->l10}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l10k10}}" name="l10k10" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Bell</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l11" required readonly>
            <option value="{{$hydrantbox->l11}}">{{$hydrantbox->l11}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l11k11}}" name="l11k11" readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan Box Hydrant</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l12" required readonly>
            <option value="{{$hydrantbox->l12}}">{{$hydrantbox->l12}}</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$hydrantbox->l12k12}}" name="l12k12" readonly>
        </div>
        </td>
</tr>

<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="teknisi">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$hydrantbox->teknisi}}" required readonly name="teknisi" id="teknisi" >
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
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Export To Excel
</tfoot>
@endrole
</form>
  </table>
@endsection
