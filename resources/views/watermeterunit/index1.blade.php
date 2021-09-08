
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
      WaterMeter Unit
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
<!-- pagination dan titel -->

<!--end pagination dan titel -->
<!-- MULAI CONTAINER tabel-->
<div class="container">
<div class="head-wam" style="display: flex; justify-content:space-between;">
    <h1 align="center">watermeterunit</h1>
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
            <table class="table table-striped table-bordered table-sm" id="table_watermeterunit">
                <thead>
                    <tr style="color: #ffd4a3;">
                        {{-- <th>No</th> --}}
                        <th>Unit</th>
                        <th>No Seri</th>
                        <th>Start</th>
                        <th>End</th>
                        <th  >Created</th>
                        <th  >pict</th>
                    @role('Admin|Eng-spv|')
                    <th  width="20%">Actions</th>
                    @endrole
                    </tr>
                </thead>
            </table>
            <!-- AKHIR TABLE -->
        </div>
    </div>
</div>
<!-- AKHIR CONTAINER tabel-->

<!-- end header tabel -->
  @section('body-tabel')

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


@endsection

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
            <input type="hidden" name="teknisi" id="teknisi" >
            <input type="hidden" class="form-control" name="GambarAwal" id="GambarAwal">
            <input type="hidden" name="id" id="id">

            <div class="form-group was-validated">
              <label for="TanggalBAST">Date Hand Over</label>
              <input id="TanggalBAST" type="Date" class="form-control @error('TanggalBAST') is-invalid @enderror" placeholder="TanggalBAST" name="TanggalBAST" required autocomplete="off" value="{{ old('TanggalBAST') }}">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
            <div class="d-flex w-100 justify-content-between">
              <div class="form-group was-validated">
                <label for="Unit">Unit</label>
                <input value="1" id="Unit" type="text" class="form-control @error('Unit') is-invalid @enderror" placeholder="Unit" name="Unit" required autocomplete="off" value="{{ old('Unit') }}">
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>

              <div class="form-group was-validated">
                <label for="NoSeri">Serial No.</label>
                <input value="1" id="NoSeri" type="text" class="form-control @error('NoSeri') is-invalid @enderror" placeholder="Serial Number" name="NoSeri" required autocomplete="off" value="{{ old('NoSeri') }}">
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
            </div>

            <div class="d-flex w-100 justify-content-between">
              <div class="form-group was-validated">
                <label for="StandAwal">Start</label>
                <input value="1" id="StandAwal" type="text" class="form-control @error('StandAwal') is-invalid @enderror" placeholder="Stand Awal" name="StandAwal" required autocomplete="off" value="{{ old('StandAwal') }}">
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>

              <div class="form-group was-validated">
                <label for="StandAkhir">End</label>
                <input value="1" id="StandAkhir" type="text" class="form-control @error('StandAkhir') is-invalid @enderror" placeholder="Stand Akhir" name="StandAkhir" required autocomplete="off" value="{{ old('StandAkhir') }}">
                <div class="invalid-feedback">input data sesuai aktual</div>
              </div>
            </div>

            <div class="form-group was-validated">
              <label for="GambarAkhir">Image</label>
              <input id="GambarAkhir" type="file" class="form-control @error('GambarAkhir') is-invalid @enderror" placeholder="GambarAkhir" name="GambarAkhir" required multiple autocomplete="off" value="{{ old('GambarAkhir') }}">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="tombol-simpan" id="tombol-simpan" value="add">
              <h6 class="btn-name" id="btn-name"></h6>
          </button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- modal info -->
<div class="modal fade info" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-header" style="background-color: #00ced1;">
      <h2 class="modal-title" id="staticBackdropLabel">Tahapan Pencatatan Bulanan Water Meter</h2>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-content text-white" style="background-color: #1f1f1ef0">
      <h3>1. Pilih start date tanggal 21 di bulan lalu</h3>
      <h3>2. Klik Button Fillter</h3>
      <h3>3. Pada tampilan pencatatan bulanan klik button Add untuk melakukan pencatatan bulanan</h3>
      <h3>4. Input Foto watermeter sesuai aktual</h3>
      <h3>5. Input angka stand akhir sesuai aktual</h3>
      <h3>6. Klik button Save</h3>
      <h3>Note: Upload data akan gagal secara otomatis jika data sudah di lakukan penginputan dan akan muncul pemberitahuan di pojok kanan atas sesuai status</h3>
    </div>
  </div>
</div>
<!--end modal info -->

<!-- MULAI MODAL KONFIRMASI DELETE-->
<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: red">Warning!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: black">
                <p><b>Jika menghapus data maka</b></p>
                <p>*data terhapus permanen, apakah anda yakin?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                    Data</button>
            </div>
        </div>
    </div>
</div>
<!-- AKHIR MODAL konfirm delete-->
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

