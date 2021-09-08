@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   Update PM Panel
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Panel</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/pmpanel/edit/{{$pmpanel->id}}" >
      @method('patch')
      @csrf
      <input type="hidden" value ="{{Auth::user()->username}}" name="nama">
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle" colspan="5">
        <img src="/dataIMG_user/logo.png" class="logo"/>

        </th>
        <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
          <div class="form-group">
              <input type="text" name="jadwalpm" required value="{{$pmpanel->jadwalpm}}">
          </div>
        </th>
        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr align="left">
  <th scope="col"   class="align-middle" colspan="5">EQUIPMENT : Panel Power</th>
  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$pmpanel->planpm}}" required>
    </div>
  </th>
  <th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>
  <th scope="col" align="center"  class="align-middle" colspan="4" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>

</tr>

<tr align="left">
  <th scope="col"   class="align-middle" colspan="5" >LOKASI & NAMA PANEL :
  Tower : <div class="form-group">
            <select class="custom-select" name="tower" required>
            <option  selected>{{$pmpanel->tower}}</option>
            @foreach ($Tower as $tower)
            <option value="{{$tower->tower}}">{{$tower->tower}}</option>
            @endforeach
            </select>
        </div>
  Floor : <div class="form-group">
              <select class="custom-select" name="lantai" required>
              <option  selected>{{$pmpanel->lantai}}</option>
              @foreach ($Floor as $floor)
              <option value="{{$floor->floor}}">{{$floor->floor}}</option>
              @endforeach
              </select>
          </div>
Nama Panel : <div class="form-group">
                <select class="custom-select" name="nama_panel" required>
                    <option  selected>{{$pmpanel->nama_panel}}</option>
                    @foreach ($Equipment as $equipment)
                    <option value="{{$equipment->equipment_name}}">{{$equipment->equipment_name}}</option>
                    @endforeach
                </select>
            </div>
  </th>
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$pmpanel->created_at}}" required>
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
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Cleaning Box Panel </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l1" required>
            <option value="{{$pmpanel->l1}}">{{$pmpanel->l1}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpanel->l1k1}}" name="l1k1">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kencangkan Sreuw Terminal kabel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l2" required>
            <option value="{{$pmpanel->l2}}">{{$pmpanel->l2}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpanel->l2k2}}" name="l2k2">
        </div>
        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning Contaktor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l3" required>
            <option value="{{$pmpanel->l3}}">{{$pmpanel->l3}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpanel->l3k3}}" name="l3k3">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning Relay</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l4" required>
            <option value="{{$pmpanel->l4}}">{{$pmpanel->l4}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpanel->l4k4}}" name="l4k4">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Push Botton</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l5" required>
            <option value="{{$pmpanel->l5}}">{{$pmpanel->l5}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpanel->l5k5}}" name="l5k5">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Ampere Meter</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l6" required>
            <option value="{{$pmpanel->l6}}">{{$pmpanel->l6}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpanel->l6k6}}" name="l6k6">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Volt Meter</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l7" required>
            <option value="{{$pmpanel->l7}}">{{$pmpanel->l7}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control"value="{{$pmpanel->l7k7}}" name="l7k7">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Indikator lamp</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l8" required>
            <option value="{{$pmpanel->l8}}">{{$pmpanel->l8}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control"value="{{$pmpanel->l8k8}}" name="l8k8">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning MCB Panel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l9" required>
            <option value="{{$pmpanel->l9}}">{{$pmpanel->l9}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control"value="{{$pmpanel->l9k9}}" name="l9k9">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Kabel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l10" required>
            <option value="{{$pmpanel->l10}}">{{$pmpanel->l10}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control"value="{{$pmpanel->l10k10}}" name="l10k10">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Exhaust Fan</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l11" required>
            <option value="{{$pmpanel->l11}}">{{$pmpanel->l11}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control"value="{{$pmpanel->l11k11}}" name="l11k11">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Lampu Penerangan</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l12" required>
            <option value="{{$pmpanel->l12}}">{{$pmpanel->l12}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control"value="{{$pmpanel->l12k12}}" name="l12k12">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check MMCB Panel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l13" required>
            <option value="{{$pmpanel->l13}}">{{$pmpanel->l13}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control"value="{{$pmpanel->l13k13}}" name="l13k13">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check ACB Panel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l14" required>
            <option value="{{$pmpanel->l14}}">{{$pmpanel->l14}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control"value="{{$pmpanel->l14k14}}" name="l14k14">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Kapasitor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l15" required>
            <option value="{{$pmpanel->l15}}">{{$pmpanel->l15}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control"value="{{$pmpanel->l15k15}}" name="l15k15">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Check Thermis Relay</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l16" required>
            <option value="{{$pmpanel->l16}}">{{$pmpanel->l16}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle" value="{{$pmpanel->l16k16}}" name="l16k16">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Check Fuse</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l17" required>
            <option value="{{$pmpanel->l17}}">{{$pmpanel->l17}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle" value="{{$pmpanel->l17k17}}" name="l17k17">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Check Timer</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l18" required>
            <option value="{{$pmpanel->l18}}">{{$pmpanel->l18}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle" value="{{$pmpanel->l18k18}}" name="l18k18">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Bersihkan panel listrik dari debu</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l19" required>
            <option value="{{$pmpanel->l19}}">{{$pmpanel->l19}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle" value="{{$pmpanel->l19k19}}" name="l19k19">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Check Temperature Koneksi Main mcb</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l20" required>
            <option value="{{$pmpanel->l20}}">{{$pmpanel->l20}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold align-middle align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle" value="{{$pmpanel->l20k20}}" name="l20k20">
        </div>
        </td>
</tr>

<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="teknisi">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$pmpanel->teknisi}}" required name="teknisi" id="teknisi" readonly>
        </div>
        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="spv">Diperiksa</label>
         <input type="text" class="form-control" autofocus="" required name="spv" id="spv" autocomplete="off">
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

