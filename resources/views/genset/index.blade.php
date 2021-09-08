@extends('layouts.master')
@section('tambahan_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @endsection
    @section('title')
          Genset
    @endsection

    @section('main-container')

    <!-- MULAI CONTAINER -->

    <div class="panel">
        <div class="row">
            <div class="col-md-8">
                <h1 style="font-weight: bold; margin-left: 15px;">GENSET</h1>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                @role('Admin|Eng-teknisi|Eng-spv|')
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
            <table class="table table-striped table-bordered table-sm" id="table_genset">
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
                    <form id="form-tambah-edit" name="form-tambah-edit"  class="d-inline offset-md-5" enctype="multipart/form-data">
                        <div class="row">
                            <table class="table table-bordered table-striped">
                                <tbody >
                                <thead class="thead-dark" align="center" class="align-middle" >
                                <tr style="color: #1ab394">
                                        <th scope="col" align="center" class="align-middle"  class="align-middle">Item Pengecekan</th>
                                        <th scope="col" align="center" class="align-middle" class="align-middle">Batasan Normal</th>
                                        <th scope="col" align="center" class="align-middle" class="align-middle">Shift
                                          <div class="form-group was-validated">
                                              <select class="custom-select" id="shift" name="shift" required>
                                              <option value="">Pilih Shift</option>
                                              <option value="Pagi">Pagi</option>
                                              <option value="Siang">Siang</option>
                                              <option value="Malam">Malam</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                          </div>
                                        </th>
                                </tr>
                                </thead>

                                <input type="hidden" name="teknisi" id="teknisi">
                                <input type="hidden" name="spv" id="spv" value="carda">
                                <tr style="color: #1ab394">
                                        <td scope="col" align="center" class="align-middle" class="align-middle">Level oli engine </td>
                                        <td scope="col" align="center" class="align-middle" class="align-middle">High / Low </td>
                                        <td scope="col" align="center" class="align-middle" class="align-middle">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="leveloli" name="leveloli" required>
                                                <option value="">Pilih status</option>
                                                <option value="High">High</option>
                                                <option value="Low">Low</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                          </div>
                                        </td>
                                </tr>

                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Mode OPS Modul PKG </td>
                                        <td scope="col" align="center" class="align-middle">Auto / Off / Manual </td>
                                        <td scope="col" align="center" class="align-middle">
                                          <div class="form-group was-validated">
                                              <select class="custom-select" id="modemodulpkg" name="modemodulpkg" required>
                                              <option value="">Pilih status</option>
                                              <option value="Manual">Manual</option>
                                              <option value="Off">Off</option>
                                              <option value="Auto">Auto</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>
                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Level Air Radiator </td>
                                        <td scope="col" align="center" class="align-middle">High / Low </td>
                                        <td scope="col" align="center" class="align-middle">
                                          <div class="form-group was-validated">
                                              <select class="custom-select" id="levelradiator" name="levelradiator" required>
                                              <option value="">Pilih status</option>
                                              <option value="High">High</option>
                                              <option value="Low">Low</option>
                                              </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>
                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Odometer Running Hours </td>
                                        <td scope="col" align="center" class="align-middle">250 Jam </td>
                                        <td scope="col" align="center" class="align-middle">
                                            <div class="form-group was-validated">
                                               <input type="text" class="form-control" id="odometer" name="odometer" placeholder="Masukan running houres" required autocomplete="off">

                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>
                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Air filter </td>
                                        <td scope="col" align="center" class="align-middle">Bersih / Kotor </td>
                                        <td scope="col" align="center" class="align-middle">
                                          <div class="form-group was-validated">
                                              <select class="custom-select" id="airfilter" name="airfilter" required>
                                              <option value="">Pilih status</option>
                                              <option value="Bersih">Bersih</option>
                                              <option value="Kotor">Kotor</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>
                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Selektor Swicth Pompa Solar </td>
                                        <td scope="col" align="center" class="align-middle">Auto / Off / Manual </td>
                                        <td scope="col" align="center" class="align-middle">
                                            <div class="form-group was-validated">
                                              <select class="custom-select" id="pompasolar" name="pompasolar" required>
                                              <option value="">Pilih status</option>
                                              <option value="Manual">Manual</option>
                                              <option value="Off">Off</option>
                                              <option value="Auto">Auto</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>
                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Valve Suply Solar </td>
                                        <td scope="col" align="center" class="align-middle">Buka / Tutup </td>
                                        <td scope="col" align="center" class="align-middle">
                                            <div class="form-group was-validated">
                                              <select class="custom-select" id="valvesolar" name="valvesolar" required>
                                              <option value="">Pilih status</option>
                                              <option value="Buka">Buka</option>
                                              <option value="Tutup">Tutup</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>
                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Voltage Accu </td>
                                        <td scope="col" align="center" class="align-middle">23-24Vdc </td>
                                        <td scope="col" align="center" class="align-middle">
                                             <div class="form-group was-validated">
                                                <select class="custom-select" id="voltagecharger" name="voltagecharger" required>
                                                <option value="">Pilih status</option>
                                                <option value="23 Vdc">23 Vdc</option>
                                                <option value="24 Vdc">24 Vdc</option>
                                                <option value="25 Vdc">25 Vdc</option>
                                                <option value="26 Vdc">26 Vdc</option>
                                                <option value="27 Vdc">27 Vdc</option>
                                                </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>
                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Voltage Charge Accu </td>
                                        <td scope="col" align="center" class="align-middle">23-27Vdc </td>
                                        <td scope="col" align="center" class="align-middle">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="voltageaccu" name="voltageaccu" required>
                                                <option value="">Pilih status</option>
                                                <option value="23 Vdc">23 Vdc</option>
                                                <option value="24 Vdc">24 Vdc</option>
                                                <option value="25 Vdc">25 Vdc</option>
                                                <option value="26 Vdc">26 Vdc</option>
                                                <option value="27 Vdc">27 Vdc</option>
                                                </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>
                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Automatic Main Failure </td>
                                        <td scope="col" align="center" class="align-middle">Auto / Off / Manual </td>
                                        <td scope="col" align="center" class="align-middle">
                                               <div class="form-group was-validated">
                                                  <select class="custom-select" id="amf" name="amf" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Manual">Manual</option>
                                                  <option value="Off">Off</option>
                                                  <option value="Auto">Auto</option>
                                                  </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>
                                <tr style="color: #1ab394">

                                        <td scope="col" align="center" class="align-middle">Emergency Stop Button </td>
                                        <td scope="col" align="center" class="align-middle">NO / NC </td>
                                        <td scope="col" align="center" class="align-middle">
                                               <div class="form-group was-validated">
                                              <select class="custom-select" id="emergencybutton" name="emergencybutton" required>
                                              <option value="">Pilih status</option>
                                              <option value="NO">NO</option>
                                              <option value="NC">NC</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>

                                </tr>

                                <tr style="color: #1ab394">
                                        <td scope="col" align="center" class="align-middle">Body Gen-Set </td>
                                        <td scope="col" align="center" class="align-middle">Bersih / Kotor </td>
                                        <td scope="col" align="center" class="align-middle">
                                           <div class="form-group was-validated">
                                              <select class="custom-select" id="bodygenset" name="bodygenset" required>
                                              <option value="">Pilih status</option>
                                              <option value="Bersih">Bersih</option>
                                              <option value="Kotor">Kotor</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                        </td>
                                </tr>

                                <tr style="color: #1ab394">
                                        <th scope="col" class="align-top" colspan="3"  class="font-weight-bold">Temuan:
                                          <div class="form-group ">
                                              <textarea class="form-control " id="catatan" placeholder="Uraikan temuan di lapangan" id="catatan" name="catatan" rows="3" autocomplete="off" ></textarea>
                                              <div class="invalid-feedback">input data sesuai aktual</div>


                                        </th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-sm-12">
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
                    $('#table_genset').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });
            $('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_genset').DataTable().destroy();
                load_data();
            });

            $('#export').click(function (e) {
                e.preventDefault();
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $.ajax({
                        data: {from_date:from_date, to_date:to_date}, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('genset.export') }}", //url simpan data
                        type: "GET", //karena simpan kita pakai method POST
                        dataType: 'json',

                        complete:function(data){
                            location.href="/genset/export?"+"from_date="+from_date+"&"+"to_date="+to_date;
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
                $('#table_genset').DataTable({
                    processing: true,
                    serverSide: true, //aktifkan server-side
                    ajax: {
                        url: "{{ route('genset.index') }}",
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
            $('#modal-judul').html("ADD GENSET"); //valuenya tambah pegawai baru
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
                        url: "{{ route('genset.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON

                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_genset').dataTable(); //inialisasi datatable
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
            $.get('genset/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("UPDATE GENSET");
                $('#btn-name').html("update"); //valuenya tambah
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                $('#tombol-simpan').html("SAVE");
                $('#tombol-simpan').prop("disabled",false);

                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data_id);
                $('#teknisi').val(data.teknisi);
                $('#shift').val(data.shift);
                $('#spv').val(data.spv);
                $('#leveloli').val(data.leveloli);
                $('#modemodulpkg').val(data.modemodulpkg);
                $('#levelradiator').val(data.levelradiator);
                $('#odometer').val(data.odometer);
                $('#airfilter').val(data.airfilter);
                $('#pompasolar').val(data.pompasolar);
                $('#valvesolar').val(data.valvesolar);
                $('#voltageaccu').val(data.voltageaccu);
                $('#voltagecharger').val(data.voltagecharger);
                $('#amf').val(data.amf);
                $('#emergencybutton').val(data.emergencybutton);
                $('#bodygenset').val(data.bodygenset);
                $('#catatan').val(data.catatan);
            })
        });

        //TOMBOL view DATA DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.view-post', function () {
            var data_id = $(this).data('id');
            $.get('genset/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("DETAIL GENSET");
                $('#tambah-edit-modal').modal('show');
                $('#tombol-simpan').html("");
                $("#Unit").prop("readonly",true);
                $('#id').val(data_id);
                $('#teknisi').val(teknisi);
                $('#spv').val(teknisi);
                $('#shift').prop("readonly",true);
                $('#statusjockey').prop("readonly",true);
                $('#selectorjockey').prop("readonly",true);
                $('#valvejockey').prop("readonly",true);
                $('#onpressurejockey').prop("readonly",true);
                $('#ofpressurejockey').prop("readonly",true);
                $('#bodyjockey').prop("readonly",true);
                $('#statuselectric').prop("readonly",true);
                $('#selectorelectric').prop("readonly",true);
                $('#valveelectric').prop("readonly",true);
                $('#onpressureelectric').prop("readonly",true);
                $('#ofpressureelectric').prop("readonly",true);
                $('#bodyelectric').prop("readonly",true);
                $('#statusdiesel').prop("readonly",true);
                $('#selectordiesel').prop("readonly",true);
                $('#valvediesel').prop("readonly",true);
                $('#onpressurediesel').prop("readonly",true);
                $('#ofpressurediesel').prop("readonly",true);
                $('#batterycharger').prop("readonly",true);
                $('#leveloli').prop("readonly",true);
                $('#levelsolar').prop("readonly",true);
                $('#levelradiator').prop("readonly",true);
                $('#aktualpressureheader').prop("readonly",true);
                $('#temuan').prop("readonly",true);
                $('#tombol-simpan').prop("disabled",true);

                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data_id);
                $('#teknisi').val(data.teknisi);
                $('#shift').val(data.shift);
                $('#spv').val(data.spv);
                $('#leveloli').val(data.leveloli);
                $('#modemodulpkg').val(data.modemodulpkg);
                $('#levelradiator').val(data.levelradiator);
                $('#odometer').val(data.odometer);
                $('#airfilter').val(data.airfilter);
                $('#pompasolar').val(data.pompasolar);
                $('#valvesolar').val(data.valvesolar);
                $('#voltageaccu').val(data.voltageaccu);
                $('#voltagecharger').val(data.voltagecharger);
                $('#amf').val(data.amf);
                $('#emergencybutton').val(data.emergencybutton);
                $('#bodygenset').val(data.bodygenset);
                $('#catatan').val(data.catatan);
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
                url: "genset/delete/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Deleting'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_genset').dataTable();
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

