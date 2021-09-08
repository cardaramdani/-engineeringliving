@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   Update PM Genset
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Genset</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/pmgenset/edit/{{$pmgenset->id}}" >
      @method('patch')
      @csrf
      <input type="hidden" name="teknisi" value="{{$pmgenset->teknisi}}">
<tbody>
    <thead class="thead-dark" align="center">

<tr>
        <th scope="col" class="align-middle"  colspan="2">
        <img src="/dataIMG_user/logo.png"  class="logo"/>
        </th>

        <th scope="col" align="center" class="align-middle" colspan="3">PM SCHEDULE :
          <div class="form-group">
              <select class="custom-select" name="jadwalpm"  required>
              <option value="{{$pmgenset->jadwalpm}}">{{$pmgenset->jadwalpm}}</option>
              </select>
        </th>

        <th scope="col" align="center"  class="align-middle" >Halaman 1-1</th>
</tr>

<tr class="align-middle" align="left">
  <th scope="col" class="align-middle" align="left" colspan="2" rowspan="2">EQUIPMENT : GENSET 1250 KVA</th>
  <th scope="col" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" >
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" value="{{$pmgenset->planpm}}"  required>
    </div>
  </th>
  <th scope="col" align="center"  class="align-middle" rowspan="2">PM STATUS :</th>
  <th scope="col" align="left" class="align-middle" rowspan="2">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>

</tr>

<tr align="left">
  <th scope="col" align="left" class="align-middle">AKTUAL CHECK :</th>
  <th scope="col" align="center" class="align-middle" >
    <div class="form-group">
      <input type="text" class="form-control" name="aktualcek" value="{{$pmgenset->created_at}}"  required>
    </div>
  </th>
</tr>

</thead>

<tr>
        <td scope="col" align="center" colspan="3" class="font-weight-bold">CHECK LIST</td>
        <td scope="col" align="center"  class="font-weight-bold">STATUS</td>
        <td scope="col" align="center" colspan="2" class="font-weight-bold">KETERANGAN</td>

</tr>

<tr>
        <td scope="col" colspan="3" class="font-weight-bold align-middle">Check Level Oli Engine</td>
        <td scope="col" align="center" class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l1" required>
            <option value="{{$pmgenset->l1}}">{{$pmgenset->l1}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col" align="center" colspan="2" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle" value="{{$pmgenset->l1k1}}" name="l1k1" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Chech Air Filter</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l2" required>
            <option value="{{$pmgenset->l2}}">{{$pmgenset->l2}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l2k2}}" name="l2k2" autocomplete="off">
        </div>
        </td>
</tr>
<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Level Air Radiator</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l3" required>
            <option value="{{$pmgenset->l3}}">{{$pmgenset->l3}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold ">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l3k3}}" name="l3k3" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Valve Suply Solar</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l4" required>
            <option value="{{$pmgenset->l4}}">{{$pmgenset->l4}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l4k4}}" name="l4k4" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Cleaning Body Genset</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l5" required>
            <option value="{{$pmgenset->l5}}">{{$pmgenset->l5}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l5k5}}" name="l5k5" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Cechk Selektor Swicth Pompa Solar</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l6" required>
            <option value="{{$pmgenset->l6}}">{{$pmgenset->l6}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l6k6}}" name="l6k6" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Level Tanki Harian</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l7" required>
            <option value="{{$pmgenset->l7}}">{{$pmgenset->l7}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l7k7}}" name="l7k7" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Level Tanki Bulanan</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l8" required>
            <option value="{{$pmgenset->l8}}">{{$pmgenset->l8}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l8k8}}" name="l8k8" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Emergency Stop Button</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l9" required>
            <option value="{{$pmgenset->l9}}">{{$pmgenset->l9}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l9k9}}" name="l9k9" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Voltage Charger Accu</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l10" required>
            <option value="{{$pmgenset->l10}}">{{$pmgenset->l10}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l10k10}}" name="l10k10" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Voltage Accu</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l11" required>
            <option value="{{$pmgenset->l11}}">{{$pmgenset->l11}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l11k11}}" name="l11k11" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Odometer Running Hours</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l12" required>
            <option value="{{$pmgenset->l12}}">{{$pmgenset->l12}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l12k12}}" name="l12k12" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Mode OPS Modul PKG</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l13" required>
            <option value="{{$pmgenset->l13}}">{{$pmgenset->l13}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l13k13}}" name="l13k13" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Selektor Swicth CB Outgoing</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l14" required>
            <option value="{{$pmgenset->l14}}">{{$pmgenset->l14}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l14k14}}" name="l14k14" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Durasi Warmingup 5 s/d 10 Menit</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l15" required>
            <option value="{{$pmgenset->l15}}">{{$pmgenset->l15}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l15k15}}" name="l15k15" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" rowspan="3" class="font-weight-bold align-middle">Check Voltage</td>
        <td scope="col"  class="font-weight-bold align-middle">R-S</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="number" class="form-control align-middle" value="{{$pmgenset->vr}}" name="vr" autocomplete="off">

          </div>
        </td>

        <td scope="col"  colspan="2" rowspan="3" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle"  value="{{$pmgenset->l16k16}}" name="l16k16" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">S-T</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="number" class="form-control align-middle" value="{{$pmgenset->vs}}" name="vs" autocomplete="off">

          </div>
        </td>

