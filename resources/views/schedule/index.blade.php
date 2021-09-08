

@extends('layouts.master')
    @section('tambahan_link')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @endsection

    @section('title')
        Schedule
    @endsection

    @section('li_tambahan')
    @endsection

@section('main-container')
    @section('pagination-title')
        <div class="title">Schedule<span>_Engineering</span></div>
    @endsection

    {{-- @section('search')
    <form class="search-box" action="{{url('schedule/cari')}}" method="post">
        @csrf
        <input type="text" name="#" value="" placeholder="Search">
        <button class="search-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>
    @endsection --}}

    @section('info')
        <li>
            <button type="button" class="btn-info" data-toggle="modal" data-target=".info" title="Schedule Info" data-placement="left"><i class="fas fa-info"></i></button>
        </li>
    @endsection

    
        @section('add')
    @role('Admin|Eng-spv|Admin-GA')
            <li>
                <button type="button" class="btn-add" data-toggle="modal" data-target="#add">
                    <i class="fas fa-plus-square"></i>
                </button>
                <!-- <a href=""onclick="event.preventDefault();
                document.getElementById('staticBackdrop').submit();"><i class="fas fa-plus-square"></i></a> -->
            </li>
            @endrole
        @endsection
  
    <!--end pagination dan titel -->




    @if (session('status'))
    <div class="alert-success">
    <span> {{ session('status') }}</span>
    </div>
    @endif

    @role('Admin|Eng-spv|Admin-GA')
    @endrole

    @section('body-tabel')

    <br><br>
        <div class="card" align="center">
            <h3 style="color: red">{{$Schedule->nama_bulan}} {{$Schedule->nama_tahun}}</h3>
            <iframe src="/data_schedule/{{$Schedule->file}}" width="100%" height="400px" ></iframe>
        </div>

    @endsection




  <!-- Modal add role-->
    <div class="modal fade" id="add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Schedule Kerja</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                            <form method="post" action="/schedule/add" enctype="multipart/form-data" >
                            @csrf
                            <div class="input-group mb-3 was-validated">
                            <input type="text" class="form-control @error('nama_bulan') is-invalid @enderror" name="nama_bulan" value="{{ old('nama_bulan') }}" required placeholder="Input bulan" aria-label="Recipient's bulan" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text " id="basic-addon2" >Bulan</span>
                                <div class="invalid-feedback">input data sesuai aktual</div>
                            </div>
                            </div>

                            <div class="input-group mb-3 was-validated">
                            <input type="text" class="form-control @error('nama_tahun') is-invalid @enderror" name="nama_tahun" value="{{ old('nama_tahun') }}" required placeholder="Input bulan" aria-label="Recipient's bulan" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text " id="basic-addon2" >Tahun</span>
                                <div class="invalid-feedback">input data sesuai aktual</div>
                            </div>
                            </div>

                            <div class="input-group mb-3 was-validated">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Pdf</span>
                            </div>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input @error('file') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="{{ old('file') }}" required name="file">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Gagal upload{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
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
@endsection

@section('tambahan_script')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
