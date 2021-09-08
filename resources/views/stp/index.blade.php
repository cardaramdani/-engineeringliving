@extends('layouts.master')
@section('tambahan_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @endsection
    @section('title')
          STP
    @endsection

    @section('main-container')

    <!-- MULAI CONTAINER -->
    <div class="panel">
        <div class="row">
            <div class="col-md-8">
                <h1 style="font-weight: bold; margin-left: 15px;">SEWAGE TREATMENT PLAN</h1>
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
            <table class="table table-striped table-bordered table-sm" id="table_stp">
                <thead>
                    <tr>
                        <th class="align-center">CREATED</th>
                        <th>TEKNISI</th>
                        <th>SHIFT</th>
                        @role('Admin|Eng-spv|')
                        <th >ACTIONS</th>
                        @endrole
                    </tr>
                </thead>
            </table>
            <!-- AKHIR TABLE -->
        </div>
    </div>

    <!-- AKHIR CONTAINER -->

    <!-- MULAI MODAL FORM TAMBAH/EDIT-->
    <div class="modal fade " id="tambah-edit-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-judul" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content " style="background-color: #1f1f1ef0; color:#1ab394;">
                <div class="modal-header">
                    <h2 class="modal-title" id="modal-judul"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <div class="row">
                            <table class="table table-bordered table-striped">
                                <input type="hidden" id="id" name="id" >
                                <input type="hidden" id="teknisi" name="teknisi" >
                                <input type="hidden" id="spv" name="spv" value="carda">
                                <thead class="thead-dark" align="center">
                                <tr style="color:#1ab394">
                                    <th scope="col" align="center"  class="align-middle">Item Pengecekan</th>
                                    <th scope="col" align="center" class="align-middle">Shift
                                    <div class="form-group">
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

                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Basket Screen </td>
                                    <td scope="col" align="center">
                                        <div class="form-group was-validated">
                                            <select class="custom-select" id="basketscreen" name="basketscreen" required>
                                            <option value="">Pilih status</option>
                                            <option value="Bersih">Bersih</option>
                                            <option value="Kotor">Kotor</option>
                                            </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>

                            <tr style="color:#1ab394">
                                    <td scope="col" align="center" colspan="2" class="font-weight-bold">A. Blower </td>
                            </tr>

                            <tr style="color:#1ab394">
                                    <td scope="col" align="center">Selector Switch </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="selektorblower" name="selektorblower" required>
                                        <option value="">Pilih status</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Off">Off</option>
                                        <option value="Auto">Auto</option>
                                        </select>
                                        <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Status Blower 1 </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="statusblower1" name="statusblower1" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Pressure Blower 1 </td>
                                    <td scope="col" align="center">
                                        <div class="form-group was-validated">
                                        <input type="text" class="form-control" id="pressureblower1" name="pressureblower1" placeholder="Tekanan psi" required autocomplete="off">

                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Kondisi Umum Blower 1</td>
                                    <td scope="col" align="center">
                                        <div class="form-group was-validated">
                                        <select class="custom-select" id="kondisiblower1" name="kondisiblower1" required>
                                        <option value="">Pilih status</option>
                                        <option value="Abnormal">Abnormal</option>
                                        <option value="Normal">Normal</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Status Blower 2 </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="statusblower2" name="statusblower2" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Pressure Blower 2 </td>
                                    <td scope="col" align="center">
                                        <div class="form-group was-validated">
                                        <input type="text" class="form-control" id="pressureblower2" name="pressureblower2" placeholder="Tekanan psi" required autocomplete="off">

                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Kondisi Umum Blower 2</td>
                                    <td scope="col" align="center">
                                        <div class="form-group was-validated">
                                        <select class="custom-select" id="kondisiblower2" name="kondisiblower2" required>
                                        <option value="">Pilih status</option>
                                        <option value="Abnormal">Abnormal</option>
                                        <option value="Normal">Normal</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">
                                    <td scope="col" align="center" colspan="2" class="font-weight-bold">B. Equalizing Pump </td>
                            </tr>

                            <tr style="color:#1ab394">
                                    <td scope="col" align="center">Selector Switch </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="selektorequalizing" name="selektorequalizing" required>
                                        <option value="">Pilih status</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Off">Off</option>
                                        <option value="Auto">Auto</option>
                                        </select>
                                        <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Status Equalizing pump 1 </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="statusequalizing1" name="statusequalizing1" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Status Equalizing pump 2 </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="statusequalizing2" name="statusequalizing2" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Level Tank Equalizing </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="levelequalizing" name="levelequalizing" required>
                                        <option value="">Pilih status</option>
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Kondisi Air Equalizing </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="kondisiequalizing" name="kondisiequalizing" required>
                                        <option value="">Pilih status</option>
                                        <option value="Keruh">Keruh</option>
                                        <option value="Jernih">Jernih</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>


                            <tr style="color:#1ab394">
                                    <td scope="col" align="center" colspan="2" class="font-weight-bold">C. Effluent Pump </td>
                            </tr>

                            <tr style="color:#1ab394">
                                    <td scope="col" align="center">Selector Switch </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="selektoreffluent" name="selektoreffluent" required>
                                        <option value="">Pilih status</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Off">Off</option>
                                        <option value="Auto">Auto</option>
                                        </select>
                                        <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Status Effluent pump 1 </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="statuseffluent1" name="statuseffluent1" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Status Effluent pump 2 </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="statuseffluent2" name="statuseffluent2" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Level Tank Effluent </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="leveleffluent" name="leveleffluent" required>
                                        <option value="">Pilih status</option>
                                        <option value="Low">Low</option>
                                        <option value="Medium">Medium</option>
                                        <option value="High">High</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Kondisi Air Effluent </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="kondisieffluent" name="kondisieffluent" required>
                                        <option value="">Pilih status</option>
                                        <option value="Keruh">Keruh</option>
                                        <option value="Jernih">Jernih</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>

                            <tr style="color:#1ab394">
                                    <td scope="col" align="center" colspan="2" class="font-weight-bold">D. Fillter Pump </td>
                            </tr>

                            <tr style="color:#1ab394">
                                    <td scope="col" align="center">Selector Switch </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="selektorfilter" name="selektorfilter" required>
                                        <option value="">Pilih status</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Off">Off</option>
                                        <option value="Auto">Auto</option>
                                        </select>
                                        <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Status Fillter pump 1 </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="statusfilter1" name="statusfilter1" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Status Fillter pump 2 </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="statusfilter2" name="statusfilter2" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Intake Fan </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="intakefan" name="intakefan" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Exhaust Fan </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <select class="custom-select" id="exhaustfan" name="exhaustfan" required>
                                        <option value="">Pilih status</option>
                                        <option value="Off">Off</option>
                                        <option value="On">On</option>
                                        </select>
                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>
                            <tr style="color:#1ab394">

                                    <td scope="col" align="center">Stand Meteran Air </td>
                                    <td scope="col" align="center">
                                    <div class="form-group was-validated">
                                        <input type="text" class="form-control" id="standmeter" name="standmeter" placeholder="Angka Meteran Air" required autocomplete="off">

                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                    </div>
                                    </td>

                            </tr>


                            <tr style="color:#1ab394">
                                    <th scope="col" class="align-top" colspan="3"  class="font-weight-bold">Temuan:
                                    <div class="form-group ">
                                        <textarea class="form-control " id="temuan" placeholder="Uraikan temuan di lapangan" name="temuan" rows="2" autocomplete="off" ></textarea>
                                        <div class="invalid-feedback">input data sesuai aktual</div>


                                    </th>
                            </tr>
                            </table>

                            <div class="col-sm-offset-2 col-sm-12">
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
                    $('#table_stp').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });
            $('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_stp').DataTable().destroy();
                load_data();
            });

            $('#export').click(function (e) {
                e.preventDefault();
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $.ajax({
                        data: {from_date:from_date, to_date:to_date}, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('stp.export') }}", //url simpan data
                        type: "GET", //karena simpan kita pakai method POST
                        dataType: 'json',

                        complete:function(data){
                            location.href="/stp/export?"+"from_date="+from_date+"&"+"to_date="+to_date;
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
                $('#table_stp').DataTable({
                    processing: true,
                    serverSide: true, //aktifkan server-side
                    ajax: {
                        url: "{{ route('stp.index') }}",
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
            $('#modal-judul').html("ADD STP"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
            $('#tombol-simpan').prop("disabled",false);
            $('#tombol-simpan').html("SAVE"); //valuenya tambah pegawai baru
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
                        url: "{{ route('stp.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON

                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_stp').dataTable(); //inialisasi datatable
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
            $.get('stp/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("UPDATE STP");
                $('#btn-name').html("update"); //valuenya tambah
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                $('#tombol-simpan').prop("disabled",false);
                $('#tombol-simpan').html("SAVE"); //valuenya tambah pegawai baru
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data_id);
                $('#teknisi').val(data.teknisi);
                $('#shift').val(data.shift);
                $('#spv').val(data.spv);
                $('#basketscreen').val(data.basketscreen);
                $('#selektorblower').val(data.selektorblower);
                $('#statusblower1').val(data.statusblower1);
                $('#pressureblower1').val(data.pressureblower1);
                $('#statusblower2').val(data.statusblower2);
                $('#pressureblower2').val(data.pressureblower2);
                $('#kondisiblower1').val(data.kondisiblower1);
                $('#kondisiblower2').val(data.kondisiblower2);
                $('#selektorequalizing').val(data.selektorequalizing);
                $('#statusequalizing1').val(data.statusequalizing1);
                $('#statusequalizing2').val(data.statusequalizing2);
                $('#levelequalizing').val(data.levelequalizing);
                $('#kondisiequalizing').val(data.kondisiequalizing);
                $('#selektoreffluent').val(data.selektoreffluent);
                $('#statuseffluent1').val(data.statuseffluent1);
                $('#statuseffluent2').val(data.statuseffluent2);
                $('#leveleffluent').val(data.leveleffluent);
                $('#kondisieffluent').val(data.kondisieffluent);
                $('#selektorfilter').val(data.selektorfilter);
                $('#statusfilter1').val(data.statusfilter1);
                $('#statusfilter2').val(data.statusfilter2);
                $('#intakefan').val(data.intakefan);
                $('#exhaustfan').val(data.exhaustfan);
                $('#standmeter').val(data.standmeter);
                $('#temuan').val(data.temuan);
        })
    });

    $('body').on('click', '.view-post', function () {
            var data_id = $(this).data('id');
            $.get('stp/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("DETAIL STP");
                $('#btn-name').html("update"); //valuenya tambah
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                $('#tombol-simpan').prop("disabled",true);
                $('#tombol-simpan').html(""); //valuenya tambah pegawai baru

                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data_id);
                $('#teknisi').val(data.teknisi);
                $('#shift').val(data.shift);
                $('#spv').val(data.spv);
                $('#basketscreen').val(data.basketscreen);
                $('#selektorblower').val(data.selektorblower);
                $('#statusblower1').val(data.statusblower1);
                $('#pressureblower1').val(data.pressureblower1);
                $('#statusblower2').val(data.statusblower2);
                $('#pressureblower2').val(data.pressureblower2);
                $('#kondisiblower1').val(data.kondisiblower1);
                $('#kondisiblower2').val(data.kondisiblower2);
                $('#selektorequalizing').val(data.selektorequalizing);
                $('#statusequalizing1').val(data.statusequalizing1);
                $('#statusequalizing2').val(data.statusequalizing2);
                $('#levelequalizing').val(data.levelequalizing);
                $('#kondisiequalizing').val(data.kondisiequalizing);
                $('#selektoreffluent').val(data.selektoreffluent);
                $('#statuseffluent1').val(data.statuseffluent1);
                $('#statuseffluent2').val(data.statuseffluent2);
                $('#leveleffluent').val(data.leveleffluent);
                $('#kondisieffluent').val(data.kondisieffluent);
                $('#selektorfilter').val(data.selektorfilter);
                $('#statusfilter1').val(data.statusfilter1);
                $('#statusfilter2').val(data.statusfilter2);
                $('#intakefan').val(data.intakefan);
                $('#exhaustfan').val(data.exhaustfan);
                $('#standmeter').val(data.standmeter);
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
                url: "stp/delete/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Deleting'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_stp').dataTable();
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