</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">T-R</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="number" class="form-control align-middle" value="{{$pmgenset->vt}}" name="vt" autocomplete="off">

          </div>
        </td>

</tr>

<tr>
        <td scope="col"  colspan="2" rowspan="3" class="font-weight-bold align-middle">Check Ampere</td>
        <td scope="col"  class="font-weight-bold align-middle">R</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="number" class="form-control align-middle" value="{{$pmgenset->ampr}}"name="ampr" autocomplete="off">

          </div>
        </td>

        <td scope="col"  colspan="2" rowspan="3" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle"  value="{{$pmgenset->l17k17}}" name="l17k17" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">S</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="number" class="form-control align-middle" value="{{$pmgenset->amps}}"name="amps" autocomplete="off">

          </div>
        </td>

</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">T</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="number" class="form-control align-middle" value="{{$pmgenset->ampt}}"name="ampt" autocomplete="off">

          </div>
        </td>

</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check WATT/KW</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="number" class="form-control align-middle" value="{{$pmgenset->l18}}" name="l18" autocomplete="off">
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l18k18}}" name="l18k18" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Frequency (Hz)</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="text" class="form-control align-middle"  value="{{$pmgenset->l19}}" name="l19" autocomplete="off">
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l19k19}}" name="l19k19" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Pf (Cos p)</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l20" required>
            <option value="{{$pmgenset->l20}}">{{$pmgenset->l20}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l20k20}}" name="l20k20" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check KWH</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="text" class="form-control align-middle"  value="{{$pmgenset->l21}}" name="l21" autocomplete="off">

          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l21k21}}" name="l21k21" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Kva</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="text" class="form-control align-middle"  value="{{$pmgenset->l22}}" name="l22" autocomplete="off">

          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l22k22}}" name="l22k22" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Check KvaRH</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
           <input type="text" class="form-control align-middle"  value="{{$pmgenset->l23}}" name="l23" autocomplete="off">

          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l23k23}}" name="l23k23" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Charger Alternator</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l24" required>
            <option value="{{$pmgenset->l24}}">{{$pmgenset->l24}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l24k24}}" name="l24k24" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Temperature Engine</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l25" required>
            <option value="{{$pmgenset->l25}}">{{$pmgenset->l25}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l25k25}}" name="l25k25" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="3" class="font-weight-bold align-middle">Check Pressure Oli</td>
        <td scope="col"  class="font-weight-bold" >
          <div class="form-group">
            <select class="custom-select" name="l26" required>
            <option value="{{$pmgenset->l26}}">{{$pmgenset->l26}}</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="2" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" value="{{$pmgenset->l26k26}}" name="l26k26" autocomplete="off">
        </div>
        </td>
</tr>
<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="3">
          <div class="form-group">
         <label for="teknisi">Dikerjakan</label>
         <input type="text" class="form-control" value="{{$pmgenset->teknisi}}" required name="teknisi" id="teknisi" >
        </div>
        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="3">
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

