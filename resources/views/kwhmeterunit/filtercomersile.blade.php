@extends('layouts.utility')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
      Filter Kwh Comersile
@endsection
@role('Admin|Eng-spv|Finance-Acounting')
  @section('li_tambahan')
        <form id="download-form" action="{{ url('kwhcomersile/export') }}" method="POST">
          @csrf
          <input value="{{$start}}" type="date"name="startdate" id="startdate"class="form-control mr-sm-1 @error('startdate') is-invalid @enderror col-4.5" value="{{old('startdate')}}">
          @error('startdate')<div class="invalid-feedback">{{$message}}</div>@enderror

          <input value="{{$end}}" type="date"name="todate" id="todate"class="form-control mr-sm-1 @error('todate') is-invalid @enderror col-4.5" value="{{old('todate')}}">
          @error('todate')<div class="invalid-feedback">{{$message}}</div>@enderror
            <button type="button" onclick="event.preventDefault();
            document.getElementById('download-form').submit();"><i class="fas fa-download"></i></button>
        </form>

  @endsection
@endrole
@section('main-container')
@section('pagination-title')
    <div class="title">Pencatatan bulanan kwhmeter<span>_Comersile</span></div>
@endsection
@section('action-search')
    /kwhcomersile/cari
  @endsection
<!--end action search -->

<!-- action add -->
@role('Admin|Eng-spv|')
  @section('action-add')

  @endsection

@endrole
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif

@section('body-tabel')
 <div class="card-deck" style="flex: none;">
  @php $no=1; @endphp
  @foreach ($Kwhcomersile as $kwhcomersile)
    <div class="card text-white mb-3" style="max-width: 14rem; flex: none; background-color: #0674a73d;">
      <div class="card-header ">
       <div class="w-100 justify-content-between">
         <div class="d-flex w-100 justify-content-between">
          <h6 style="color: #07ef3c; font-weight: 900;">{{$no++}}</h6>
@role('Admin|Eng-spv|Eng-teknisi')
          <form action="/kwhcomersile/add/{{$kwhcomersile->id}}" method="get" >
          @csrf
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addkwhcomersile-{{$kwhcomersile->id}}">Add</button>
          </form>
@endrole
        </div>
          <h5 align ="align-center">{{$kwhcomersile->Unit}}</h5>
        </div>
        <div class="card-footer bg-transparent border-success"></div>
      </div>
      {{-- <div class="card-body " style="padding: 1px;">
        <div class="d-flex w-100 justify-content-between " >
          <h6 class="mb-1">Serial No. </h6>
          <h6 class="mb-1 " align="align-middle">{{$kwhcomersile->NoSeri}}</h6>
        </div>
        <div class="d-flex w-100 justify-content-between">
          <h6 class="mb-1">Power installed. </h6>
          <h6 class="mb-1">{{$kwhcomersile->Daya}}</h6>
        </div>
        <div class="d-flex w-100 justify-content-between">
          <h6 class="mb-1">Faktor Kali. </h6>
          <h6 class="mb-1">{{$kwhcomersile->Faktor_kali}}</h6>
        </div>

        <div class="d-flex w-100 justify-content-between">
          <h6 class="mb-1">Hand over.</h6>
          <h6 class="mb-1">{{$kwhcomersile->TanggalBAST}}</h6>
        </div>
        <div class="d-flex w-100 justify-content-between">
          <h6 class="mb-1">Created.</h6>
          <h6 class="mb-1">{{($kwhcomersile->created_at)->format('d, M Y')}}</h6>
        </div>
        <div class="card-footer bg-transparent border-success"></div>

        <div class="d-flex w-100 justify-content-between">
          <h6 class="mb-1">Start WBP.</h6>
          <h6 class="mb-1">End WBP.</h6>

        </div>
        <div class="d-flex w-100 justify-content-around">
          <h6 class="mb-1">{{$kwhcomersile->StandAwal_wbp}}</h6>
          <h6 class="mb-1">{{$kwhcomersile->StandAkhir_wbp}}</h6>
        </div>
        <div class="d-flex justify-content-around">
          <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_wbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_wbp) }}" style="width:70px; height:70px;"/>
          </a>

          <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_wbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_wbp) }}" style="width:70px; height:70px;"/>
          </a>
        </div>

      <div class="card-footer bg-transparent border-success"></div>

        <div class="d-flex justify-content-around">
          <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_lwbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_lwbp) }}" style="width:80px; height:80px;"/>
          </a>

          <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_lwbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_lwbp) }}" style="width:80px; height:80px;"/>
          </a>
        </div>
        <div class="d-flex w-100 justify-content-around">
          <h6 class="mb-1">Start</h6>
          <h6 class="mb-1">End</h6>
        </div>
        <div class="d-flex w-100 justify-content-around">
          <h6 class="mb-1">LWBP.</h6>
          <h6 class="mb-1">LWBP.</h6>
        </div>
        <div class="d-flex w-100 justify-content-around">
          <h6 class="mb-1">{{$kwhcomersile->StandAwal_lwbp}}</h6>
          <h6 class="mb-1">{{$kwhcomersile->StandAkhir_lwbp}}</h6>
        </div>

      </div>
      <div class="card-footer bg-transparent border-success">Current Usage .{{$kwhcomersile->StandAkhir-$kwhcomersile->StandAwal}}</div> --}}
