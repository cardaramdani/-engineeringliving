@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   View PM Pompa
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Pompa</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/pmpompa/export" enctype="multipart/form-data" >
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
              <option value="{{$pmpompa->jadwalpm}}">{{$pmpompa->jadwalpm}}</option>
              </select>
        </th>

        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr align="left">
  <th scope="col"   class="align-middle" colspan="5" rowspan="2">
    EQUIPMENT : Pompa-pompa <br>
    Lokasi Unit : <div class="form-group">
        <select class="custom-select" name="lokasi_unit" required>
        <option  value="">Pilih Area</option>
        <option selected>{{$pmpompa->lokasi_unit}}</option>
        @foreach ($Area as $area)
        <option value="{{$area->public_area}}" disabled>{{$area->public_area}}</option>
        @endforeach
        </select>
    </div>
Nama Pompa : <div class="form-group">
                <select class="custom-select" name="nama_pompa" required>
                    <option  value="">Pilih Nama Pompa</option>
                    <option selected>{{$pmpompa->nama_pompa}}</option>
                    @foreach ($Equipment as $equipment)
                    <option value="{{$equipment->equipment_name}}" disabled>{{$equipment->equipment_name}}</option>
                    @endforeach
                </select>
            </div>
  </th>
  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$pmpompa->planpm}}" readonly required>
    </div>
  </th>
  <th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>
  <th scope="col" align="center"  class="align-middle" colspan="4" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>

</tr>

<tr align="left">
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$pmpompa->created_at}}" readonly required>
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
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Bersihkan Pompa - pompa</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l1" class="form-control" value="{{$pmpompa->l1}}"  required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l1k1}}" name="l1k1"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pengecekan Joint Coupling dan rubber Joint Coupling</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l2" class="form-control" value="{{$pmpompa->l2}}"  required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l2k2}}" name="l2k2"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pengecekan dudukan motor dan pompa</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l3" value="{{$pmpompa->l3}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l3k3}}" name="l3k3"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col" align="left" colspan="19" class="font-weight-bold align-middle">3 Bulanan</td>

</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Motor</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l4" value="{{$pmpompa->l4}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l4k4}}" name="l4k4"  required readonly>
        </div>
        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Bearing Motor </td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l5" value="{{$pmpompa->l5}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l5k5}}" name="l5k5"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Terminal Motor </td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l6" value="{{$pmpompa->l6}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l6k6}}" name="l6k6"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Kipas Motor</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l7" value="{{$pmpompa->l7}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l7k7}}" name="l7k7"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Poros Motor</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l8" value="{{$pmpompa->l8}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l8k8}}" name="l8k8"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Pompa</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l9" value="{{$pmpompa->l9}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l9k9}}" name="l9k9"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Valve</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l10" value="{{$pmpompa->l10}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="10" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l10k10}}" name="l10k10"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Rubber Mounting </td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l11" value="{{$pmpompa->l11}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l11k11}}" name="l11k11"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Rubber Kopling </td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l12" value="{{$pmpompa->l12}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l12k12}}" name="l12k12"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Bearing Pompa</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l13" value="{{$pmpompa->l13}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l13k13}}" name="l13k13"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Mekanikal Seal</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l14" value="{{$pmpompa->l14}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l14k14}}" name="l14k14"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Impeler Pompa</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l15" value="{{$pmpompa->l15}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l15k15}}" name="l15k15"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle align-middle">Check Presure Gauge</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l16" value="{{$pmpompa->l16}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l16k16}}" name="l16k16"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Presure Switch</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l17" value="{{$pmpompa->l17}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l17k17}}" name="l17k17"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Greasing Motor</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l18" value="{{$pmpompa->l18}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l18k18}}" name="l18k18"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col" align="left" colspan="19" class="font-weight-bold align-middle">Tahunan</td>
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Overhaul/Service motor & pompa</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l19" value="{{$pmpompa->l19}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l19k19}}" name="l19k19"  required readonly>
        </div>
        </td>

</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Gulungan Motor</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l20" value="{{$pmpompa->l20}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l20k20}}" name="l20k20"  required readonly>
        </div>
        </td>

</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan Check Valve dan Gate valve</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l21" value="{{$pmpompa->l21}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l21k21}}" name="l21k21"  required readonly>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Amper Meter Sesuai Name Plate</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l22" value="{{$pmpompa->l22}}" class="form-control" required readonly>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmpompa->l22k22}}" name="l22k22"  required readonly>
        </div>
        </td>
</tr>
<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="teknisi">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$pmpompa->teknisi}}" required name="teknisi" id="teknisi" readonly>
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
