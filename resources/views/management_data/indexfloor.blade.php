

@extends('layouts.master')
@section('tambahan_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection
    @section('title')
          Floors
    @endsection

    @section('main-container')

    <!-- MULAI CONTAINER -->
    <div class="panel">
        <div class="row">
            <div class="col-md-8">
                <h1 style="font-weight: bold; margin-left: 15px;">BUILDING DATA</h1>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                @role('Eng-teknisi|Admin|Eng-spv|')
                <button type="button" class="btn-create-data btn btn-secondary " id="tombol-tambah">Create New Data</button>
                @endrole
            </div>
        </div>
        <div class="row input-daterange">
                <div class="form-group col-md-4">
                    <label for="tower_change">Tower</label>
                <select class="custom-select" id="tower_change" name="tower_change" required>
                @foreach ($Towers as $tower)
                <option value="{{$tower->id}}">{{$tower->tower}}</option>
                @endforeach
                </select>
            </div>
        </div>
            <!-- AKHIR DATE RANGE PICKER -->
            <br>
        </div>
        <div class="panel">
            <div class="card-body">
            <!-- MULAI TABLE -->
        <div class="row input-daterange">
            <div class="form-group col-md-4">
                <a href="">Floor</a>
            </div>
            <div class="form-group col-md-4">
                <a href="">Room</a>
            </div>
            <div class="form-group col-md-4">
                <a href="">Unit type</a>
            </div>
            <div class="form-group col-md-4">
                <a href="">Unit list</a>
            </div>
        </div>

            <table class="table table-striped table-bordered table-sm" id="table_floors">
                <thead>
                    <tr>
                        <th class="align-center">FLOOR</th>
                        @role('Admin|Eng-spv|')
                        <th width="19%">ACTIONS</th>
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
            <div class="modal-content " style="background-color: #1f1f1ef0; color:#1ab394; width:fit-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="modal-judul"></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <table class="table table-bordered table-striped" style="">
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="tower_baru" id="tower_baru">

                            <div class="form-group was-validated">
                                <input type="text" class="form-control" placeholder="floor name" id="floor" name="floor" required autocomplete="off">
                                 <div class="invalid-feedback">input data sesuai aktual</div>
                               </div>
                            <div class="form-group">
                                <select class="custom-select" id="tower" name="tower" required>
                                <option  value="">Pilih Tower</option>
                                @foreach ($Towers as $tower)
                                <option value="{{$tower->id}}">{{$tower->tower}}</option>
                                @endforeach
                                </select>
                            </div>

                        </table>
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                    value="create">SAVE
                                </button>
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

            $('#tower_change').on('change',function(){
                var value_tower = $(this).val();
                // console.log(value_tower);
                $('#table_floors').DataTable().destroy();
                    load_data(value_tower);
            });
            //LOAD DATATABLE
            //script untuk memanggil data json dari server dan menampilkannya berupa datatable
            //load data menggunakan parameter tanggal dari dan tanggal hingga
            function load_data(tower_change) {
                $('#table_floors').DataTable({
                    processing: true,
                    serverSide: true, //aktifkan server-side
                    ajax: {
                        url: "{{ route('floor.index') }}",
                        type: 'GET',
                        data:{tower_change:tower_change}
                        //jangan lupa kirim parameter tanggal
                    },
                    columns: [{data: 'name',name: 'name'},
                        @role('Admin|Eng-spv|')
                        {data: 'action',name: 'action'},
                        @endrole
                    ],
                    order: [
                        [0, 'asc']
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
            $('#modal-judul').html("ADD FLOOR"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
            $('#tower').empty();
            $.ajax({
                type: 'GET',
                url: '/ac/tower',
                success:function(data){
                    console.log(data);
                    var isi_data =JSON.parse(data);
                    $('#tower').empty();
                    $('#tower').append('<option value="0" disabled selected>Select Tower</option>');
                    isi_data.forEach(element => {
                    $('#tower').append(`<option value="${element['id']}">${element['tower']}</option>`);
                    });

                },
            });

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
                        url: "{{ route('floor.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON

                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_floors').dataTable(); //inialisasi datatable
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
                                console.log(data);
                                iziToast.error({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                title: 'Data gagal Disimpan',
                                message: '{{ Session('
                                success ')}}',
                                position: 'topRight'
                            });
                            }

                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log(data);
                        }
                    });

                }
            })
        }
        //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
        //ketika class edit-post yang ada pada tag body di klik maka
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            var list = `<option value="Residence">Residence</option><option value="Office strata">Office strata</option><option value="Office leaseing">Office leaseing</option><option value="Comersial">Comersial</option>`
            $.get('floor/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("UPDATE FLOOR");
                $('#btn-name').html("update"); //valuenya tambah
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                $('#tower').empty();

            //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data_id);
                $('#floor').val(data.name);
                $.ajax({
                    type: 'GET',
                    url: '/ac/tower',
                    success:function(datas){
                        console.log(datas);
                        var isi_data =JSON.parse(datas);

                        $('#tower').empty();
                        $('#tower').append(`<option value="${data['tower_floor_id']}">${data['tower_floor_id']}</option>`);
                        isi_data.forEach(element => {
                        $('#tower').append(`<option value="${element['tower']}">${element['tower']}</option>`);
                        });

                    },
            });
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
                url: "floor/delete/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Deleting'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    console.log(data);
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_floors').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                    iziToast.warning({ //tampilkan izitoast warning
                        title: 'Data Berhasil Dihapus',
                        message: '{{ Session('
                        delete ')}}',
                        position: 'topRight'
                    });
                },
                error: function(data){console.log(data);}
            })
        });

    </script>

    <!-- JAVASCRIPT -->
    @endsection






