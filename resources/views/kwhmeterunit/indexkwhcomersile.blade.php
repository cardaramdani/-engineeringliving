@extends('layouts.master')
@section('tambahan_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- MULAI STYLE CSS -->


    @endsection
    @section('title')
          KWH Comersile
    @endsection

    @section('main-container')

    <!-- MULAI CONTAINER -->
    <div class="panel">
        <div class="row">
            <div class="col-md-8">
                <h1 style="font-weight: bold; margin-left: 15px;">ELECTRICITY COMERSILE</h1>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn-modal-info btn btn-secondary" data-toggle="modal" data-target=".info" title="Tahapan Catat Bulanan" data-placement="left"><i class="fas fa-info"></i>nfo</button>
                @role('Admin|Fa|Eng-spv|')
                <button type="button" class="btn-create-data btn btn-secondary " id="tombol-tambah">Create New Data</button>
                @endrole
            </div>
        </div>
        <div class="row input-daterange">
            <div class="col-md-4">
                <input type="text" name="from_date" id="from_date" class="form-control" placeholder="Start Date" readonly />
            </div>
            <div class="col-md-4">
                <input type="text" name="to_date" id="to_date" class="form-control" placeholder="End Date" readonly />
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" name="filter" id="filter" class="btn-filter btn btn-primary">Filter</button>
                <button type="button" name="refresh" id="refresh" class="btn-refresh btn btn-default" ><img src="/assets/icons/Icon_Reset.png" alt=""> reset</button>
                @role('Admin|Fa|Eng-spv|')
                <button type="button" name="export" id="export" class="btn-export btn btn-default" ><i class="fas fa-file-excel"></i>Export</button>
                @endrole
            </div>
        </div>
            <!-- AKHIR DATE RANGE PICKER -->
            <br>
        </div>
    <div class="panel">
        <div class="card-body">
            <!-- MULAI DATE RANGE PICKER -->
            <!-- MULAI TABLE -->
            <table class="table table-striped table-bordered table-sm" id="table_kwhcomersile">
                <thead>
                    <tr>
                        <th >ACTION</th>
                        <th>UNIT</th>
                        <th>SERIAL NO.</th>
                        <th>CREATED</th>
                        <th>START LWBP</th>
                        <th>END LWBP</th>
                        <th>START WBP</th>
                        <th>END WBP</th>
                        <th>CURRENT USAGE</th>
                        {{-- <th>IMAGE</th> --}}
                        @role('Admin|Fa|Eng-spv|')
                        <th width="15%">ACTION</th>
                        @endrole
                    </tr>
                </thead>
            </table>
            <!-- AKHIR TABLE -->
        </div>
        <span id="uploaded_image"></span>
    </div>
    <!-- AKHIR CONTAINER -->

    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <div class="modal fade bd-example-modal-xl" id="tambah-edit-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-judul" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content " style="background-color: #1f1f1ef0; color:#1ab394;">
                <div class="modal-header">
                    <h1 class="modal-title" id="modal-judul"></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit" name="form-tambah-edit"  class="d-inline offset-md-5" enctype="multipart/form-data">
                      <input type="hidden" name="teknisi" id="teknisi">
                      <input type="hidden" name="id" id="id">
                      <input type="hidden"  name="GambarAwal_lwbp" id="GambarAwal_lwbp">
                      <input type="hidden"  name="GambarAwal_wbp" id="GambarAwal_wbp">
                      <input type="hidden"  name="Gambarlama_GambarAwal_lwbp" id="Gambarlama_GambarAwal_lwbp">
                      <input type="hidden"  name="Gambarlama_GambarAwal_wbp" id="Gambarlama_GambarAwal_wbp">
                      <input type="hidden"  name="Gambarlama_GambarAkhir_lwbp" id="Gambarlama_GambarAkhir_lwbp">
                      <input type="hidden"  name="Gambarlama_GambarAkhir_wbp" id="Gambarlama_GambarAkhir_wbp">

                      <div class="d-flex  justify-content-between ">
                        <div class="form-group was-validated col-sm-6 input-daterange">
                            <label for="TanggalBAST">Hand Over date</label>
                            <input id="TanggalBAST" type="text" class="form-control @error('TanggalBAST') is-invalid @enderror" placeholder="Hand Over Date" name="TanggalBAST" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                        </div>

                        <div class="form-group was-validated col-sm-6">
                            <label for="Unit">Unit</label>
                            <input id="Unit" type="text" class="form-control @error('Unit') is-invalid @enderror" placeholder="Unit" name="Unit" required autocomplete="off" value="{{ old('Unit') }}">
                            <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>
                      </div>
                      <div class="d-flex w-100 justify-content-between">
                        <div class="form-group was-validated col-sm-4">
                          <label for="NoSeri">Serial No.</label>
                          <input id="NoSeri" type="text" class="form-control @error('NoSeri') is-invalid @enderror" placeholder="Serial Number" name="NoSeri" required autocomplete="off" value="{{ old('NoSeri') }}">
                          <div class="invalid-feedback">input data sesuai aktual</div>
                        </div>

                        <div class="form-group was-validated col-sm-4">
                            <label for="Daya">Power Installed</label>
                            <input id="Daya" type="text" class="form-control @error('Daya') is-invalid @enderror" placeholder="Daya" name="Daya" required autocomplete="off" value="{{ old('Daya') }}">
                            <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>
                        <div class="form-group was-validated col-sm-4">
                            <label for="Faktor_kali">Multification Factor</label>
                            <input id="Faktor_kali" type="number" class="form-control @error('Faktor_kali') is-invalid @enderror" placeholder="Faktor Kali" name="Faktor_kali" required autocomplete="off" value="{{ old('Faktor_kali') }}">
                            <div class="invalid-feedback">input data sesuai aktual</div>
                            </div>
                      </div>

                      <div class="d-flex w-100 justify-content-between">
                        <div class="form-group was-validated col-sm-4">
                          <label for="StandAwal_lwbp">Start lwbp</label>
                          <input id="StandAwal_lwbp" type="text" class="form-control @error('StandAwal_lwbp') is-invalid @enderror" placeholder="Stand Awal" name="StandAwal_lwbp" required autocomplete="off" value="{{ old('StandAwal_lwbp') }}">
                          <div class="invalid-feedback">input data sesuai aktual</div>
                        </div>

                        <div class="form-group was-validated col-sm-4">
                          <label for="StandAkhir_lwbp">End lwbp</label>
                          <input id="StandAkhir_lwbp" type="text" class="form-control @error('StandAkhir_lwbp') is-invalid @enderror" placeholder="Stand Akhir" name="StandAkhir_lwbp" required autocomplete="off" value="{{ old('StandAkhir_lwbp') }}">
                          <div class="invalid-feedback">input data sesuai aktual</div>
                        </div>

                        <div class="form-group was-validated">
                            <label for="GambarAkhir_lwbp">Image lwbp</label>
                            <input id="GambarAkhir_lwbp" type="file" class="form-control @error('GambarAkhir_lwbp') is-invalid @enderror" placeholder="GambarAkhir_lwbp" name="GambarAkhir_lwbp" multiple autocomplete="off" value="{{ old('GambarAkhir_lwbp') }}">
                            <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>
                      </div>

                      <div class="d-flex w-100 justify-content-between">
                        <div class="form-group was-validated col-sm-4">
                          <label for="StandAwal_wbp">Start wbp</label>
                          <input id="StandAwal_wbp" type="text" class="form-control @error('StandAwal_wbp') is-invalid @enderror" placeholder="Stand Awal" name="StandAwal_wbp" required autocomplete="off" >
                          <div class="invalid-feedback">input data sesuai aktual</div>
                        </div>

                        <div class="form-group was-validated col-sm-4">
                          <label for="StandAkhir_wbp">End lwbp</label>
                          <input id="StandAkhir_wbp" type="text" class="form-control @error('StandAkhir_wbp') is-invalid @enderror" placeholder="Stand Akhir" name="StandAkhir_wbp" required autocomplete="off" value="{{ old('StandAkhir_wbp') }}">
                          <div class="invalid-feedback">input data sesuai aktual</div>
                        </div>

                        <div class="form-group was-validated">
                            <label for="GambarAkhir_wbp">Image wbp</label>
                            <input id="GambarAkhir_wbp" type="file" class="form-control @error('GambarAkhir_wbp') is-invalid @enderror" placeholder="GambarAkhir_wbp" name="GambarAkhir_wbp" multiple autocomplete="off" value="{{ old('GambarAkhir_wbp') }}">
                            <div class="invalid-feedback">input data sesuai aktual</div>
                          </div>
                      </div>


                      <div class="col-sm-offset-6">
                        <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                            value="create">SAVE
                        </button>
                    </div>

                </div>
                    <div class="modal-footer">
                    </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL tambah -->

<!-- modal info -->
<div class="modal fade info" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-header" style="background-color: #00ced1;">
        <h2 class="modal-title text-white" id="staticBackdropLabel">Tahapan Pencatatan Bulanan kwh</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-content text-white" style="background-color: #1f1f1ef0">
        <h3>1. Pilih start date tanggal 21 di bulan lalu dan end date tanggal 20 di bulan sekarang</h3>
        <h3>2. Klik Button Fillter</h3>
        <h3>3. Pada tampilan pencatatan bulanan klik button Add untuk melakukan pencatatan bulanan</h3>
        <h3>4. Input Foto kwh sesuai aktual</h3>
        <h3>5. Input angka stand akhir sesuai aktual</h3>
        <h3>6. Klik button Save</h3>
        <h3>Note: Upload data akan gagal secara otomatis jika data sudah di lakukan penginputan dan akan muncul pemberitahuan di pojok kanan atas sesuai status</h3>
      </div>
    </div>
  </div>
  <!--end modal info -->

    @endsection

    <!-- AKHIR MODAL -->
    @section('tambahan_script')

    <!-- for export all -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
    integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script src="{{URL::to('assets1/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{URL::to('assets1/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- JAVASCRIPT -->
    <script>
        //CSRF TOKEN PADA HEADER
        //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
        $(document).ready(function () {
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("ini-collapse");
            });

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
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,

            });

            $('.tanggalBAST').datepicker({
                todayBtn: 'linked',
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });

            $('#filter').click(function () {
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $('#table_kwhcomersile').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });

            $('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_kwhcomersile').DataTable().destroy();
                load_data();
            });

            $('#export').click(function (e) {
                e.preventDefault();
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $.ajax({
                        data: {from_date:from_date, to_date:to_date}, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('kwhcomersile.export') }}", //url simpan data
                        type: "GET", //karena simpan kita pakai method POST
                        dataType: 'json',
                        complete:function(data){
                            location.href="/kwhcomersile/export?"+"from_date="+from_date+"&"+"to_date="+to_date;
                            }
                    });
                } else {
                    alert('Both Date is required');
                }
            });
            $('body').on('click', '.view', function () {
                event.preventDefault();
            var data_id = $(this).data('id');
                var url = "/kwhcomersile/view/"+data_id;
                location.replace(url);
            });
            //LOAD DATATABLE
            //script untuk memanggil data json dari server dan menampilkannya berupa datatable
            //load data menggunakan parameter tanggal dari dan tanggal hingga
            function load_data(from_date = '', to_date = '') {
                $('#table_kwhcomersile').DataTable({
                    processing: true,
                    serverSide: true, //aktifkan server-side
                    ajax: {
                        url: "{{ route('kwhcomersile.index') }}",
                        type: 'GET',
                        data:{from_date:from_date, to_date:to_date}
                        //jangan lupa kirim parameter tanggal
                    },

                    columns: [
                        {
                            data: 'action1',
                            name: 'action'
                        },
                        {
                            data: 'Unit',
                            name: 'Unit'
                        },
                        {
                            data: 'NoSeri',
                            name: 'NoSeri'
                        },

                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'StandAwal_lwbp',
                            name: 'StandAwal_lwbp'
                        },
                        {
                            data: 'StandAkhir_lwbp',
                            name: 'StandAkhir_lwbp'
                        },
                        {
                            data: 'StandAwal_wbp',
                            name: 'StandAwal_wbp'
                        },

                        {
                            data: 'StandAkhir_wbp',
                            name: 'StandAkhir_wbp'
                        },
                        {
                            data: 'total',
                            name: 'total'
                        },
                        // {
                        //     data: 'GambarAkhir',
                        //     name: 'GambarAkhir',
                        //     render: function(data, type, full, meta){
                        //     // return "<img src={{ URL::to('/') }}/dataIMG_kwhcomersile/" + data + " width='70' class='img-thumbnail MagicZoom' rel='zoom-id:zoom;opacity-reverse:true;' />";
                        //     return "<a href={{  URL::to('/') }}/dataIMG_kwhcomersile/" + data + " width='70' title='click to ZOOM' class='MagicZoom img-thumbnail' rel='zoom-id:zoom;opacity-reverse:true;'>" +
                        //         "<img width='70' height='70' src={{ URL::to('/') }}/dataIMG_kwhcomersile/" + data + "></a>";
                        //     },
                        //     orderable: false
                        // },
                        @role('Admin|Fa|Eng-spv|')
                        {
                            data: 'action2',
                            name: 'action'
                        },
                        @endrole

                    ],
                    order: [
                        [0, 'decs']
                    ],

                });
            }
        });

        //TOMBOL TAMBAH DATA
        //jika tombol-tambah diklik maka
        $('#tombol-tambah').click(function () {
            // $('#button-simpan').val("create-post"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("ADD KWH UNIT"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
            $("#TanggalBAST").prop("readonly",false);
            $("#Unit").prop("readonly",false);
            $("#NoSeri").prop("readonly",false);
            $("#Daya").prop("readonly",false);
            $("#Faktor_kali").prop("readonly",false);
            $("#StandAwal_lwbp").prop("readonly",false);
            $("#StandAwal_wbp").prop("readonly",false);
        });

        //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
        //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
        //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
            $('#form-tambah-edit').on('submit', function(event){
            event.preventDefault();
            $.ajax({
            url:"{{ route('kwhcomersile.store') }}",
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {

            $('#form-tambah-edit').trigger("reset"); //form reset
            $('#tambah-edit-modal').modal('hide'); //modal hide
            $('#tombol-simpan').html('Simpan'); //tombol simpan
            var oTable = $('#table_kwhcomersile').dataTable(); //inialisasi datatable
                oTable.fnDraw(false); //reset datatable
            if(data.success){
                iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                title: 'Data Berhasil Disimpan',
                message: '{{ Session('
                success ')}}',
                position: 'topRight'
                });
            }
            if(data.errors)
            {
                iziToast.error({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                title: data.errors,
                message: '{{ Session('
                error ')}}',
                position: 'topRight',
            });
            }

            },
            error:function (data) {

            }
            })
            });


        //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('kwhcomersile/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("Edit kwh comersile");
                $('#btn-name').html("update"); //valuenya tambah
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                $("#TanggalBAST").prop("readonly",false);
                $("#Unit").prop("readonly",false);
                $("#NoSeri").prop("readonly",false);
                $("#Daya").prop("readonly",false);
                $("#Faktor_kali").prop("readonly",false);
                $("#StandAwal_lwbp").prop("readonly",false);
                $("#StandAwal_wbp").prop("readonly",false);
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data_id);
                $('#teknisi').val(data.teknisi);
                $('#Gambarlama_GambarAwal_lwbp').val(data.GambarAwal_lwbp);
                $('#Gambarlama_GambarAwal_wbp').val(data.GambarAwal_wbp);
                $('#Gambarlama_GambarAkhir_lwbp').val(data.GambarAkhir_lwbp);
                $('#Gambarlama_GambarAkhir_wbp').val(data.GambarAkhir_wbp);
                $('#TanggalBAST').val(data.TanggalBAST);
                $('#NoSeri').val(data.NoSeri);
                $('#Daya').val(data.Daya);
                $('#Unit').val(data.Unit);
                $('#Faktor_kali').val(data.Faktor_kali);
                $('#StandAwal_lwbp').val(data.StandAwal_lwbp);
                $('#StandAkhir_lwbp').val(data.StandAkhir_lwbp);
                $('#StandAwal_wbp').val(data.StandAwal_wbp);
                $('#StandAkhir_wbp').val(data.StandAkhir_wbp);


        })
    });

    //TOMBOL add DATA bulanan DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        $('body').on('click', '.add', function () {
            var data_id = $(this).data('id');
            $.get('kwhcomersile/edit/' + data_id,
            function (data) {
                $('#id').val(''); //valuenya menjadi kosong
                $('#teknisi').val(''); //valuenya menjadi kosong
                $('#Gambarlama_GambarAkhir_lwbp').val(''); //valuenya menjadi kosong
                $('#Gambarlama_GambarAkhir_wbp').val(''); //valuenya menjadi kosong
                $('#StandAkhir_lwbp').val(''); //valuenya menjadi kosong
                $('#StandAkhir_wbp').val(''); //valuenya menjadi kosong
                $('#modal-judul').html("Add Monthly KWH Comersile");
                $('#btn-name').html("save"); //valuenya tambah
                $('#tombol-simpan').val("add");
                $('#tambah-edit-modal').modal('show');
                $("#TanggalBAST").prop("readonly",true);
                $("#Unit").prop("readonly",true);
                $("#NoSeri").prop("readonly",true);
                $("#Daya").prop("readonly",true);
                $("#Faktor_kali").prop("readonly",true);
                $("#StandAwal_lwbp").prop("readonly",true);
                $("#StandAwal_wbp").prop("readonly",true);
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas

                $('#Gambarlama_GambarAwal_lwbp').val(data.GambarAkhir_lwbp);
                $('#Gambarlama_GambarAwal_wbp').val(data.GambarAkhir_wbp);
                $('#Unit').val(data.Unit);
                $('#TanggalBAST').val(data.TanggalBAST);
                $('#NoSeri').val(data.NoSeri);
                $('#Daya').val(data.Daya);
                $('#Faktor_kali').val(data.Faktor_kali);
                $('#StandAwal_lwbp').val(data.StandAkhir_lwbp);
                $('#StandAwal_wbp').val(data.StandAkhir_wbp);
        })
    });
        //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');

        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "kwhcomersile/delete/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Deleting'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#tombol-hapus').text('Delete'); //set text untuk tombol hapus
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_kwhcomersile').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    if(data.success){
                            iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                            title: 'Data Berhasil Dihapus',
                            message: '{{ Session('
                            success ')}}',
                            position: 'topRight'
                            });
                        }
                    if(data.errors)
                        {

                            iziToast.error({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                            title: data.errors,
                            message: '{{ Session('
                            error ')}}',
                            position: 'topRight'
                        });
                        }
                    if(data.warning)
                        {
                            iziToast.info({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                            title: data.warning,
                            message: '{{ Session('
                            warning ')}}',
                            position: 'topRight'
                        });
                        }
                },
                error: function(data){
                }
            })
        });

    </script>

    <!-- JAVASCRIPT -->
    @endsection

