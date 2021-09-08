@extends('layouts.crud')
@section('title')
      Detail Kwhunit comersile
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
      <h1 align="center" class="my-5">ELECTRICITY COMERSILE</h1>

<table class="table table-bordered table-striped table-sm">
  <thead class="fixed-header thead-dark" align="center">
      <tr>
          <th scope="col" align="center"  class="align-middle">Unit</th>
          <th scope="col" align="center" class="align-middle">Serial No.</th>
        </tr>
      <tr>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
            <input type="text" class="form-control" value="{{$kwhcomersile->Unit}}" name="Unit" readonly>
            <div class="invalid-feedback">input data sesuai aktual</div>
            </div>

        </td>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <input type="text" class="form-control" value="{{$kwhcomersile->NoSeri}}" name="NoSeri"readonly>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
      </tr>
      <tr>
        <th scope="col" align="center"  class="align-middle">Power Installed</th>
        <th scope="col" align="center" class="align-middle">Multification Factor</th>
      </tr>
      <tr>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
            <input type="text" class="form-control" value="{{$kwhcomersile->Daya}}" name="Daya" readonly>
            <div class="invalid-feedback">input data sesuai aktual</div>
            </div>

        </td>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <input type="text" class="form-control" value="{{$kwhcomersile->Faktor_kali}}" name="Faktor_kali"readonly>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
      </tr>
      <tr>
          <th scope="col" align="center" class="align-middle">Start Lwbp</th>
          <th scope="col" align="center" class="align-middle">End Lwbp</th>
      </tr>
      <tr>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <input type="number" class="form-control" value="{{$kwhcomersile->StandAwal_lwbp}}" name="StandAwal_lwbp" readonly>
                 <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <input type="number" class="form-control" value="{{$kwhcomersile->StandAkhir_lwbp}}" name="StandAkhir_lwbp" readonly>
                 <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
      </tr>
      <tr>
          <th scope="col" align="center" class="align-middle">Image First lwbp</th>
        <th scope="col" align="center"  class="align-middle">Image Latest lwbp</th>
    </tr>
      <td scope="col" align="center" class="was-validated align-middle">
        <a href="{{ url('/dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAwal_lwbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAwal_lwbp) }}" style="width:250px; height:250px;"/>
      </a>

    </td>
    <td scope="col" align="center" class="was-validated align-middle">
        <a href="{{ url('/dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAkhir_lwbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAkhir_lwbp) }}" style="width:250px; height:250px;"/>
      </a>

    </td>

    <tr>
          <th scope="col" align="center" class="align-middle">Start LWbp</th>
          <th scope="col" align="center" class="align-middle">End LWbp</th>

      </tr>
      <tr>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <input type="number" class="form-control" value="{{$kwhcomersile->StandAwal_wbp}}" name="StandAwal_wbp" readonly>
                 <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <input type="number" class="form-control" value="{{$kwhcomersile->StandAkhir_wbp}}" name="StandAkhir_wbp" readonly>
                 <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
      </tr>
      <tr>
          <th scope="col" align="center" class="align-middle">Image First Wbp</th>
        <th scope="col" align="center"  class="align-middle">Image Latest Wbp</th>
    </tr>
      <td scope="col" align="center" class="was-validated align-middle">
        <a href="{{ url('/dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAwal_wbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAwal_wbp) }}" style="width:250px; height:250px;"/>
      </a>

    </td>
    <td scope="col" align="center" class="was-validated align-middle">
        <a href="{{ url('/dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAkhir_wbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAkhir_wbp) }}" style="width:250px; height:250px;"/>
      </a>

    </td>
    <tr>
        <th scope="col" align="center" class="align-middle">Current Usage</th>
  </tr>
  <td>
    <div class="form-group">
        <input type="text" class="form-control" value="{{$kwhcomersile->total}}"  readonly>
         <div class="invalid-feedback">input data sesuai aktual</div>
    </div>
</td>
  </thead>

</table>
@endsection




