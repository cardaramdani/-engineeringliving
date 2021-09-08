@extends('layouts.master')
@section('tambahan_link')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- MULAI STYLE CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <!-- AKHIR STYLE CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endsection
@section('title')
      Logsheet AMR
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
<div class="head-wam" style="display: flex; justify-content:space-between;">
    <h1 align="center">AMR</h1>
    @role('Admin|Eng-spv|')
    <a href="javascript:void(0)" class="btn btn-info" id="tombol-tambah">Create New Data</a>
    @endrole
</div>
<div class="card">
    <div class="card-body">
        <!-- MULAI DATE RANGE PICKER -->
        <div class="row input-daterange">
            <div class="col-md-4">
                <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date"
                    readonly />
            </div>
            <div class="col-md-4">
                <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date"
                    readonly />
            </div>
            <div class="col-md-4">
                <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                <button type="button" name="refresh" id="refresh" class="btn btn-default" style="color: #ffd4a3;"><img src="/assets/icons/Icon_Reset.png" alt=""> reset</button>

            </div>
        </div>
        <!-- AKHIR DATE RANGE PICKER -->
        <br>
        <!-- MULAI TOMBOL TAMBAH -->

        <br><br>
        <!-- AKHIR TOMBOL -->
        <!-- MULAI TABLE -->
        <table class="table table-striped table-bordered table-sm" id="table_amr">
            <thead>
                <tr style="color: #ffd4a3;">
                    {{-- <th>No</th> --}}
                    <th>Created</th>
                    <th>teknisi</th>
                    <th>shift</th>
                    <th>cosp</th>
                    <th>lwbp</th>
                    <th>wbp</th>
                    <th>total</th>
                    <th>kvarh</th>
                    @role('Admin|Eng-spv|')
                <th  width="20%">Actions</th>
                @endrole
                </tr>
            </thead>
        </table>
        <!-- AKHIR TABLE -->
    </div>
</div>

<!-- Modal add/edit kwhunit-->
<div class="modal fade" id="tambah-edit-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-judul" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color: #1f1f1ef0">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-judul"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-tambah-edit" name="form-tambah-edit"  class="d-inline offset-md-5" enctype="multipart/form-data">
            <input type="hidden" name="teknisi" id="teknisi" value="{{Auth::user()->username}}">
            <input type="hidden" name="id" id="id">

            <div class="form-group was-validated">
              <label for="shift">shift</label>
              <input id="shift" type="text" class="form-control @error('shift') is-invalid @enderror" placeholder="shift" name="shift" required autocomplete="off" value="{{ old('shift') }}">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
            <div class="d-flex w-100 justify-content-between">
              <div class="form-group was-validated">
                <label for="cosp">cosp</label>
                <input id="cosp" type="text" class="form-control @error('cosp') is-invalid @enderror" placeholder="Unit" name="Unit" required autocomplete="off" value="{{ old('Unit') }}">
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>

              <div class="form-group was-validated">
                <label for="lwbp">lwbp</label>
                <input id="lwbp" type="text" class="form-control @error('lwbp') is-invalid @enderror" placeholder="Serial Number" name="NoSeri" required autocomplete="off" value="{{ old('NoSeri') }}">
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
            </div>

            <div class="d-flex w-100 justify-content-between">
              <div class="form-group was-validated">
                <label for="wbp">wbp</label>
                <input id="wbp" type="text" class="form-control @error('wbp') is-invalid @enderror" placeholder="Stand Awal" name="StandAwal" required autocomplete="off" value="{{ old('StandAwal') }}">
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>

              <div class="form-group was-validated">
                <label for="kvarh">kvarh</label>
                <input id="kvarh" type="text" class="form-control @error('kvarh') is-invalid @enderror" placeholder="Stand Akhir" name="StandAkhir" required autocomplete="off" value="{{ old('StandAkhir') }}">
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
            </div>

            <div class="form-group was-validated">
              <label for="penalty">penalty</label>
              <input id="penalty" type="text" class="form-control @error('penalty') is-invalid @enderror" placeholder="GambarAkhir" name="GambarAkhir" required multiple autocomplete="off" value="{{ old('GambarAkhir') }}">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>


        </div>
        <div class="modal-footer">
            <input type="hidden" name="action" id="action" value="Add" />
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="tombol-simpan" id="tombol-simpan" value="add">
              <h6 class="btn-name" id="btn-name"></h6>
          </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
    @section('tambahan_script')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- LIBARARY JS -->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
    integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
    integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>

