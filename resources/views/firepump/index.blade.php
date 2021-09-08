@extends('layouts.master')
@section('tambahan_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @endsection
    @section('title')
          Fire Pump
    @endsection

    @section('main-container')

    <!-- MULAI CONTAINER -->

    <div class="panel">
        <div class="row">
            <div class="col-md-8">
                <h1 style="font-weight: bold; margin-left: 15px;">FIRE PUMP</h1>
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
            <table class="table table-striped table-bordered table-sm" id="table_firepump">
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
                                <input type="hidden" name="spv" id="spv" value="carda">
                                <input type="hidden" name="id" id="id">
                                <input type="hidden" name="teknisi" id="teknisi">
                            <tbody>
                                <thead class="thead-dark" align="center">
                                    <tr>
                                            <th scope="col" align="center" class="align-middle">Item Pengecekan</th>
                                            <th scope="col" align="center" class="align-middle">Batasan Normal</th>
                                            <th scope="col" align="center" class="align-middle">Shift</th>
                                    </tr>

                                    <tr>
                                        <th scope="col" align="center"   class="font-weight-bold align-middle" colspan="2">A. Jockey Pump</th>
                                        <td scope="col" align="center" class="align-middle" >
                                            <div class="form-group was-validated">
                                                <label for="shift" >SHIFT</label>
                                                <select  id="shift" name="shift" class="form-control @error('shift') is-invalid @enderror" required>
                                                <option value="">Pilih Shift</option>
                                                <option value="Pagi">Pagi</option>
                                                <option value="Siang">Siang</option>
                                                <option value="Malam">Malam</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Status</th>
                                        <th scope="col" align="center" class="align-middle">On / Off</th>
                                        <td scope="col" align="center" class="align-middle">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="statusjockey" name="statusjockey" required>
                                                <option value="">Pilih status</option>
                                                <option value="On">On</option>
                                                <option value="Off">Off</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Selector Switch</th>
                                        <th scope="col" align="center" class="align-middle">Auto / Off / Manual</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="selectorjockey" name="selectorjockey" required>
                                                <option value="">Pilih status</option>
                                                <option value="Manual">Manual</option>
                                                <option value="Off">Off</option>
                                                <option value="Auto">Auto</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Status Valve</th>
                                        <th scope="col" align="center" class="align-middle">Buka / Tutup</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="valvejockey" name="valvejockey" required>
                                                <option value="">Pilih status</option>
                                                <option value="Buka">Buka</option>
                                                <option value="Tutup">Tutup</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Pressure (On)</th>
                                        <th scope="col" align="center" class="align-middle">Min 10 Bar</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="onpressurejockey" name="onpressurejockey" required>
                                                <option value="">Pilih status</option>
                                                <option value="11 Bar">11 Bar</option>
                                                <option value="10 Bar">10 Bar</option>
                                                <option value="9 Bar">9 Bar</option>
                                                <option value="8 Bar">8 Bar</option>
                                                <option value="7 Bar">7 Bar</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Pressure (Off)</th>
                                        <th scope="col" align="center" class="align-middle">11 Bar</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="ofpressurejockey" name="ofpressurejockey" required>
                                                <option value="">Pilih status</option>
                                                <option value="11 Bar">11 Bar</option>
                                                <option value="10 Bar">10 Bar</option>
                                                <option value="9 Bar">9 Bar</option>
                                                <option value="8 Bar">8 Bar</option>
                                                <option value="7 Bar">7 Bar</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Kebersihan Pompa</th>
                                        <th scope="col" align="center" class="align-middle">Bersih / Kotor </th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="bodyjockey" name="bodyjockey" required>
                                                <option value="">Pilih status</option>
                                                <option value="Kotor">Kotor</option>
                                                <option value="Bersih">Bersih</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center"   class="font-weight-bold align-middle" colspan="3">B. Elektric Pump</th>

                                    </tr>
                                    <tr>

                                        <th scope="col" align="center" class="align-middle">Status</th>
                                        <th scope="col" align="center" class="align-middle">On / Off</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="statuselectric" name="statuselectric" required>
                                                <option value="">Pilih status</option>
                                                <option value="On">On</option>
                                                <option value="Off">Off</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <th scope="col" align="center" class="align-middle">Selector Switch</th>
                                        <th scope="col" align="center" class="align-middle">Auto / Off / Manual</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="selectorelectric" name="selectorelectric" required>
                                                <option value="">Pilih status</option>
                                                <option value="Manual">Manual</option>
                                                <option value="Off">Off</option>
                                                <option value="Auto">Auto</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Status Valve</th>
                                        <th scope="col" align="center" class="align-middle">Buka / Tutup</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="valveelectric" name="valveelectric" required>
                                                <option value="">Pilih status</option>
                                                <option value="Buka">Buka</option>
                                                <option value="Tutup">Tutup</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Pressure (On)</th>
                                        <th scope="col" align="center" class="align-middle">Min 9 Bar</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="onpressureelectric" name="onpressureelectric" required>
                                                <option value="">Pilih status</option>
                                                <option value="11 Bar">11 Bar</option>
                                                <option value="10 Bar">10 Bar</option>
                                                <option value="9 Bar">9 Bar</option>
                                                <option value="8 Bar">8 Bar</option>
                                                <option value="7 Bar">7 Bar</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Pressure (Off)</th>
                                        <th scope="col" align="center" class="align-middle">Manual </th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="ofpressureelectric" name="ofpressureelectric" required>
                                                <option value="">Pilih status</option>
                                                <option value="Manual">Manual</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Kebersihan Pompa</th>
                                        <th scope="col" align="center" class="align-middle">Bersih / Kotor </th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="bodyelectric" name="bodyelectric" required>
                                                <option value="">Pilih status</option>
                                                <option value="Bersih">Bersih</option>
                                                <option value="Kotor">Kotor</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                            <th scope="col" align="center"   class="font-weight-bold" colspan="3">C. Diesel Pump</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Status</th>
                                        <th scope="col" align="center" class="align-middle">On / Off</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="statusdiesel" name="statusdiesel" required>
                                                <option value="">Pilih status</option>
                                                <option value="On">On</option>
                                                <option value="Off">Off</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Selector Switch</th>
                                        <th scope="col" align="center" class="align-middle">Auto / Off / Manual</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="selectordiesel" name="selectordiesel" required>
                                                <option value="">Pilih status</option>
                                                <option value="Manual">Manual</option>
                                                <option value="Off">Off</option>
                                                <option value="Auto">Auto</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Status Valve</th>
                                        <th scope="col" align="center" class="align-middle">Buka / Tutup</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="valvediesel" name="valvediesel" required>
                                                <option value="">Pilih status</option>
                                                <option value="Buka">Buka</option>
                                                <option value="Tutup">Tutup</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Pressure (On)</th>
                                        <th scope="col" align="center" class="align-middle">Min 7 Bar</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="onpressurediesel" name="onpressurediesel" required>
                                                <option value="">Pilih status</option>
                                                <option value="11 Bar">11 Bar</option>
                                                <option value="10 Bar">10 Bar</option>
                                                <option value="9 Bar">9 Bar</option>
                                                <option value="8 Bar">8 Bar</option>
                                                <option value="7 Bar">7 Bar</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Pressure (Off)</th>
                                        <th scope="col" align="center" class="align-middle">Manual </th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="ofpressurediesel" name="ofpressurediesel" readonly required>
                                                <option value="Manual" >Manual</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Battery Charger</th>
                                        <th scope="col" align="center" class="align-middle">24-26 Vdc</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="batterycharger" name="batterycharger" required>
                                                <option value="">Pilih status</option>
                                                <option value="23 Vdc">23 Vdc</option>
                                                <option value="24 Vdc">24 Vdc</option>
                                                <option value="25 Vdc">25 Vdc</option>
                                                <option value="26 Vdc">26 Vdc</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Level Oli</th>
                                        <th scope="col" align="center" class="align-middle">High / Low </th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="leveloli" name="leveloli" required>
                                                <option value="">Pilih status</option>
                                                <option value="High">High</option>
                                                <option value="Low">Low</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Level Air Radiator</th>
                                        <th scope="col" align="center" class="align-middle">High / Low </th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="levelradiator" name="levelradiator" required>
                                                <option value="">Pilih status</option>
                                                <option value="High">High</option>
                                                <option value="Low">Low</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Level Solar</th>
                                        <th scope="col" align="center" class="align-middle">High / Low </th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="levelsolar" name="levelsolar" required>
                                                <option value="">Pilih status</option>
                                                <option value="High">High</option>
                                                <option value="Low">Low</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Aktual pressure Pipa Header</th>
                                        <th scope="col" align="center" class="align-middle">7-10 Bar</th>
                                        <td scope="col" align="center">
                                            <div class="form-group was-validated">
                                                <select class="custom-select" id="aktualpressureheader" name="aktualpressureheader" required>
                                            <option value="">Pilih status</option>
                                                <option value="11 Bar">11 Bar</option>
                                                <option value="10 Bar">10 Bar</option>
                                                <option value="9 Bar">9 Bar</option>
                                                <option value="8 Bar">8 Bar</option>
                                                <option value="7 Bar">7 Bar</option>
                                                </select>
                                                <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <th scope="col" class="align-top" colspan="3" class="font-weight-bold">Temuan:</th>

                                    </tr>
                                    <tr>
                                        <td scope="col" class="align-top" colspan="3" class="font-weight-bold">
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Temuan" id="temuan" name="temuan" value="{{old('temuan')}}"  autocomplete="off">
                                                    </select>
                                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>
                                    </tr>

                                </thead>
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
                    $('#table_firepump').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });
            $('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_firepump').DataTable().destroy();
                load_data();
            });

            $('#export').click(function (e) {
                e.preventDefault();
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $.ajax({
                        data: {from_date:from_date, to_date:to_date}, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('firepump.export') }}", //url simpan data
                        type: "GET", //karena simpan kita pakai method POST
                        dataType: 'json',

                        complete:function(data){
                            location.href="/firepump/export?"+"from_date="+from_date+"&"+"to_date="+to_date;
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
                $('#table_firepump').DataTable({
                    processing: true,
                    serverSide: true, //aktifkan server-side
                    ajax: {
                        url: "{{ route('firepump.index') }}",
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
            $('#modal-judul').html("ADD FIRE PUMP"); //valuenya tambah pegawai baru
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
                        url: "{{ route('firepump.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON

                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_firepump').dataTable(); //inialisasi datatable
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
            $.get('firepump/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("UPDATE FIRE PUMP");
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
                $('#statusjockey').val(data.statusjockey);
                $('#selectorjockey').val(data.selectorjockey);
                $('#valvejockey').val(data.valvejockey);
                $('#onpressurejockey').val(data.onpressurejockey);
                $('#ofpressurejockey').val(data.ofpressurejockey);
                $('#bodyjockey').val(data.bodyjockey);
                $('#statuselectric').val(data.statuselectric);
                $('#selectorelectric').val(data.selectorelectric);
                $('#valveelectric').val(data.valveelectric);
                $('#onpressureelectric').val(data.onpressureelectric);
                $('#ofpressureelectric').val(data.ofpressureelectric);
                $('#bodyelectric').val(data.bodyelectric);
                $('#statusdiesel').val(data.statusdiesel);
                $('#selectordiesel').val(data.selectordiesel);
                $('#valvediesel').val(data.valvediesel);
                $('#onpressurediesel').val(data.onpressurediesel);
                $('#ofpressurediesel').val(data.ofpressurediesel);
                $('#batterycharger').val(data.batterycharger);
                $('#leveloli').val(data.leveloli);
                $('#levelsolar').val(data.levelsolar);
                $('#levelradiator').val(data.levelradiator);
                $('#aktualpressureheader').val(data.aktualpressureheader);
                $('#temuan').val(data.temuan);
            })
        });

        //TOMBOL view DATA DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.view-post', function () {
            var data_id = $(this).data('id');
            $.get('firepump/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("DETAIL FIRE PUMP");
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
                $('#statusjockey').val(data.statusjockey);
                $('#selectorjockey').val(data.selectorjockey);
                $('#valvejockey').val(data.valvejockey);
                $('#onpressurejockey').val(data.onpressurejockey);
                $('#ofpressurejockey').val(data.ofpressurejockey);
                $('#bodyjockey').val(data.bodyjockey);
                $('#statuselectric').val(data.statuselectric);
                $('#selectorelectric').val(data.selectorelectric);
                $('#valveelectric').val(data.valveelectric);
                $('#onpressureelectric').val(data.onpressureelectric);
                $('#ofpressureelectric').val(data.ofpressureelectric);
                $('#bodyelectric').val(data.bodyelectric);
                $('#statusdiesel').val(data.statusdiesel);
                $('#selectordiesel').val(data.selectordiesel);
                $('#valvediesel').val(data.valvediesel);
                $('#onpressurediesel').val(data.onpressurediesel);
                $('#ofpressurediesel').val(data.ofpressurediesel);
                $('#batterycharger').val(data.batterycharger);
                $('#leveloli').val(data.leveloli);
                $('#levelsolar').val(data.levelsolar);
                $('#levelradiator').val(data.levelradiator);
                $('#aktualpressureheader').val(data.aktualpressureheader);
                $('#temuan').val(data.temuan);
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
                url: "firepump/delete/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {

                    $('#tombol-hapus').text('Deleting'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_firepump').dataTable();
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

