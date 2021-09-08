@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
   Add PM Genset
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <h1 align="center" class="my-5" >Form Preventive Genset</h1>
<table class="table table-bordered table-striped">
<form method="post" action="/pmgenset/add" >
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
              <input type="text" name="jadwalpm" required readonly value="2 Mingguan">
          </div>
        </th>
        <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
</tr>

<tr>
  <th scope="col"   class="align-middle" colspan="5" >EQUIPMENT : GENSET 1250 KVA</th>


  <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
  <th scope="col" align="center" class="align-middle" colspan="7">
    <div class="form-group">
      <input type="date" class="form-control" name="planpm" required>
    </div>
  </th>
<th scope="col" align="center"  class="align-middle" >PM STATUS :</th>

<th scope="col" colspan="4" class="align-left">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

</thead>

<tr>
        <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
        <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
        <td scope="col" align="center" colspan="6" class="font-weight-bold">KETERANGAN</td>

</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Level Oli Engine</td>
        <td scope="col" align="center" class="font-weight-bold" colspan="7">
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
         <input type="text" class="form-control align-middle" placeholder="Keterangan" name="l1k1" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Chech Air Filter</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l2k2" autocomplete="off">
        </div>
        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Air Radiator</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold ">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l3k3" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Valve Suply Solar</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l4k4" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning Body Genset</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l5k5" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cechk Selektor Swicth Pompa Solar</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l6k6" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Tanki Harian</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l7k7" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Level Tanki Bulanan</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l8k8" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Emergency Stop Button</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l9k9" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Voltage Charger Accu</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l10k10" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Voltage Accu</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l11k11" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Odometer Running Hours</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l12k12" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Mode OPS Modul PKG</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
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

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l13k13" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Selektor Swicth CB Outgoing</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l14" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l14k14" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Durasi Warmingup 5 s/d 10 Menit</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l15" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l15k15" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="5" rowspan="3" class="font-weight-bold align-middle">Check Voltage</td>
        <td scope="col"  class="font-weight-bold align-middle">R-S</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="number" class="form-control align-middle"  placeholder="Phase R-S" name="vr" autocomplete="off" required>

          </div>
        </td>

        <td scope="col"  colspan="6" rowspan="3" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle"  placeholder="Keterangan" name="l16k16" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">S-T</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="number" class="form-control align-middle"  placeholder="Phase S-T" name="vs" autocomplete="off" required>

          </div>
        </td>

</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">T-R</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="number" class="form-control align-middle"  placeholder="Phase T-R" name="vt" autocomplete="off" required>

          </div>
        </td>

</tr>

<tr>
        <td scope="col"  colspan="5" rowspan="3" class="font-weight-bold align-middle">Check Ampere</td>
        <td scope="col"  class="font-weight-bold align-middle">R</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="number" class="form-control align-middle"  placeholder="Ampere R" name="ampr" autocomplete="off" required>

          </div>
        </td>

        <td scope="col"  colspan="6" rowspan="3" class="font-weight-bold align-middle">
          <div class="form-group">
         <input type="text" class="form-control align-middle"  placeholder="Keterangan" name="l17k17" autocomplete="off" >
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">S</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="number" class="form-control align-middle"  placeholder="Ampere S" name="amps" autocomplete="off" required>

          </div>
        </td>

</tr>

<tr>
        <td scope="col"  class="font-weight-bold align-middle">T</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="number" class="form-control align-middle"  placeholder="Ampere T" name="ampt" autocomplete="off" required>

          </div>
        </td>

</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check WATT/KW</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="number" class="form-control align-middle"  placeholder="KILOWATT" name="l18" autocomplete="off" required>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l18k18" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Frequency (Hz)</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="text" class="form-control align-middle"  placeholder="Frequency" name="l19" autocomplete="off" required>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l19k19" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Pf (Cos p)</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l20" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l20k20" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check KWH</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="text" class="form-control align-middle"  placeholder="KWH" name="l21" autocomplete="off" required>

          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l21k21" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Kva</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="text" class="form-control align-middle"  placeholder="Kva" name="l22" autocomplete="off" required>

          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l22k22" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Check KvaRH</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
           <input type="text" class="form-control align-middle"  placeholder="KvaRH" name="l23" autocomplete="off" required>

          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l23k23" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Charger Alternator</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l24" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l24k24" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Temperature Engine</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l25" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l25k25" autocomplete="off">
        </div>
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Pressure Oli</td>
        <td scope="col"  class="font-weight-bold" colspan="7">
          <div class="form-group">
            <select class="custom-select" name="l26" required>
            <option value="">Pilih</option>
            <option value="C">C</option>
            <option value="B">B</option>
            <option value="R">R</option>
            <option value="X">X</option>
            </select>
          </div>
        </td>

        <td scope="col"  colspan="6" class="font-weight-bold">
          <div class="form-group">
         <input type="text" class="form-control" placeholder="Keterangan" name="l26k26" autocomplete="off">
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