@role('Admin|Eng-spv|')
 <!-- jika unit lebih dari 1 pencatatan antara date range maka tombol none aktive -->
      <div class="card-footer bg-transparent border-success">
          <div class="d-flex justify-content-around">

            <form action="/kwhcomersile/edit/{{$kwhcomersile->id}}" method="get" >
            @csrf
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editkwhcomersile-{{$kwhcomersile->id}}">Edit</button>
            </form>

            <form action="/kwhcomersile/delete/{{$kwhcomersile->id}}" method="post" class="d-inline " >

              @method('delete')
            @csrf
            <li><button type="submit" class="btn btn-danger" onclick="return confirm ('are you sure?');">Delete</button></li>
            </form>

          </div>
      </div>
@endrole
      {{-- <div class="card-footer bg-transparent border-success">Post By. {{$kwhcomersile->teknisi}}</div> --}}
    </div>

@endforeach
</div>

@foreach ($Kwhcomersile as $kwhcomersile)
<!-- modal add bulanan kwh comersile -->
  <div class="modal fade" id="addkwhcomersile-{{$kwhcomersile->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color: #1f1f1ef0">
        <div class="modal-header text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Add Kwh Meter Comersile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/kwhcomersile/add" method="post" class="d-inline offset-md-5" enctype="multipart/form-data">
          @csrf
            <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
            <input type="hidden" class="custom-file-input" name="GambarAwal_lwbp" value="{{$kwhcomersile->GambarAkhir_lwbp}}">
            <input type="hidden" class="custom-file-input" name="GambarAwal_wbp" value="{{$kwhcomersile->GambarAkhir_wbp}}">
            <input type="hidden" class="custom-file-input" name="TanggalBAST" value="{{$kwhcomersile->TanggalBAST}}">

      <div class="d-flex w-100 justify-content-between">
            <div class="form-group was-validated">
              <label class="text-white" for="unit">Unit</label>
              <input id="unit" type="text" class="form-control @error('Unit') is-invalid @enderror" name="Unit" required value="{{$kwhcomersile->Unit}}" readonly>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>

            <div class="form-group was-validated">
              <label class="text-white" for="NoSeri">Serial No.</label>
              <input id="NoSeri" type="text" class="form-control @error('NoSeri') is-invalid @enderror"  name="NoSeri" required value="{{$kwhcomersile->NoSeri}}" readonly>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
      </div>

      <div class="d-flex w-100 justify-content-between">
            <div class="form-group was-validated">
              <div class="form-group was-validated">
                <label class="text-white" for="Daya" class="font-weight-bold">Power Installed</label>
               <input type="text" id="Daya" class="form-control @error('Daya') is-invalid @enderror"name="Daya" value="{{$kwhcomersile->Daya}}" required readonly>
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
            </div>

            <div class="form-group was-validated">
              <label class="text-white" for="Faktor_kali" class="font-weight-bold">Faktor Kali</label>
               <input type="text" id="Faktor_kali" class="form-control @error('Faktor_kali') is-invalid @enderror" name="Faktor_kali" value="{{ $kwhcomersile->Faktor_kali}}" required readonly>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
      </div>


            <div class="form-group was-validated">
              <label class="text-white" for="StandAwal_wbp" class="font-weight-bold">Start Wbp</label>
               <input type="text" id="StandAwal_wbp" class="form-control @error('StandAwal_wbp') is-invalid @enderror" value="{{ $kwhcomersile->StandAkhir_wbp}}" name="StandAwal_wbp" required readonly>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
          <div class="d-flex w-100 justify-content-between">
            <div class="form-group was-validated">
              <label class="text-white" for="StandAkhir_wbp" class="font-weight-bold">end Wbp (elec 1)</label>
               <input type="text" id="StandAkhir_wbp" class="form-control @error('StandAkhir_wbp') is-invalid @enderror" value="{{ old('StandAkhir_wbp') }}" placeholder="Stand Akhir wbp" name="StandAkhir_wbp" required autocomplete="off">
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>


            <div class="form-group was-validated">
              <label class="text-white" for="GambarAkhir_wbp">Image Wbp</label>
              <input id="GambarAkhir_wbp" type="file" class="form-control @error('GambarAkhir_wbp') is-invalid @enderror" placeholder="GambarAkhir_wbp" name="GambarAkhir_wbp" required autocomplete="off" value="{{ old('GambarAkhir_wbp') }}">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
          </div>

            <div class="form-group was-validated">
              <label class="text-white" for="StandAwal_lwbp" class="font-weight-bold">Start Lwbp</label>
               <input type="text" id="StandAwal_lwbp" class="form-control @error('StandAwal_lwbp') is-invalid @enderror" value="{{ $kwhcomersile->StandAkhir_lwbp }}" name="StandAwal_lwbp" required readonly>
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
          <div class="d-flex w-100 justify-content-between">
            <div class="form-group was-validated">
              <label class="text-white" for="StandAkhir_lwbp" class="font-weight-bold">End Lwbp (elec 2)</label>
               <input type="text" id="StandAkhir_lwbp" class="form-control @error('StandAkhir_lwbp') is-invalid @enderror" value="{{ old('StandAkhir_lwbp') }}" placeholder="Stand Akhir Lwbp" name="StandAkhir_lwbp" required autocomplete="off">
                <div class="invalid-feedback">input data sesuai aktual</div>
            </div>


            <div class="form-group was-validated">
              <label class="text-white" for="GambarAkhir_lwbp">Image lwbp</label>
              <input id="GambarAkhir_lwbp" type="file" class="form-control @error('GambarAkhir_lwbp') is-invalid @enderror" placeholder="GambarAkhir_lwbp" name="GambarAkhir_lwbp" required autocomplete="off" value="{{ old('GambarAkhir_lwbp') }}">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
