@extends('layouts.crud')
@section('title')
      ADD Kwh comersile
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
      <form action="/kwhcomersile/add" method="post" class="d-inline offset-md-5" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
        <td scope="col" align="center" class=" align-middle">
            <div class="form-group was-validated">
                <label for="TanggalBAST" class="font-weight-bold">Tanggal BAST</label>
                <input id="TanggalBAST" type="date" class="form @error('TanggalBAST') is-invalid @enderror" name="TanggalBAST" value="{{ old('TanggalBAST') }}" required >
            <div class="invalid-feedback">pilih tanggal sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class=" align-middle">
            <div class="form-group was-validated" >
              <label for="Unit" class="font-weight-bold">Unit</label>
             <input id="Unit" type="text" class="form-control @error('Unit') is-invalid @enderror" name="Unit" value="{{ old('Unit') }}" placeholder="No Unit" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group was-validated">
              <label for="NoSeri" class="font-weight-bold">No Seri</label>
             <input type="text" id="NoSeri" class="form-control @error('NoSeri') is-invalid @enderror" placeholder="No Seri" name="NoSeri" value="{{ old('NoSeri') }}" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class="align-middle">
            <div class="form-group was-validated">
              <label for="Daya" class="font-weight-bold">Daya</label>
             <input type="text" id="Daya" class="form-control @error('Daya') is-invalid @enderror" placeholder="Daya" name="Daya" value="{{ old('Daya') }}" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

         <td scope="col" align="center" class="align-middle">
            <div class="form-group was-validated">
              <label for="Faktor_kali" class="font-weight-bold">Faktor Kali</label>
             <input type="text" id="Faktor_kali" class="form-control @error('Faktor_kali') is-invalid @enderror" placeholder="Faktor kali" name="Faktor_kali" value="{{ old('Faktor_kali') }}" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class=" align-middle">
            <div class="form-group was-validated">
              <label for="StandAwal_lwbp" class="font-weight-bold">Stand Awal Lwbp</label>
             <input type="text" id="StandAwal_lwbp" class="form-control @error('StandAwal_lwbp') is-invalid @enderror" value="{{ old('StandAwal_lwbp') }}" placeholder="Stand Awal Lwbp" name="StandAwal_lwbp" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class=" align-middle">
            <div class="form-group was-validated">
              <label for="StandAkhir_lwbp" class="font-weight-bold">Stand Akhir Lwbp</label>
             <input type="text" id="StandAkhir_lwbp" class="form-control @error('StandAkhir_lwbp') is-invalid @enderror" value="{{ old('StandAkhir_lwbp') }}" placeholder="Stand Awal Lwbp" name="StandAkhir_lwbp" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class=" align-middle">
            <div class="custom-file was-validated">
                <input type="file" class="custom-file-input @error('GambarAkhir_lwbp') is-invalid @enderror" name="GambarAkhir_lwbp" id="GambarAkhi_lwbp" value="{{ old('GambarAkhir_lwbp')}}" required autocomplete="off">
                <label class="custom-file-label @error('GambarAkhir_lwbp') is-invalid @enderror" align="left" value="{{ old('GambarAkhir_lwbp')}}" for="GambarAkhir_lwbp">Upload Gambar...</label>
                @error('GambarAkhir_lwbp')
                      <span class="invalid-feedback" role="alert">
                          <strong>Gagal upload{{ $message }}</strong>
                      </span>
                @enderror   
               
          </div>
        </td>

        <td scope="col" align="center" class=" align-middle">
            <div class="form-group was-validated">
              <label for="StandAwal_wbp" class="font-weight-bold">Stand Awal wbp</label>
             <input type="text" id="StandAwal_wbp" class="form-control @error('StandAwal_wbp') is-invalid @enderror" value="{{ old('StandAwal_wbp') }}" placeholder="Stand Awal wbp" name="StandAwal_wbp" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class=" align-middle">
            <div class="form-group was-validated">
              <label for="StandAkhir_wbp" class="font-weight-bold">Stand Akhir wbp</label>
             <input type="text" id="StandAkhir_wbp" class="form-control @error('StandAkhir_wbp') is-invalid @enderror" value="{{ old('StandAkhir_wbp') }}" placeholder="Stand Awal wbp" name="StandAkhir_wbp" required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

        <td scope="col" align="center" class=" align-middle">
            <div class="custom-file was-validated">
                <input type="file" class="custom-file-input @error('GambarAkhir_wbp') is-invalid @enderror" name="GambarAkhir_wbp" id="GambarAkhi_wbp" value="{{ old('GambarAkhir_wbp')}}" required autocomplete="off">
                <label class="custom-file-label @error('GambarAkhir_wbp') is-invalid @enderror" align="left" value="{{ old('GambarAkhir_wbp')}}" for="GambarAkhi_wbp">Upload Gambar...</label>
                @error('GambarAkhir_wbp')
                      <span class="invalid-feedback" role="alert">
                          <strong>Gagal upload{{ $message }}</strong>
                      </span>
                @enderror   
               
          </div>
        </td>


       
                <input type="hidden" class="custom-file-input" value="baruBAST" name="GambarAwal_lwbp" >
                <input type="hidden" class="custom-file-input" value="baruBAST" name="GambarAwal_wbp" >
       
    
        <div class="modal-footer">
          
          <button class="btn-lg btn-primary col-md-12  font-weight-bold"  type="submit">Submit form</button>
        </div>
      </form>
@endsection














