

<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=PM_AC.xls");
?>



<h1 align="center">Form Preventive AC</h1>
<table border="1"  style="font-size: smaller">
<tbody>
    <thead class="thead-dark" align="center">
<tr >
            <th scope="col" rowspan="1" class="align-middle" colspan="6" style="background-color: gray">
                {{-- <img style="width: 130px;" src="/dataIMG_user/logo.png" name="logo" class="logo"/> --}}
                <img style="width: 200px; " src="{{ public_path('dataIMG_user/logo.png') }}"/>
            </th>
            <th scope="col" rowspan="1" align="center" class="align-middle" colspan="7" style="background-color: gray">PM SCHEDULE : {{$Pmac->jadwalpm}}
            </th>
            <th scope="col" rowspan="1" align="center"  class="align-middle" colspan="6" style="background-color: gray">Halaman 1-1</th>
</tr>

<tr>
    <th scope="col" align="left"  class="align-middle" colspan="6"  style="background-color: gray">EQUIPMENT : Air Conditioner<br>
    </th>
    <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> PLAN SCHEDULE :{{$Pmac->planpm}}</th>
            {{-- <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th> --}}
            <th scope="col" align="center"  class="align-middle" colspan="6" style="background-color: gray">PM STATUS :</th>
</tr>
<tr>
            <th scope="col" align="left"  class="align-middle" colspan="6"  style="background-color: gray">
                Tower : {{$Pmac->tower}} <br>
                Floor : {{$Pmac->lantai}} <br>
                Unit Location : {{$Pmac->lokasi_unit}} <br>
            Item No  : {{$Pmac->item_no}}
            </th>

            {{-- <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th> --}}
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">AKTUAL CHECK :{{$Pmac->created_at}}</th>

            <th scope="col" align="left"  class="align-middle" colspan="6" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>



</thead>

<tr>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">KETERANGAN</td>

</tr>

<tr>
        <th scope="col" align="left" colspan="19" class="font-weight-bold">3 Bulanan</th>

</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Cleaning air filter indoor unit</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
            {{$Pmac->l1}}
        </td>

        <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
         {{$Pmac->l1k1}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan fan blower indoor unit</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l2}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l2k2}}

        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Suara tidak kasar</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l3}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l3k3}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Periksa kekencangan skrew koneksi kabel indoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l4}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l4k4}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Remote berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l5}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l5k5}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan PCB indoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l6}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l6k6}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning cover indoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l7}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l7k7}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cover indoor terpasang baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l8}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l8k8}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning/vakum drain</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l9}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l9k9}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Drain tidak bocor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l10}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l10k10}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning coil evap indoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l11}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l11k11}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Coil evap tidak berkarat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l12}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l12k12}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Fin coil evap tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l13}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l13k13}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pipe refrigerant Tidak bocor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l14}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l14k14}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kedudukan Unit indoor terpasang baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l15}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l15k15}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Compresor Suara tidak kasar</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l16}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l16k16}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Ampere outdoor sesuai spesifikasi</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l17}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l17k17}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Fin outdoor tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l18}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l18k18}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning evap kondensor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l19}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l19k19}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Coil kondendor Tidak bocor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l20}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l20k20}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning motor fan outdoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$Pmac->l21}}
        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l21k21}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Periksa kekencangan skrew koneksi kabel outdoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$Pmac->l22}}

        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l22k22}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pipe refrigerant Tidak bocor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$Pmac->l23}}

        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l23k23}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning body unit outdoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$Pmac->l24}}

        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l24k24}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pondasi unit outdoor terpasang baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$Pmac->l25}}

        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l25k25}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kabel power tidak panas</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$Pmac->l26}}

        </td>

        <td scope="col"  colspan="6" align="center" class="font-weight-bold align-middle">
         {{$Pmac->l26k26}}

        </td>
</tr>

<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Dikerjakan Oleh :
         {{$Pmac->teknisi}}

        </td>
        <td></td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Diperiksa Supervisor : Carda</td>
</tr>

</tbody>

  </table>

