@extends('layouts.master')
@section('tambahan_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @endsection
    @section('title')
          Booster Pump
    @endsection

    @section('main-container')

    <!-- MULAI CONTAINER -->

    <div class="panel">
        <div class="row">
            <div class="col-md-8">
                <h1 style="font-weight: bold; margin-left: 15px;">BOOSTER PUMP</h1>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                @role('Eng-teknisi|Admin|Eng-spv|')
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

            <!-- MULAI TABLE -->
            <table class="table table-striped table-bordered table-sm" id="table_boosterpump">
                <thead>
                    <tr>
                        <th>CREATED</th>
                        <th>TEKNISI</th>
                        <th>SHIFT</th>
                        @role('Admin|Eng-spv|')
                        <th width="15%">ACTIONS</th>
                        @endrole
                    </tr>
                </thead>
            </table>
            <!-- AKHIR TABLE -->
        </div>
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
                    <div class="container-fluid">
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="hidden" name="id" id="id">
                                <input type="hidden" name="teknisi" id="teknisi" value="{{Auth::user()->username}}">
                                <input type="hidden" name="spv" id="spv" value="Carda">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <H2 style="text-align-last:center;font-weight:bold;">PUMP 1</H2>
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" name="shift" id="shift" required>
                                                <option value="">pilih shift</option>
                                                <option value="Pagi">Pagi</option>
                                                <option value="Siang">Siang</option>
                                                <option value="Malam">Malam</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                              </div>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                      <H2 style="text-align-last:center;font-weight:bold;">PUMP 1</H2>
                                      <div class="row">
                                        <div class="col-2 col-sm-4">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" name="valvehisappompa1" id="valvehisappompa1" required>
                                                <option value="">valve in</option>
                                                <option value="Tutup">Tutup</option>
                                                <option value="Buka">Buka</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                              </div>
                                        </div>
                                        <div class="col-2 col-sm-4">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" name="valvesuplypompa1" id="valvesuplypompa1" required>
                                                <option value="">valve out</option>
                                                <option value="Tutup">Tutup</option>
                                                <option value="Buka">Buka</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </div>

                                        </div>
                                        <div class="col-2 col-sm-4">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" name="selektorpompa1" id="selektorpompa1" required>
                                                <option value="">selektor</option>
                                                <option value="Manual">Manual</option>
                                                <option value="Off">Off</option>
                                                <option value="Auto">Auto</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <H2 style="text-align-last:center;font-weight:bold;">PUMP 2</H2>
                                        <div class="row">
                                          <div class="col-2 col-sm-4">
                                              <div class="form-group was-validated">
                                                  <select class="custom-select" name="valvehisappompa2" id="valvehisappompa2" required>
                                                  <option value="">valve in</option>
                                                  <option value="Tutup">Tutup</option>
                                                  <option value="Buka">Buka</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </div>
                                          </div>
                                          <div class="col-2 col-sm-4">
                                              <div class="form-group was-validated">
                                                  <select class="custom-select" name="valvesuplypompa2" id="valvesuplypompa2" required>
                                                  <option value="">valve out</option>
                                                  <option value="Tutup">Tutup</option>
                                                  <option value="Buka">Buka</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                              </div>

                                          </div>
                                          <div class="col-2 col-sm-4">
                                              <div class="form-group was-validated">
                                                  <select class="custom-select" name="selektorpompa2" id="selektorpompa2" required>
                                                  <option value="">selektor</option>
                                                  <option value="Manual">Manual</option>
                                                  <option value="Off">Off</option>
                                                  <option value="Auto">Auto</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-12">
                                        <H2 style="text-align-last:center;font-weight:bold;">STATUS</H2>
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" name="kondisi" id="kondisi" required>
                                                <option value="">pilih status pompa</option>
                                                <option value="Kotor">Kotor</option>
                                                <option value="Bersih">Bersih</option>
                                                <option value="Bocor">Bocor</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </div>
                                        </div>
                                    </div>

                                  </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-sm-offset-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                    value="create">SAVE
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR MODAL -->

    @endsection

    <!-- AKHIR MODAL -->
    @section('tambahan_script')

    <!-- LIBARARY fix JS -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
    integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <script src="{{URL::to('assets1/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{URL::to('assets1/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- LIBARARY fix JS -->
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
            $('#filter').click(function () {
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $('#table_boosterpump').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });
            $('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_boosterpump').DataTable().destroy();
                load_data();
            });

            $('#export').click(function (e) {
                e.preventDefault();
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $.ajax({
                        data: {from_date:from_date, to_date:to_date}, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('boosterpump.export') }}", //url simpan data
                        type: "GET", //karena simpan kita pakai method POST
                        dataType: 'json',

                        complete:function(data){
                            location.href="/boosterpump/export?"+"from_date="+from_date+"&"+"to_date="+to_date;
                            }

                    });

                } else {
                    alert('Both Date is required');
                }
            });

            //LOAD DATATABLE
            //script untuk memanggil data json dari server dan menampilkannya berupa datatable
            //load data menggunakan parameter tanggal dari dan tanggal hingga
            function load_data(from_date = '', to_date = '') {
                $('#table_boosterpump').DataTable({
                    processing: true,
                    serverSide: true, //aktifkan server-side
                    ajax: {
                        url: "{{ route('boosterpump.index') }}",
                        type: 'GET',
                        data:{from_date:from_date, to_date:to_date}
                        //jangan lupa kirim parameter tanggal
                    },


                    columns: [{
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'teknisi',
                            name: 'teknisi'
                        },
                        {
                            data: 'shift',
                            name: 'shift'
                        },


                        @role('Admin|Eng-spv|')
                        {
                            data: 'action',
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
            $('#modal-judul').html("ADD BOOSTER PUMP"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
            $('#tombol-simpan').html("SAVE");
            $('#tombol-simpan').prop("disabled",false);
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
                        data: $('#form-tambah-edit')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('boosterpump.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON

                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_boosterpump').dataTable(); //inialisasi datatable
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
                                title: 'Data gagal Disimpan',
                                message: '{{ Session('
                                success ')}}',
                                position: 'topRight'
                            });
                            }

                        },
                        error: function (data) { //jika error tampilkan error pada console

                        }
                    });

                }
            })
        }
        //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('boosterpump/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("EDIT BOOSTER PUMP");
                $('#btn-name').html("update"); //valuenya tambah
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                $('#tombol-simpan').html("SAVE");
                $('#tombol-simpan').prop("disabled",false);

                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data_id);
                $('#teknisi').val(data.teknisi);
                $('#spv').val(data.spv);
                $('#valvehisappompa1').val(data.valvehisappompa1);
                $('#valvehisappompa2').val(data.valvehisappompa2);
                $('#valvesuplypompa1').val(data.valvesuplypompa1);
                $('#valvesuplypompa2').val(data.valvesuplypompa2);
                $('#selektorpompa1').val(data.selektorpompa1);
                $('#selektorpompa2').val(data.selektorpompa2);
                $('#kondisi').val(data.kondisi);
                $('#shift').val(data.shift);
            })
        });

        //TOMBOL view DATA DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.view-post', function () {
            var data_id = $(this).data('id');
            $.get('boosterpump/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("DETAIL BOOSTER PUMP");
                $('#tambah-edit-modal').modal('show');
                $('#tombol-simpan').html("");
                $("#Unit").prop("readonly",true);
                $('#id').val(data_id);
                $('#teknisi').val(teknisi);
                $('#spv').val(teknisi);
                $('#valvehisappompa1').prop("readonly",true);
                $('#valvehisappompa2').prop("readonly",true);
                $('#valvesuplypompa1').prop("readonly",true);
                $('#valvesuplypompa2').prop("readonly",true);
                $('#selektorpompa1').prop("readonly",true);
                $('#selektorpompa2').prop("readonly",true);
                $('#kondisi').prop("readonly",true);
                $('#shift').prop("readonly",true);
                $('#tombol-simpan').prop("disabled",true);

                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data_id);
                $('#teknisi').val(data.teknisi);
                $('#spv').val(data.spv);
                $('#valvehisappompa1').val(data.valvehisappompa1);
                $('#valvehisappompa2').val(data.valvehisappompa2);
                $('#valvesuplypompa1').val(data.valvesuplypompa1);
                $('#valvesuplypompa2').val(data.valvesuplypompa2);
                $('#selektorpompa1').val(data.selektorpompa1);
                $('#selektorpompa2').val(data.selektorpompa2);
                $('#kondisi').val(data.kondisi);
                $('#shift').val(data.shift);
            })
        });
        //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
            $('#tombol-hapus').text('Delete'); //set text untuk tombol hapus

        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "boosterpump/delete/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Deleting'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_boosterpump').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
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

