
<h1 align="center" class="my-5" >Form Preventive Clean Water Tank</h1>
<table border="1" cellpadding="5">
<tbody>
    <thead class="thead-dark" align="center">
<tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
                <img style="width: 200px; " src="{{ public_path('dataIMG_user/logo.png') }}"/>
            </th>
            <th scope="col" align="center" class="align-middle" colspan="9" style="background-color: gray">PM SCHEDULE : {{$cwt->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="4" style="background-color: gray">Halaman 1-1</th>
</tr>

<tr>

            <th scope="col" align="left" class="align-middle" colspan="5" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="left" class="align-middle" colspan="8" style="background-color: gray"> {{$cwt->planpm}}</th>
            <th scope="col" align="right"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="left"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr>
          <th scope="col" align="left" class="align-middle" colspan="5" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="left" class="align-middle" colspan="8" style="background-color: gray">{{$cwt->created_at}}</th>

</tr>

</thead>

<tr>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</td>

</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold">Mingguan</th>

</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Check Water level control</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
            {{$cwt->l1}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
         {{$cwt->l1k1}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Back Wash Sand Filter</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l2}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l2k2}}

        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Back Wash Carbon Filter</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l3}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l3k3}}

        </td>
</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold">6 Bulanan</th>

</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Dinding Clean Water Tank</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l4}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l4k4}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Lantai  Clean Water Tank</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l5}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l5k5}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check  Clean Water Tank apakah bersih/kotor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l6}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l6k6}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Valve</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l7}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l7k7}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Lampu indikator panel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l8}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l8k8}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Switch mode panel</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l9}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l9k9}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check Tangga</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l10}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l10k10}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check  Pipa Discharge</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l11}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l11k11}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Check  Pipa Suction</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l12}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l12k12}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan Strainer</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l13}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l13k13}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Back Wash Sand Filter</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l14}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l14k14}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Back Wash carbon Filter</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$cwt->l15}}
        </td>

        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$cwt->l15k15}}

        </td>
</tr>

<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Dikerjakan Oleh :
         {{$cwt->teknisi}}

        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Diperiksa Supervisor : Carda</td>
</tr>

</tbody>

  </table>