<!-- MULAI DATEPICKER JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

<!-- AKHIR LIBARARY JS -->

<script>
    //CSRF TOKEN PADA HEADER
    //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //jalankan function load_data diawal agar data ter-load
        load_data();
        //Iniliasi datepicker pada class input
        $('.input-daterange').datepicker({
            todayBtn: 'linked',
            format: 'yyyy-m-d',
            autoclose: true
        });
        $('#filter').click(function () {
            var from_date = $('#from_date').val() ;
            var to_date = $('#to_date').val() ;
            if (from_date != '' && to_date != '') {
                $('#table_amr').DataTable().destroy();
                load_data(from_date, to_date);
            } else {
                alert('Both Date is required');
            }
        });
        $('#refresh').click(function () {
            $('#from_date').val('');
            $('#to_date').val('');
            $('#table_amr').DataTable().destroy();
            load_data();
        });
        //LOAD DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        //load data menggunakan parameter tanggal dari dan tanggal hingga
        function load_data(from_date = '', to_date = '') {
            $('#table_amr').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side
                ajax: {
                    url: "{{ route('amr.index') }}",
                    type: 'GET',
                    data:{from_date:from_date, to_date:to_date} //jangan lupa kirim parameter tanggal
                },
                columns: [

                    {
                        data: 'created_at',
                        name: 'created_at',
                        format: 'dd-mm-yyyy',
                    },
                    {
                        data: 'shift',
                        name: 'shift'
                    },
                    {
                        data: 'teknisi',
                        name: 'teknisi'
                    },
                    {
                        data: 'cosp',
                        name: 'cosp'
                    },
                    {
                        name: 'lwbp',
                        data: 'lwbp',

                    },
                    {
                        data: 'wbp',
                        name: 'wbp',
                    },
                    {
                        data: 'total',
                        name: 'total',
                    },
                    {
                        data: 'kvarh',
                        name: 'kvarh',
                    },
                    @role('Admin|Eng-spv|')
                    {
                        data: 'action',
                        name: 'action'
                    },
                    @endrole
                ],
                order: [
                    [0, 'asc']
                ]
            });
        }
    });
    //TOMBOL TAMBAH DATA
    //jika tombol-tambah diklik maka
    $('#tombol-tambah').click(function () {
            $('#tombol-simpan').val("add"); //valuenya menjadi create-post
            $('#id').val(' '); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Add AMR"); //valuenya tambah pegawai baru
            $('#btn-name').html("Save"); //valuenya tambah
            $('#tambah-edit-modal').modal('show'); //modal tampil

        });


    //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
    //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
    //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data

    $('#sample_form').on('submit', function(event){
  event.preventDefault();
  var action_url = '';

  if($('#action').val() == 'Add')
  {
   action_url = "{{ route('amr.store') }}";
  }

  if($('#action').val() == 'Edit')
  {
   action_url = "";
  }

  $.ajax({
   url: action_url,
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   success:function(data)
   {
    var html = '';
    if(data.errors)
    {
     html = '<div class="alert alert-danger">';
     for(var count = 0; count < data.errors.length; count++)
     {
      html += '<p>' + data.errors[count] + '</p>';
     }
     html += '</div>';
    }
    if(data.success)
    {
     html = '<div class="alert alert-success">' + data.success + '</div>';
     $('#sample_form')[0].reset();
     $('#user_table').DataTable().ajax.reload();
    }
    $('#form_result').html(html);
   }
  });
 });


</script>

    @endsection
