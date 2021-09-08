

<h1 class="align-middle" align="center">Form Preventive GONDOLA</h1>

<table border="1" cellpadding="5">
<tbody>
<thead class="thead-dark" align="center">
        <tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
                <img style="width: 150px; " src="{{ public_path('dataIMG_user/logo.png') }}"/>
            </th>
            <th scope="col" align="center" class="align-middle" colspan="8" style="background-color: gray">PM SCHEDULE :  {{$pmgondola->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="5" style="background-color: gray">Halaman 1-1</th>
        </tr>

        <tr>

            <th scope="col" align="left" class="align-middle" colspan="5" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="left" class="align-middle" colspan="7" style="background-color: gray"> {{$pmgondola->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="center"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>

        </tr>

        <tr>
          <th scope="col" align="left" class="align-middle" colspan="5" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="left" class="align-middle" colspan="7" style="background-color: gray">{{$pmgondola->created_at}}</th>

        </tr>

</thead>
<tr>
        <th scope="col" align="center" colspan="10" class="font-weight-bold">CHECK LIST</th>
        <th scope="col" align="center" colspan="3" class="font-weight-bold">STATUS</th>
        <th scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</th>
</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold">Bulanan</th>

</tr>

<tr>
        <td scope="col" colspan="10" class="font-weight-bold">Beri grease untuk pelumasan</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l1}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l1k1}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Panel - Panel dan Safetynya</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l2}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l2k2}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check kondisi wire rope dan motornya</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l3}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l3k3}}
        </td>
</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold">3 Bulanan</th>

</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Kabel power ke panel car Gondola</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l4}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l4k4}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Soket kabel power di area</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l5}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l5k5}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Contaktor</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l6}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l6k6}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Push Button panel control gondola</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l7}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l7k7}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Motor Slewing Sangkar Arm</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l8}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l8k8}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Limit Swicth Sangkar</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l9}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l9k9}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Clam Wire Rope Sangkar</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l10}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l10k10}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Roda Geser Gondola</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l11}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l11k11}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Motor Traver Maju/Mundur</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l12}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l12k12}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Drum wire winder kanan dan kiri</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l13}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l13k13}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Motor Brake</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l14}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l14k14}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Mekanikal Brake</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l15}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l15k15}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold align-middle">Check Motor Turn Table kiri/kanan</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l16}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
          {{$pmgondola->l16k16}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold align-middle">Check Safety hook gondola</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l17}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
          {{$pmgondola->l17k17}}
        </td>
</tr>

<tr>
        <td scope="col"  colspan="10" class="font-weight-bold">Check Emergency Button Sangkar dan Panel Utama</td>

        <td scope="col" align="center" colspan="3" class="font-weight-bold">
          {{$pmgondola->l18}}
        </td>

        <td scope="col" align="center" colspan="5" class="font-weight-bold">
          {{$pmgondola->l18k18}}
        </td>
</tr>


<tr>

    <td scope="col" align="center" class="font-weight-bold" colspan="10">Dikerjakan oleh : {{$pmgondola->teknisi}}</td>
    <td scope="col" align="center" class="font-weight-bold" colspan="8">Diperiksa Supervisor : Carda</td>
</tr>
</tbody>
</table>
