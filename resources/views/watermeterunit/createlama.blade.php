@extends('layouts.crud')
@section('title')
      Add watermeter unit
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
      <h1 align="center" class="my-5">WATERMETER</h1>

<table class="table table-bordered table-striped table-sm">
  <thead class="fixed-header thead-dark" align="center">
    <form method="post" action="/watermeterunit/add" enctype="multipart/form-data">
    @csrf
      <tr>
          <th scope="col" align="center"  class="align-middle">Unit</th>
          <th scope="col" align="center" class="align-middle">Serial No.</th>
        </tr>
      <tr>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
            <input type="text" class="form-control" value="{{$watermeterunit->Unit}}" name="Unit" readonly>
            <div class="invalid-feedback">input data sesuai aktual</div>
            </div>

        </td>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <input type="text" class="form-control" value="{{$watermeterunit->NoSeri}}" name="NoSeri"readonly>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
      </tr>
      <tr>
          <th scope="col" align="center" class="align-middle">Start</th>
          <th scope="col" align="center" class="align-middle">End</th>

      </tr>
      <tr>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <input type="number" class="form-control" value="{{$watermeterunit->StandAwal}}" name="StandAwal" readonly>
                 <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <input type="number" class="form-control" value="{{$watermeterunit->StandAkhir}}" name="StandAwal" readonly>
                 <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
      </tr>
      <tr>
          <th scope="col" align="center" class="align-middle">Image First</th>
        <th scope="col" align="center"  class="align-middle">Image Latest</th>
    </tr>
      <td scope="col" align="center" class="was-validated align-middle">
        <a href="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAwal) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAwal) }}" style="width:250px; height:250px;"/>
      </a>

    </td>
    <td scope="col" align="center" class="was-validated align-middle">
        <a href="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" style="width:250px; height:250px;"/>
      </a>

    </td>
  </thead>


      <input type="hidden" id="unit"  name="GambarAwal" value="{{$watermeterunit->GambarAkhir}}">
      <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
      <input type="hidden" name="TanggalBAST" value="{{$watermeterunit->TanggalBAST}}" >






      <input type="hidden" value="" id="total" name="TotalPakai">

    <!-- <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
            <input type="date" class="form-control" name="TanggalBAST" value="{{$watermeterunit->TanggalBAST}}" readonly>
        <div class="invalid-feedback">pilih tanggal sesuai aktual</div>
        </div>
    </td> -->
    <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Submit form</button>

  </form>
</table>
@endsection