<!-- end modal add kwh comersile -->
<!-- Modal edit kwh komersile-->
@foreach ($Kwhcomersile as $result => $kwhcomersile)
              <div class="modal fade" id="editkwhcomersile-{{$kwhcomersile->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document" >
                  <div class="modal-content" style="background-color: #1f1f1ef0;">
                    <div class="modal-header">
                      <h5 class="modal-title text-white" id="staticBackdropLabel">Update Kwhmeter Comersile</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-white" style="background-color: #1f1f1ef0;">
                      <form method="post" action="/kwhcomersile/edit/{{$kwhcomersile->id}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="Gambarlamaawal_lwbp" value="{{$kwhcomersile->GambarAwal_lwbp}}">
                        <input type="hidden" name="Gambarlamaakhir_lwbp" value="{{$kwhcomersile->GambarAkhir_lwbp}}">
                        <input type="hidden" name="Gambarlamaawal_wbp" value="{{$kwhcomersile->GambarAwal_wbp}}">
                        <input type="hidden" name="Gambarlamaakhir_wbp" value="{{$kwhcomersile->GambarAkhir_wbp}}">
                        <input type="hidden" name="teknisi" value="{{$kwhcomersile->teknisi}}">
                        <div class="form-group">
                            <label for="ho">Hand Over</label>
                            <input id="ho" type="date" class="form-control" name="TanggalBAST" value="{{$kwhcomersile->TanggalBAST}}" required>
                            <div class="invalid-feedback">pilih tanggal sesuai aktual</div>
                        </div>
                        <div class="d-flex w-100 justify-content-between">
                          <div class="form-group">
                            <label for="unit">Unit</label>
                           <input id="unit" type="text" class="form-control"  name="Unit"required autocomplete="off" value="{{$kwhcomersile->Unit}}">
                            <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>

                          <div class="form-group">
                          <label for="noseri">Serial No.</label>
                           <input id="noseri" type="text" class="form-control" name="NoSeri" value="{{$kwhcomersile->NoSeri}}" required>
                            <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>
                        </div>

                        <div class="d-flex w-100 justify-content-between">
                          <div class="form-group">
                            <label for="start">Power Installed</label>
                             <input id="start" type="text" class="form-control" name="Daya" value="{{$kwhcomersile->Daya}}" required>
                              <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>

                          <div class="form-group">
                            <label for="end">Multipication Faktor</label>
                             <input id="end" type="number" class="form-control" name="Faktor_kali" value="{{$kwhcomersile->Faktor_kali}}" required>
                            <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>

                        </div>

                        <div class="d-flex w-100 justify-content-between">
                          <div class="form-group">
                            <label for="start">Start WBP</label>
                             <input id="start" type="number" class="form-control" name="StandAwal_wbp" value="{{$kwhcomersile->StandAwal_wbp}}" required>
                              <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>

                          <div class="form-group">
                            <label for="end">End WBP</label>
                             <input id="end" type="number" class="form-control" name="StandAkhir_wbp" value="{{$kwhcomersile->StandAkhir_wbp}}" required>
                            <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>

                        </div>

                        <div class="d-flex w-100 justify-content-between">
                            <div align="center">
                              <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_wbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                              <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_wbp) }}" style="width:80px; height:80px;margin-right: 70px;"/>
                            </a>
                            <div class="form-group was-validated">
                              <input  type="file" class="form-control @error('GambarAwal_wbp') is-invalid @enderror" placeholder="GambarAwal_wbp" name="GambarAwal_wbp"  autocomplete="off" value="{{ $kwhcomersile->GambarAwal_wbp}}">
                              @error('GambarAwal_wbp')
                              <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
                              @enderror
                            </div>
                            </div>
                            <div align="center">
                              <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_wbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                              <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_wbp) }}" style="width:80px; height:80px;"/>
                            </a>
                            <div class="form-group was-validated">
                              <input  type="file" class="form-control @error('GambarAkhir_wbp') is-invalid @enderror" placeholder="GambarAkhir_wbp" name="GambarAkhir_wbp"  autocomplete="off" value="{{ $kwhcomersile->GambarAkhir_wbp}}">
                              @error('GambarAkhir_wbp')
                              <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
                              @enderror
                            </div>
                            </div>
                        </div>

                        <div class="d-flex w-100 justify-content-between">
                          <div class="form-group">
                            <label for="start">Start LWBP</label>
                             <input id="start" type="number" class="form-control" name="StandAwal_lwbp" value="{{$kwhcomersile->StandAwal_lwbp}}" required>
                              <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>

                          <div class="form-group">
                            <label for="end">End LWBP</label>
                             <input id="end" type="number" class="form-control" name="StandAkhir_lwbp" value="{{$kwhcomersile->StandAkhir_lwbp}}" required>
                            <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>

                        </div>

                        <div class="d-flex w-100 justify-content-between">
                            <div align="center">
                              <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_lwbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                              <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAwal_lwbp) }}" style="width:80px; height:80px;margin-right: 70px;"/>
                            </a>
                            <div class="form-group was-validated">
                              <input  type="file" class="form-control @error('GambarAwal_lwbp') is-invalid @enderror" placeholder="GambarAwal_lwbp" name="GambarAwal_lwbp"  autocomplete="off" value="{{ $kwhcomersile->GambarAwal_lwbp}}">
                              @error('GambarAwal_lwbp')
                              <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
                              @enderror
                            </div>
                            </div>
                            <div align="center">
                              <a href="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_lwbp) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                              <img src="{{ url('/dataIMG_kwhcomersile/'.$kwhcomersile->GambarAkhir_lwbp) }}" style="width:80px; height:80px;"/>
                            </a>
                            <div class="form-group was-validated">
                              <input  type="file" class="form-control @error('GambarAkhir_lwbp') is-invalid @enderror" placeholder="GambarAkhir_lwbp" name="GambarAkhir_lwbp"  autocomplete="off" value="{{ $kwhcomersile->GambarAkhir_lwbp}}">
                              @error('GambarAkhir_lwbp')
                              <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
                              @enderror
                            </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">

                      <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
@endforeach
<!-- end Modal edit kwh komersile-->

<!-- modal info -->
<div class="modal fade info" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-header" style="background-color: #00ced1;">
      <h2 class="modal-title text-white" id="staticBackdropLabel">Tahapan Pencatatan Bulanan kwh Comersile</h2>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-content text-white" style="background-color: #1f1f1ef0">
      <h3>1. Pilih start date tanggal 21 di bulan lalu dan tanggal 20 di bulan sekarang</h3>
      <h3>2. Klik Button Fillter</h3>
      <h3>3. Pada tampilan pencatatan bulanan klik button Add untuk melakukan pencatatan bulanan</h3>
      <h3>4. Input Foto kwh sesuai aktual</h3>
      <h3>5. Input angka stand akhir LWBP(ELEC 2) dan WBP (ELEC 1) dengan 1 angka di belakang koma (gunakan tanda titik untuk mengganti koma) sesuai aktual</h3>
      <h3>6. Klik button Save</h3>
      <h3>Note: Upload data akan gagal secara otomatis jika data sudah di lakukan penginputan dan akan muncul pemberitahuan di pojok kanan atas sesuai status</h3>
    </div>
  </div>
</div>
<!--end modal info -->
@endsection
@endsection

@section('tambahan_script')


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
