@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   View PM Genset
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Genset</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/pmgenset/export" >
      @csrf
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle" colspan="5">
        <img src="/dataIMG_user/logo.png" class="logo"/>
        </th>

        <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
          <div class="form-group align-middle">
              <select class="custom-select" name="jadwalpm"  required>
              <option value="{{$pmgenset->jadwalpm}}" >{{$pmgenset->jadwalpm}}</option>
              </select>
        </th>

        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr align="left">
  <th scope="col"   class="align-middle" colspan="5" rowspan="2">EQUIPMENT : GENSET 1250 KVA</th>
  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$pmgenset->planpm}}" readonly required>
    </div>
  </th>
  <th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>
  <th scope="col" align="center"  class="align-middle" colspan="4" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>

</tr>

<tr align="left">
  <th scope="col" align="center" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$pmgenset->created_at}}" readonly required>
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
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Level Oli Engine</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l1" value="{{$pmgenset->l1}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l1k1}}" name="l1k1" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Chech Air Filter</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l2" value="{{$pmgenset->l2}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l2k2}}" name="l2k2" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Air Radiator</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l3" value="{{$pmgenset->l3}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l3k3}}" name="l3k3" readonly required>
        </div>
        </td>
</tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Valve Suply Solar</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l4" value="{{$pmgenset->l4}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l4k4}}" name="l4k4" readonly required>
        </div>
        </td>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning Body Genset</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l5" value="{{$pmgenset->l5}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l5k5}}" name="l5k5" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cechk Selektor Swicth Pompa Solar</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l6" value="{{$pmgenset->l6}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l6k6}}" name="l6k6" class="form-control" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Tanki Harian</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l7" value="{{$pmgenset->l7}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l7k7}}" name="l7k7" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Tanki Bulanan</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l8" value="{{$pmgenset->l8}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l8k8}}" name="l8k8" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Emergency Stop Button</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l9" value="{{$pmgenset->l9}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l9k9}}" name="l9k9" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Voltage Charger Accu</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l10" value="{{$pmgenset->l10}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="10" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l10k10}}" name="l10k10" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Voltage Accu</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l11" value="{{$pmgenset->l11}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l11k11}}" name="l11k11" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Odometer Running Hours</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l12" value="{{$pmgenset->l12}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l12k12}}" name="l12k12" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Mode OPS Modul PKG</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l13" value="{{$pmgenset->l13}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l13k13}}" name="l13k13" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Selektor Swicth CB Outgoing</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l14" value="{{$pmgenset->l14}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l14k14}}" name="l14k14" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Durasi Warmingup 5 s/d 10 Menit</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l15" value="{{$pmgenset->l15}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l15k15}}" name="l15k15" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="5" rowspan="3" class="font-weight-bold align-middle align-middle">Check Voltage</td>

        <td scope="col"  class="font-weight-bold align-middle">R-S</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="vr" value="{{$pmgenset->vr}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" rowspan="3" class="font-weight-bold align-middle align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l16k16}}" name="l16k16" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">S-T</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="vs" value="{{$pmgenset->vs}}" class="form-control" readonly required>
          </div>
        </td>

</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">T-R</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="vt" value="{{$pmgenset->vt}}" class="form-control" readonly required>
          </div>
        </td>

</tr>

<tr>
        <td scope="col"  colspan="5" rowspan="3" class="font-weight-bold align-middle align-middle">Check Ampere</td>

        <td scope="col"  class="font-weight-bold align-middle">R</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="ampr" value="{{$pmgenset->ampr}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" rowspan="3" class="font-weight-bold align-middle align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l17k17}}" name="l17k17" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">S</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="amps" value="{{$pmgenset->amps}}" class="form-control" readonly required>
          </div>
        </td>

</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">T</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="ampt" value="{{$pmgenset->ampt}}" class="form-control" readonly required>
          </div>
        </td>

</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check WATT/KW</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l18" value="{{$pmgenset->l18}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l18k18}}" name="l18k18" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Frequency (Hz)</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l19" value="{{$pmgenset->l19}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l19k19}}" name="l19k19" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Pf (Cos p)</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l20" value="{{$pmgenset->l20}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l20k20}}" name="l20k20" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check KWH</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l21" value="{{$pmgenset->l21}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l21k21}}" name="l21k21" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Kva</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l22" value="{{$pmgenset->l22}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l22k22}}" name="l22k22" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Check KvaRH</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l23" value="{{$pmgenset->l23}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l23k23}}" name="l23k23" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Charger Alternator</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l24" value="{{$pmgenset->l24}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l24k24}}" name="l24k24" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Temperature Engine</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l25" value="{{$pmgenset->l25}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l25k25}}" name="l25k25" readonly required>
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Pressure Oli</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold align-middle">
          <div class="form-group">
            <input type="text" name="l26" value="{{$pmgenset->l26}}" class="form-control" readonly required>
          </div>
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l26k26}}" name="l26k26" readonly required>
        </div>
        </td>
</tr>
<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
          <div class="form-group">
         <label for="teknisi">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$pmgenset->teknisi}}" required name="teknisi" id="teknisi" readonly>
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
