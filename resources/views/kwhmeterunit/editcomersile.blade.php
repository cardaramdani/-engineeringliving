@extends('layouts.crud')
@section('title')
      Update kwh comersile
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
      <h1 align="center" class="my-5">Form Edit Data kwh meter comersile</h1>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Ooops!</strong> Ada sesuatu yang salah pada proses upload data<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<table class="table table-bordered table-striped">

  <form method="post" action="/kwhcomersile/edit/{{$kwhcomersile->id}}" enctype="multipart/form-data">
    @method('patch')
    @csrf
<thead class="fixed-header thead-dark" align="center">
  <tr>
          <th scope="col" align="center" class="align-middle">Unit</th>
          <th scope="col" align="center" class="align-middle">No Seri</th>
          <th scope="col" align="center" class="align-middle">Daya</th>
          <th scope="col" align="center" class="align-middle">Faktor Kali</th>
      </tr>
      <tr >
        <td scope="col" align="center" class="was-validated align-middle">
          <div class="form-group">
           <input type="text" class="form-control text-center"  value="{{$kwhcomersile->Unit}}" name="Unit">
          <div class="invalid-feedback">input data sesuai aktual</div>
          </div>
        </td>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="text" class="form-control text-center" value="{{$kwhcomersile->NoSeri}}" name="NoSeri">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
              <input type="text" class="form-control text-center" value="{{$kwhcomersile->Daya}}" name="Daya">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center" class="align-middle">
            <div class="form-group was-validated">
             <input type="text" id="Faktor_kali" class="form-control @error('Faktor_kali') is-invalid @enderror text-center" name="Faktor_kali" value="{{$kwhcomersile->Faktor_kali }}" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
      </tr>

      <tr>
        <th scope="col" align="center" colspan="2" class="align-middle">Stand Awal lwbp</th>
        <th scope="col" align="center" colspan="2" class="align-middle">Stand Akhir lwbp (elec 1)</th>
      </tr>
      <tr align="center" class="align-middle">
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="text" class="form-control text-center" value="{{$kwhcomersile->StandAwal_lwbp}}" name="StandAwal_lwbp">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center" class="was-validated align-middle form-check-inline">
            <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_lwbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
              <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_lwbp) }}" style="width:110px; height:90px;"/>
            </a> 
            <div class="custom-file">
              <input type="file" class="custom-file-input col-sm-2" name="GambarAwal_lwbp" id="GambarAwal_lwbp" >
              <label class="custom-file-label @error('GambarAwal_lwbp') is-invalid @enderror col-sm-9" align="left"  for="GambarAwal_lwbp">Update Gambar...</label>@error('GambarAwal_lwbp')
                    <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
                    @enderror   
          </div>

        </td>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="text" class="form-control @error('StandAkhir_lwbp') is-invalid @enderror text-center" value="{{$kwhcomersile->StandAkhir_lwbp }}" name="StandAkhir_lwbp" required>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle form-check-inline">
            <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_lwbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
              <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_lwbp) }}" style="width:110px; height:90px;"/>
            </a>
            <div class="custom-file">
              <input type="file" class="custom-file-input col-sm-2" name="GambarAkhir_lwbp" >
              <label class="custom-file-label @error('GambarAkhir_lwbp') is-invalid @enderror col-sm-9" align="left"  for="GambarAkhir_lwbp">Update Gambar...</label>@error('GambarAkhir_lwbp')
                    <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
                    @enderror   
          </div>
        </td>
      </tr>

      <tr>
        <th scope="col" align="center" colspan="2" class="align-middle">Stand Awal wbp</th>
        <th scope="col" align="center" colspan="2" class="align-middle">Stand Akhir wbp (elec 2)</th>
      </tr>
      <tr>
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="text" class="form-control text-center" value="{{$kwhcomersile->StandAwal_wbp}}" name="StandAwal_wbp" >
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
        <td scope="col" align="center" class="was-validated align-middle form-check-inline">
            <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_wbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
              <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_wbp) }}" style="width:110px; height:90px;"/>
            </a>
            <div class="custom-file">
                  <input type="file" class="custom-file-input col-sm-2" name="GambarAwal_wbp" >
                  <label class="custom-file-label @error('GambarAwal_wbp') is-invalid @enderror col-sm-9" align="left"  for="GambarAwal_wbp">Update Gambar...</label>@error('GambarAwal_wbp')
                        <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
                        @enderror   
          </div>
    </td>
    
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
             <input type="text" class="form-control @error('StandAkhir_wbp') is-invalid @enderror text-center" value="{{$kwhcomersile->StandAkhir_wbp}}" name="StandAkhir_wbp" autofocus required>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle form-check-inline">
            <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_wbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
              <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_wbp) }}" style="width:110px; height:90px;"/>
            </a>
            <div class="custom-file">
              <input type="file" class="custom-file-input col-sm-2" name="GambarAkhir_wbp" >
              <label class="custom-file-label @error('GambarAkhir_wbp') is-invalid @enderror col-sm-9" align="left"  for="GambarAkhir_wbp">Update Gambar...</label>@error('GambarAkhir_wbp')
                    <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
                    @enderror   
          </div>
        </td>
      </tr>

</thead>
    
    <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Submit form</button>
      <input type="hidden"  name="Gambarlama_GambarAwal_lwbp" value="{{$kwhcomersile->GambarAwal_lwbp}}">
      <input type="hidden"  name="Gambarlama_GambarAwal_wbp" value="{{$kwhcomersile->GambarAwal_wbp}}">
      <input type="hidden"  name="Gambarlama_GambarAkhir_lwbp" value="{{$kwhcomersile->GambarAkhir_lwbp}}">
      <input type="hidden"  name="Gambarlama_GambarAkhir_wbp" value="{{$kwhcomersile->GambarAkhir_wbp}}">
      <input type="hidden"  name="teknisi" value="{{$kwhcomersile->teknisi}}">
      <input type="hidden"  name="TanggalBAST" value="{{$kwhcomersile->TanggalBAST}}">
  </form>
</table>
@endsection

    