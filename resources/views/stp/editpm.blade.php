
@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   Update PM STP
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive STP</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/pmstp/edit/{{$pmstp->id}}" >
      @method('patch')
      @csrf
      <input type="hidden" name="teknisi" value="{{$pmstp->teknisi}}">
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle" colspan="5">
        <img src="/dataIMG_user/logo.png" class="logo"/>
        </th>

        <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
          <div class="form-group">
              <select class="custom-select" name="jadwalpm"  required>
              <option value="{{$pmstp->jadwalpm}}">{{$pmstp->jadwalpm}}</option>
              <option value="Bulanan">Bulanan</option>
              <option value="3 Bulanan">3 Bulanan</option>
              <option value="Tahunan">Tahunan</option>
              </select>
        </th>

        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr align="left">
  <th scope="col"   class="align-middle" colspan="5" rowspan="2">EQUIPMENT : Sewage Treatment Plant
  </th>

  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$pmstp->planpm}}"  required>
    </div>
  </th>
  <th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>
  <th scope="col" align="center"  class="align-middle" colspan="4" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>

</tr>

<tr align="left">
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$pmstp->created_at}}"  required>
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
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Ketinggian lumpur / ketebalan</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l1" class="form-control" value="{{$pmstp->l1}}"  required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l1k1}}" name="l1k1"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Pompa Effluent</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l2" class="form-control" value="{{$pmstp->l2}}"  required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l2k2}}" name="l2k2"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Kabel Pompa</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l3" value="{{$pmstp->l3}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l3k3}}" name="l3k3"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Floating Switch</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l4" value="{{$pmstp->l4}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l4k4}}" name="l4k4"  required>
        </div>
        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Valve</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l5" value="{{$pmstp->l5}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l5k5}}" name="l5k5"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Grease trap</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l6" value="{{$pmstp->l6}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l6k6}}" name="l6k6"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Bracket inlet pipa</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l7" value="{{$pmstp->l7}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l7k7}}" name="l7k7"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Grill</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l8" value="{{$pmstp->l8}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l8k8}}" name="l8k8"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Carbon Filter</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l9" value="{{$pmstp->l9}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l9k9}}" name="l9k9"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Dozink pump</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l10" value="{{$pmstp->l10}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="10" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l10k10}}" name="l10k10"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Clorine tank</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l11" value="{{$pmstp->l11}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l11k11}}" name="l11k11"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Filter Pump</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l12" value="{{$pmstp->l12}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l12k12}}" name="l12k12"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Distribution pump</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l13" value="{{$pmstp->l13}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l13k13}}" name="l13k13"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Greasing Blower Pump</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l14" value="{{$pmstp->l14}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l14k14}}" name="l14k14"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check V-Belt Blower Pump</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l15" value="{{$pmstp->l15}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l15k15}}" name="l15k15"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle align-middle">Check Intake Fan</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l16" value="{{$pmstp->l16}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l16k16}}" name="l16k16"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Exhaust Fan</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l17" value="{{$pmstp->l17}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l17k17}}" name="l17k17"  required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Lampu Penerangan</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l18" value="{{$pmstp->l18}}" class="form-control" required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmstp->l18k18}}" name="l18k18"  required>
        </div>
        </td>
</tr>


<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="teknisi">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$pmstp->teknisi}}" required name="teknisi" id="teknisi" >
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
