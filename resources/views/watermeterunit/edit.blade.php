@extends('layouts.crud')
@section('title')
      Update Watermeter Unit
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
      <h1 align="center" class="my-5">Form Edit Data water meter unit</h1>
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
<table class="table table-bordered table-striped table-sm">
  <thead class="fixed-header thead-dark" align="center">
<tr>
    <th scope="col" align="center" >Unit</th>
    <th scope="col" align="center">No Seri</th>
    <th scope="col" align="center">Stand Awal</th>
    <th scope="col" align="center">Gambar Awal</th>
    <th scope="col" align="center">Stand Akhir</th>
    <th scope="col" align="center">Gambar Akhir</th>
    <th scope="col" align="center">Tanggal BAST</th>
</tr>
</thead>
  <form method="post" action="/watermeterunit/edit/{{$watermeterunit->id}}" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <input type="hidden" id="Gambarlama1"  name="Gambarlama1" value="{{$watermeterunit->GambarAwal}}">
    <input type="hidden" id="Gambarlama2"  name="Gambarlama2" value="{{$watermeterunit->GambarAkhir}}">
    <input type="hidden" value="" id="total" name="TotalPakai">
    <input type="hidden" id="teknisi"  name="teknisi" value="{{$watermeterunit->teknisi}}">
    
    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
         <input type="text" class="form-control" value="{{$watermeterunit->Unit}}" name="Unit" required autocomplete="off">
        <div class="invalid-feedback">input data sesuai aktual</div>
    </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
         <input type="text" class="form-control" value="{{$watermeterunit->NoSeri}}" name="NoSeri"required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
         <input type="number" class="form-control" value="{{$watermeterunit->StandAwal}}" name="StandAwal" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
      <a href="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAwal) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAwal) }}" style="width:50px; height:50px;"/>
      </a>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
         <input type="number" class="form-control" name="StandAkhir" value="{{$watermeterunit->StandAkhir}}" required>
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
      <a href="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
        <img src="{{ url('/dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir) }}" style="width:50px; height:50px;"/>
      </a>
      <div class="custom-file">
            <input type="file" class="custom-file-input" name="GambarAkhir" >
            <label class="custom-file-label @error('GambarAkhir') is-invalid @enderror" align="left" for="GambarAkhir">Upload gambar. . .</label>
            @error('GambarAkhir')
        <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
        @enderror
    </div>
    </td>

      

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
            <input type="date" class="form-control" name="TanggalBAST" value="{{$watermeterunit->TanggalBAST}}">
        <div class="invalid-feedback">pilih tanggal sesuai aktual</div>
    </div>
    </td>
    <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit">Update</button>
  
  </form>
  </tbody>
  </table>
@endsection


    