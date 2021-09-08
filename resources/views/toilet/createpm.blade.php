@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   Add PM Toilet
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Toilet</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/toilet/add" >
      @csrf
      <input type="hidden" value ="{{Auth::user()->username}}" name="teknisi">
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle" colspan="5">
        <img src="/dataIMG_user/logo.png" class="logo"/>

        </th>
        <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
          <div class="form-group">
            <select class="custom-select" name="jadwalpm" required>
            <option value="3 Bulanan">3 Bulanan</option>
            </select>
          </div>
        </th>
        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr  align="left">
    <th scope="col" colspan="5" class="align-middle">EQUIPMENT : Toilet</th>
    <th scope="col" align="center" class="align-middle" rowspan="2">PLAN SCHEDULE :</th>
    <th scope="col" align="center" class="align-middle" colspan="7" rowspan="2">
        <div class="form-group">
        <input type="date" class="form-control" name="planpm" required>
        </div>
    </th>
    <th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>
    <th scope="col" colspan="4" class="align-middle" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr>
    <th>
        Tower : <div class="form-group">
            <select class="custom-select" name="tower" required>
            <option  value="">Pilih Tower</option>
            @foreach ($Tower as $tower)
            <option value="{{$tower->tower}}">{{$tower->tower}}</option>
            @endforeach
            </select>
        </div>
        Floor : <div class="form-group">
              <select class="custom-select" name="lantai" required>
              <option  value="">Pilih Lantai</option>
              @foreach ($Floor as $floor)
              <option value="{{$floor->floor}}">{{$floor->floor}}</option>
              @endforeach
              </select>
          </div>
        Nama Toilet : <div class="form-group">
            <select class="custom-select" name="nama_toilet" required>
            <option  value="">Pilih nama</option>
            <option value="Toilet Pria">Toilet Pria</option>
            <option value="Toilet Wanita">Toilet Wanita</option>
            <option value="Toilet Difabel">Toilet Difabel</option>
            </select>
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
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Drain Urinal tidak tersumbat</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l1" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l1k1" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Flushing Urinal valve berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l2" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l2k2" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Washtaple Drain tidak tersumbat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l3" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l3k3" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kran Washtaple berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l4" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l4k4" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Drain Closet tidak tersumbat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l5" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l5k5" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Flushing valve Closet berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l6" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l6k6" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Handle pintu tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l7" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l7k7" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Daun pintu tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l8" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l8k8" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">FD Tidak tersumbat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l9" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l9k9" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Keramik tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l10" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l10k10" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cat Dinding Tidak Kotor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l11" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l11k11" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cermin Tidak Rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l12" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l12k12" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning Utrap Washtaple</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l13" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l13k13" autocomplete="off">
        </div>
        </td>
</tr>

</tbody>
<tfoot>
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Submit

</tfoot>
</form>
  </table>
@endsection
