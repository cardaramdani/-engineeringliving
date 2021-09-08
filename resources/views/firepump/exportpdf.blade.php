
<h1 class="align-middle" align="center">Form Preventive FirePumps</h1>

<table border="1" cellpadding="5">
<tbody>
<thead class="thead-dark" align="center">
        <tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
                <img style="width: 150px; " src="{{ public_path('dataIMG_user/logo.png') }}"/>
            </th>
            <th scope="col" align="center" class="align-middle" colspan="8" style="background-color: gray">PM SCHEDULE : {{$pmfirepumps->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="5" style="background-color: gray">Halaman 1-1</th>
        </tr>

        <tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">EQUIPMENT : Diesel, Elektrik, Jockey Pump
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$pmfirepumps->planpm}}</th>
            <th scope="col" align="right"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="left"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>

        </tr>

        <tr>
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$pmfirepumps->created_at}}</th>

        </tr>

</thead>
<tr>
        <th scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</th>
        <th scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</th>
        <th scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</th>
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold">Check Level oli engine</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l1}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l1k1}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Air filter</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l2}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l2k2}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Level Air Radiator</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l3}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l3k3}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Valve Suply Solar</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l4}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l4k4}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Body Engine</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l5}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l5k5}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Level Tangky Solar</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l6}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l6k6}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Voltage Charge Accu</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l7}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l7k7}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Voltage Accu</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l8}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l8k8}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Selektor Panel Control</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l9}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l9k9}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Durasi WarmingUp</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l10}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l10k10}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Level Air Accu 1</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l11}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l11k11}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check Level Air Accu 2</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l12}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l12k12}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold">Check RPM Engine</td>

        <td scope="col" align="center" colspan="7" class="font-weight-bold">
          {{$pmfirepumps->l13}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmfirepumps->l13k13}}
        </td>
</tr>

<tr>

    <td scope="col" align="center" class="font-weight-bold" colspan="9">Dikerjakan oleh : {{$pmfirepumps->teknisi}}</td>
    <td scope="col" align="center" class="font-weight-bold" colspan="9">Diperiksa Supervisor : Carda</td>
</tr>
</tbody>
</table>
