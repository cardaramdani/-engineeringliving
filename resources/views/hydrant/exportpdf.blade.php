

<h1 align="center" class="my-5" >Form Preventive Hydrant Box</h1>
<table border="1" cellpadding="5">
<tbody>
    <thead class="thead-dark" align="center">
<tr>
            <th class="align-middle"  style="background-color: gray;">
                <img style="width: 180px; height:70px;" src="{{ public_path('dataIMG_user/logo.png') }}"/>
            </th>
            <th scope="col" align="center" class="align-middle" colspan="3" style="background-color: gray">PM SCHEDULE : {{$hydrantbox->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle"  style="background-color: gray; padding:40px;">Halaman 1-1</th>
</tr>

<tr>
            <th scope="col" align="left"  class="align-middle"  rowspan="2" style="background-color: gray">EQUIPMENT : Hydrant Box<br>
            Floor : {{$hydrantbox->lantai}} <br>
            Item No  : {{$hydrantbox->item_no}}
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle"  style="background-color: gray"> {{$hydrantbox->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="left"  class="align-middle" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr>
          <th scope="col" align="left" class="align-middle"  style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle"  style="background-color: gray">{{$hydrantbox->created_at}}</th>

</tr>

</thead>
<tr>
    <td scope="col" align="center" colspan="2" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center"  class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="2" class="font-weight-bold">KETERANGAN</td>

</tr>

<tr>
        <td scope="col" colspan="2" class="font-weight-bold align-middle">Check kondisi Box Hydrant</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" >
            {{$hydrantbox->l1}}
        </td>

        <td scope="col" align="center" colspan="2" class="font-weight-bold align-middle">
         {{$hydrantbox->l1k1}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Hose</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l2}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l2k2}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Nozle</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l3}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l3k3}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Valve</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l4}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l4k4}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Segel</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l5}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l5k5}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Pipa</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l6}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l6k6}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Lampu Box Hydrant</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l7}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l7k7}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Hose Rell</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l8}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l8k8}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Jack Phone</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l9}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l9k9}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Panic Button</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l10}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l10k10}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Check Bell</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l11}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l11k11}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="2" class="font-weight-bold align-middle">Bersihkan Box Hydrant</td>
        <td scope="col"  class="font-weight-bold align-middle"  align="center">
            {{$hydrantbox->l12}}
        </td>

        <td scope="col"  colspan="2" align="center" class="font-weight-bold align-middle">
         {{$hydrantbox->l12k12}}

        </td>
</tr>

<tr>

        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="3">
         Dikerjakan Oleh :
         {{$hydrantbox->teknisi}}

        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="2">
         Diperiksa Supervisor : Carda</td>
</tr>

</tbody>

  </table>
