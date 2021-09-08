@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   update PM Gondola
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Gondola</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/gondola/edit/{{$pmgondola->id}}" >
      @method('patch')
      @csrf
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle" colspan="5">
        <img src="/dataIMG_user/logo.png" class="logo"/>

        </th>
        <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
          <div class="form-group " >
            <select class="custom-select " name="jadwalpm" required>
            <option  value="{{$pmgondola->jadwalpm}}">{{$pmgondola->jadwalpm}}</option>
            <option value="Bulanan">Bulanan</option>
            <option value="3 Bulanan">3 Bulanan</option>
            <option value="Tahunan">Tahunan</option>
            </select>
          </div>
        </th>
        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr class="align-middle" align="left">
  <th scope="col" colspan="5" rowspan="2" class="align-middle">EQUIPMENT : Gondola

  </th>


  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$pmgondola->planpm}}" required>
    </div>
  </th>
<th scope="col" rowspan="2" class="align-middle" >PM STATUS :</th>

<th scope="col" colspan="4" rowspan="2" class="align-middle">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr align="left">
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$pmgondola->created_at}}" readonly required>
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
        <td scope="col" align="left" colspan="19" class="font-weight-bold">Bulanan</td>

</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold">Beri grease untuk pelumasan</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l1" required>
            <option value="{{$pmgondola->l1}}">{{$pmgondola->l1}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l1k1}}" name="l1k1" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Panel - Panel dan Safetynya</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l2" required>
            <option value="{{$pmgondola->l2}}">{{$pmgondola->l2}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l2k2}}" name="l2k2" autocomplete="off">
        </div>
        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check kondisi wire rope dan motornya</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l3" required>
            <option value="{{$pmgondola->l3}}">{{$pmgondola->l3}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l3k3}}" name="l3k3" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col" align="left" colspan="19" class="font-weight-bold">3 Bulanan</td>

</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Kabel power ke panel car Gondola</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l4" required>
            <option value="{{$pmgondola->l4}}">{{$pmgondola->l4}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l4k4}}" name="l4k4" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Soket kabel power di area</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l5" required>
            <option value="{{$pmgondola->l5}}">{{$pmgondola->l5}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l5k5}}" name="l5k5" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Contaktor</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l6" required>
            <option value="{{$pmgondola->l6}}">{{$pmgondola->l6}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l6k6}}" name="l6k6" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Push Button panel control gondola</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l7" required>
            <option value="{{$pmgondola->l7}}">{{$pmgondola->l7}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l7k7}}" name="l7k7" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Motor Slewing Sangkar Arm</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l8" required>
            <option value="{{$pmgondola->l8}}">{{$pmgondola->l8}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l8k8}}" name="l8k8" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Limit Swicth Sangkar</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l9" required>
            <option value="{{$pmgondola->l9}}">{{$pmgondola->l9}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l9k9}}" name="l9k9" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Clam Wire Rope Sangkar</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l10" required>
            <option value="{{$pmgondola->l10}}">{{$pmgondola->l10}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l10k10}}" name="l10k10" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Roda Geser Gondola</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l11" required>
            <option value="{{$pmgondola->l11}}">{{$pmgondola->l11}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l11k11}}" name="l11k11" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Motor Traver Maju/Mundur</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l12" required>
            <option value="{{$pmgondola->l12}}">{{$pmgondola->l12}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l12k12}}" name="l12k12" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Drum wire winder kanan dan kiri</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l13" required>
            <option value="{{$pmgondola->l13}}">{{$pmgondola->l13}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l13k13}}" name="l13k13" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Motor Brake</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l14" required>
            <option value="{{$pmgondola->l14}}">{{$pmgondola->l14}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l14k14}}" name="l14k14" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Mekanikal Brake</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l15" required>
            <option value="{{$pmgondola->l15}}">{{$pmgondola->l15}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l15k15}}" name="l15k15" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Motor Turn Table kiri/kanan</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l16" required>
            <option value="{{$pmgondola->l16}}">{{$pmgondola->l16}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l16k16}}" name="l16k16" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Safety hook gondola</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l17" required>
            <option value="{{$pmgondola->l17}}">{{$pmgondola->l17}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l17k17}}" name="l17k17" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Emergency Button Sangkar dan Panel Utama</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l18" required>
            <option value="{{$pmgondola->l18}}">{{$pmgondola->l18}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgondola->l18k18}}" name="l18k18" autocomplete="off">
        </div>
        </td>
</tr>

<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="teknisi">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$pmgondola->teknisi}}" required name="teknisi" id="teknisi" >
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
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Update

</tfoot>
</form>
  </table>
@endsection
