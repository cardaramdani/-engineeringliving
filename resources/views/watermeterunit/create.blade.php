@extends('layouts.crud')
@section('title')
      Watermeter Unit
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')

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
      <form action="/watermeterunit/add" method="post" class="d-inline offset-md-5" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <label for="TanggalBAST" class="font-weight-bold">Tanggal BAST</label>
                <input id="TanggalBAST" type="date" class="form @error('TanggalBAST') is-invalid @enderror" name="TanggalBAST" value="{{ old('TanggalBAST') }}" required >
            <div class="invalid-feedback">pilih tanggal sesuai aktual</div>
            </div>
        </td>
          <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group" >
              <label for="Unit" class="font-weight-bold">Unit</label>
             <input id="Unit" type="text" class="form-control @error('Unit') is-invalid @enderror" name="Unit" value="{{ old('Unit') }}" placeholder="No Unit" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
          <label for="NoSeri" class="font-weight-bold">No Seri</label>
         <input type="text" id="NoSeri" class="form-control @error('NoSeri') is-invalid @enderror" placeholder="No Seri" name="NoSeri" value="{{ old('NoSeri') }}" required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
          <label for="StandAwal" class="font-weight-bold">Stand Awal</label>
         <input type="number" id="StandAwal" class="form-control @error('StandAwal') is-invalid @enderror" value="{{ old('StandAwal') }}" placeholder="Stand Awal" name="StandAwal" required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
          <label for="StandAkhir" class="font-weight-bold">Stand Akhir</label>
         <input type="number" id="StandAkhir" class="form-control @error('StandAkhir') is-invalid @enderror" value="{{ old('StandAkhir') }}" placeholder="Stand Akhir" name="StandAkhir" required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="custom-file">
            <input type="file" class="custom-file-input @error('GambarAkhir') is-invalid @enderror" name="GambarAkhir" id="GambarAkhir" value="{{ old('GambarAkhir')}}" required autocomplete="off">
            <label class="custom-file-label @error('GambarAkhir') is-invalid @enderror" align="left" value="{{ old('GambarAkhir')}}" for="GambarAkhir">Upload Gambar...</label>
            @error('GambarAkhir')
                  <span class="invalid-feedback" role="alert">
                      <strong>Gagal upload{{ $message }}</strong>
                  </span>
            @enderror   
           
      </div>
    </td>

    <td>
            <input type="hidden" class="custom-file-input" value="baruBAST" name="GambarAwal" >
    </td>
    
        <div class="modal-footer">
          
          <button class="btn-lg btn-primary col-md-12  font-weight-bold"  type="submit">Submit form</button>
        </div>
      </form>
@endsection