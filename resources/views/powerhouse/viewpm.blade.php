@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   View PM Panel
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Panel</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/pmpanel/export" >
      @csrf
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle" colspan="5">
        <img src="/dataIMG_user/logo.png" class="logo"/>
        </th>

        <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
          <div class="form-group">
              <select class="custom-select" name="jadwalpm"  required>
              <option value="{{$pmpanel->jadwalpm}}">{{$pmpanel->jadwalpm}}</option>
              </select>
        </th>

        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr align="left">
  <th scope="col"   class="align-middle" colspan="5">EQUIPMENT : Panel Power</th>
  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$pmpanel->planpm}}" readonly required>
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
            <option value="{{$tower->tower}}" disabled>{{$tower->tower}}</option>
            @endforeach
            </select>
        </div>
        Floor : <div class="form-group">
              <select class="custom-select" name="lantai" required>
              <option  selected>{{$pmpanel->lantai}}</option>
              @foreach ($Floor as $floor)
              <option value="{{$floor->floor}}" disabled>{{$floor->floor}}</option>
              @endforeach
              </select>
          </div>
Nama Panel : <div class="form-group">
                <select class="custom-select" name="nama_panel" required>
                    <option  selected>{{$pmpanel->nama_panel}}</option>
                    @foreach ($Equipment as $equipment)
                    <option value="{{$equipment->equipment_name}}" disabled>{{$equipment->equipment_name}}</option>
                    @endforeach
                </select>
            </div>
  </th>
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$pmpanel->created_at}}" readonly required>
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
            <input type="text" class="form-control" name="l1" value="{{$pmpanel->l1}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l1k1" value="{{$pmpanel->l1k1}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kencangkan Sreuw Terminal kabel</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l2" value="{{$pmpanel->l2}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l2k2" value="{{$pmpanel->l2k2}}" readonly required>
          </div>
        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning Contaktor</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l3" value="{{$pmpanel->l3}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l3k3" value="{{$pmpanel->l3k3}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning Relay</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l4" value="{{$pmpanel->l4}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l4k4" value="{{$pmpanel->l4k4}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Push Botton</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l5" value="{{$pmpanel->l5}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l5k5" value="{{$pmpanel->l5k5}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Ampere Meter</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l6" value="{{$pmpanel->l6}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l6k6" value="{{$pmpanel->l6k6}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Volt Meter</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l7" value="{{$pmpanel->l7}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l7k7" value="{{$pmpanel->l7k7}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Indikator lamp</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l8" value="{{$pmpanel->l8}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l8k8" value="{{$pmpanel->l8k8}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning MCB Panel</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l9" value="{{$pmpanel->l9}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l9k9" value="{{$pmpanel->l9k9}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Kabel</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l10" value="{{$pmpanel->l10}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l10k10" value="{{$pmpanel->l10k10}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Exhaust Fan</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l11" value="{{$pmpanel->l11}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l11k11" value="{{$pmpanel->l11k11}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Lampu Penerangan</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l12" value="{{$pmpanel->l12}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l12k12" value="{{$pmpanel->l12k12}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check MMCB Panel</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l13" value="{{$pmpanel->l13}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l13k13" value="{{$pmpanel->l13k13}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check ACB Panel</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l14" value="{{$pmpanel->l14}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l14k14" value="{{$pmpanel->l14k14}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Kapasitor</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l15" value="{{$pmpanel->l15}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l15k15" value="{{$pmpanel->l15k15}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Check Thermis Relay</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l16" value="{{$pmpanel->l16}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l16k16" value="{{$pmpanel->l16k16}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Check Fuse</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l17" value="{{$pmpanel->l17}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l17k17" value="{{$pmpanel->l17k17}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Check Timer</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l18" value="{{$pmpanel->l18}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l18k18" value="{{$pmpanel->l18k18}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Bersihkan panel listrik dari debu</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l19" value="{{$pmpanel->l19}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l19k19" value="{{$pmpanel->l19k19}}" readonly required>
          </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6"class="font-weight-bold align-middle align-middle">Check Temperature Koneksi Main mcb</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
          <div class="form-group">
            <input type="text" class="form-control" name="l20" value="{{$pmpanel->l20}}" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" class="form-control" name="l20k20" value="{{$pmpanel->l20k20}}" readonly required>
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
         <input type="text" class="form-control" autofocus="" required name="spv" id="spv">
        </div>
        </td>
</tr>
</tbody>
@role('Admin|Eng-spv|')
<tfoot>
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold align-middle"  type="submit" style="margin-left: inherit;">EXPORT TO EXCEL
</tfoot>
@endrole
</form>
  </table>
@endsection