<!-- JAVASCRIPT -->
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
                $('#table_watermeterunit').DataTable().destroy();
                load_data(from_date, to_date);
            } else {
                alert('Both Date is required');
            }
        });
        $('#refresh').click(function () {
            $('#from_date').val('');
            $('#to_date').val('');
            $('#table_watermeterunit').DataTable().destroy();
            load_data();
        });
        //LOAD DATATABLE
        //script untuk memanggil data json dari server dan menampilkannya berupa datatable
        //load data menggunakan parameter tanggal dari dan tanggal hingga
        function load_data(from_date = '', to_date = '') {
            $('#table_watermeterunit').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side
                ajax: {
                    url: "{{ route('watermeterunit.index') }}",
                    type: 'GET',
                    data:{from_date:from_date, to_date:to_date} //jangan lupa kirim parameter tanggal
                },
                columns: [

                    {
                        data: 'Unit',
                        name: 'Unit'
                    },
                    {
                        data: 'NoSeri',
                        name: 'NoSeri'
                    },
                    {
                        data: 'StandAwal',
                        name: 'StandAwal'
                    },
                    {
                        data: 'StandAkhir',
                        name: 'StandAkhir'
                    },
                    {
                        format: 'dd-mm-yyyy',
                        data: 'created_at',

                    },
                    {
                        data: 'GambarAwal',
                        name: 'GambarAwal',
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
            $('#modal-judul').html("Add Water Meter"); //valuenya tambah pegawai baru
            $('#btn-name').html("Save"); //valuenya tambah
            $('#tambah-edit-modal').modal('show'); //modal tampil
            $('#GambarAkhir').attr('type', 'file');
            $('#GambarAkhir').val('GambarAkhir');
            // $('#TanggalBAST').attr('type', 'date');
            // $('#TanggalBAST').val('TanggalBAST');
        });


    //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
    //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
    //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data

    if ($("#form-tambah-edit").length > 0) {
        $("#form-tambah-edit").validate({
            submitHandler: function (form) {
                var actionType = $('#tombol-simpan').val();
                $('#tombol-simpan').html('Sending..');
                $.ajax({
                    data:new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                    url: "{{ route('watermeterunit.store') }}", //url simpan data
                    type: "POST", //karena simpan kita pakai method POST
                    dataType: 'json', //data tipe kita kirim berupa JSON
                    success: function (data) { //jika berhasil
                        function(response) {
                        console.log(response);
                                    }

                        $('#form-tambah-edit').trigger("reset"); //form reset
                        $('#tambah-edit-modal').modal('hide'); //modal hide
                        $('#tombol-simpan').html('Simpan'); //tombol simpan
                        var oTable = $('#table_watermeterunit').dataTable(); //inialisasi datatable
                        oTable.fnDraw(false); //reset datatable
                        iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                            title: 'Data Berhasil Disimpan',
                            message: '{{ Session('
                            success ')}}',
                            position: 'topRight'
                        });
                    },
                    error: function (data) { //jika sukses
                        setTimeout(function () {
                            console.log(data);
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_watermeterunit').dataTable();
                            oTable.fnDraw(false); //reset datatable
                        });
                        iziToast.warning({ //tampilkan izitoast warning
                            title: 'Data Gagal upload',
                            message: '{{ Session('
                            delete ')}}',
                            position: 'topRight'

                        });
                    }
                });
            }
        })
    }
    //TOMBOL EDIT DATA PER unit DAN TAMPIKAN DATA BERDASARKAN ID unit KE MODAL
    //ketika class edit-post yang ada pada tag body di klik maka
    $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('watermeterunit/edit/' + data_id, function (data) {
                $('#modal-judul').html("Edit Water Meter Unit");
                $('#btn-name').html("update"); //valuenya tambah
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                $('#GambarAkhir').attr('type', 'text');
                $('#GambarAkhir').val('GambarAkhir');
                // $('#TanggalBAST').attr('type', 'date');
                // $('#TanggalBAST').val('TanggalBAST');

            //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
            $('#id').val(data.id);
            $('#teknisi').val(data.teknisi);
            $('#Unit').val(data.Unit);
            $('#NoSeri').val(data.NoSeri);
            $('#TanggalBAST').val(data.TanggalBAST);
            $('#StandAwal').val(data.StandAwal);
            $('#StandAkhir').val(data.StandAkhir);
            // $('#created_at').val(data.created_at);
            $('#GambarAwal').val(data.GambarAwal);
            $('#GambarAkhir').val(data.GambarAkhir);

        })
    });
    //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
    $(document).on('click', '.delete', function ()
    {
        dataId = $(this).attr('id');
        $('#konfirmasi-modal').modal('show');
    });
    //jika tombol hapus pada modal konfirmasi di klik maka
    $('#tombol-hapus').click(function () {
        $.ajax({
            url: "watermeterunit/delete/" + dataId, //eksekusi ajax ke url ini
            type: 'delete',
            beforeSend: function () {
                $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
            },
            success: function (data) { //jika sukses
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                    var oTable = $('#table_watermeterunit').dataTable();
                    oTable.fnDraw(false); //reset datatable
                });
                iziToast.info({ //tampilkan izitoast warning
                    title: 'Data Berhasil Dihapus',
                    message: '{{ Session('
                    delete ')}}',
                    position: 'topRight'
                });
            },
            error: function (data) { //jika sukses
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                    var oTable = $('#table_watermeterunit').dataTable();
                    oTable.fnDraw(false); //reset datatable
                });
                iziToast.warning({ //tampilkan izitoast warning
                    title: 'Data Gagal Dihapus',
                    message: '{{ Session('
                    delete ')}}',
                    position: 'topRight'
                });
            }
        })
    });
</script>

<!-- JAVASCRIPT -->

@endsection
