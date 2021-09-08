@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   update PM Firepumps
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive FirePumps</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/pmfirepump/edit/{{$pmfirepumps->id}}" >
      @method('patch')
      @csrf
      <input type="hidden" name="teknisi" value="{{$pmfirepumps->teknisi}}">
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle" colspan="5">
        <img src="/dataIMG_user/logo.png" class="logo"/>
        </th>

        <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
          <div class="form-group">
              <select class="custom-select" name="jadwalpm"  required>
              <option value="{{$pmfirepumps->jadwalpm}}">{{$pmfirepumps->jadwalpm}}</option>
              <option value="Bulanan">Bulanan</option>
              <option value="3 Bulanan">3 Bulanan</option>
              <option value="Tahunan">Tahunan</option>
              </select>
        </th>

        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr align="left">
  <th scope="col"   class="align-middle" colspan="5" rowspan="2">EQUIPMENT : Diesel, Elektrik, Jockey Pump
  </th>

  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$pmfirepumps->planpm}}"  required>
    </div>
  </th>
  <th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>
  <th scope="col" align="center"  class="align-middle" colspan="4" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>

</tr>

<tr align="left">
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$pmfirepumps->created_at}}"  required>
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
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Level oli engine</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l1" class="form-control" value="{{$pmfirepumps->l1}}"  required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l1k1}}" name="l1k1"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Air filter</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l2" class="form-control" value="{{$pmfirepumps->l2}}"  required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l2k2}}" name="l2k2"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Air Radiator</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l3" value="{{$pmfirepumps->l3}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l3k3}}" name="l3k3"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Valve Suply Solar</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l4" value="{{$pmfirepumps->l4}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l4k4}}" name="l4k4"  required>
        </div>
        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Body Engine</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l5" value="{{$pmfirepumps->l5}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l5k5}}" name="l5k5"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Tangky Solar</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l6" value="{{$pmfirepumps->l6}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l6k6}}" name="l6k6"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Voltage Charge Accu</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l7" value="{{$pmfirepumps->l7}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l7k7}}" name="l7k7"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Voltage Accu</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l8" value="{{$pmfirepumps->l8}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l8k8}}" name="l8k8"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Selektor Panel Control</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l9" value="{{$pmfirepumps->l9}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l9k9}}" name="l9k9"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Durasi WarmingUp</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l10" value="{{$pmfirepumps->l10}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="10" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l10k10}}" name="l10k10"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Air Accu 1</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l11" value="{{$pmfirepumps->l11}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l11k11}}" name="l11k11"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Air Accu 2</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l12" value="{{$pmfirepumps->l12}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l12k12}}" name="l12k12"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check RPM Engine</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l13" value="{{$pmfirepumps->l13}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmfirepumps->l13k13}}" name="l13k13"  required>
        </div>
        </td>
</tr>


<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="teknisi">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$pmfirepumps->teknisi}}" required name="teknisi" id="teknisi" >
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
<tfoot>
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">UPDATE

</tfoot>
</form>
  </table>
@endsection

