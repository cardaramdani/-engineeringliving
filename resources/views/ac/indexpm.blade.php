@extends('layouts.master')
@section('tambahan_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection
    @section('title')
          pm ac
    @endsection

    @section('main-container')

    <!-- MULAI CONTAINER -->
    <div class="panel">
        <div class="row">
            <div class="col-md-8">
                <h1 style="font-weight: bold; margin-left: 15px;">Preventive Maintenance AC</h1>
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
            </div>
        </div>
            <!-- AKHIR DATE RANGE PICKER -->
            <br>
        </div>
        <div class="panel">
            <div class="card-body">
            <!-- MULAI TABLE -->
            <table class="table table-striped table-bordered table-sm" id="table_pmac">
                <thead>
                    <tr>
                        <th class="align-center">CREATED</th>
                        <th>TEKNISI</th>
                        <th>TOWER</th>
                        <th>FLOOR</th>
                        <th>AREA</th>
                        <th>NO ITEM</th>
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
                            <input type="hidden" name="teknisi" id="teknisi">
                            <input type="hidden" name="tower_baru" id="tower_baru">
                            <input type="hidden" name="lantai_baru" id="lantai_baru">
                            <input type="hidden" name="lokasi_unit_baru" id="lokasi_unit_baru">
                            <input type="hidden" name="item_no_baru" id="item_no_baru">
                            <tbody>
                                    <thead class="thead-dark" align="center">
                                        <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                                <th scope="col" class="align-middle" colspan="5">
                                                <img style="width: 250px;" src="/dataIMG_user/logo.png" class="logo"/>
                                                </th>
                                                <th scope="col" align="center" class="align-middle" colspan="9">PM SCHEDULE :
                                                <div class="form-group">
                                                    <select class="custom-select" name="jadwalpm" required>
                                                    <option value="3 Bulanan">3 Bulanan</option>
                                                    </select>
                                                </div>
                                                </th>
                                                <th scope="col" align="center"  class="align-middle" colspan="5">Halaman 1-1</th>
                                        </tr>
                                        <tr class="align-left" align="left">
                                        <th scope="col" colspan="5" >EQUIPMENT : Air Conditioner <br>
                                            Tower : <div class="form-group">
                                                            <select class="custom-select" name="tower" id="tower" >
                                                            <option  value="" >Pilih Area</option>
                                                            @foreach ($Tower as $tower)
                                                            <option value="{{$tower->id}}">{{$tower->name}}</option>
                                                            @endforeach
                                                        </select>

                                            Floor : <div class="form-group">
                                                            <select class="custom-select" name="lantai" id="lantai" required>
                                                            </select>
                                                        </div>
                                                        </div>

                                            Unit Location : <div class="form-group">
                                                            <select class="custom-select" name="lokasi_unit" id="lokasi_unit" required>
                                                            </select>
                                                        </div>

                                            Item No : <div class="form-group">
                                                        <select class="custom-select" name="item_no" id="item_no" required>
                                                        </select>
                                                    </div>
                                        </th>

                                        <th scope="col" align="center" class="align-middle">PLAN SCHEDULE :</th>
                                        <th scope="col" align="center" class="align-middle" colspan="7">
                                            <div class="form-group">
                                            <input style="color: #1f1f1ef0;" type="date" class="form-control" id="planpm" name="planpm" required>
                                            </div>
                                        </th>
                                        <th scope="col" align="center"  class="align-middle" >PM STATUS :</th>
                                        <th scope="col" colspan="4" class="align-middle" >C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
                                        </tr>

                                    </thead>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                        <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
                                        <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
                                        <td scope="col" align="center" colspan="6" class="font-weight-bold">KETERANGAN</td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col" align="left" colspan="19" class="font-weight-bold">3 Bulanan</td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col" colspan="6" class="font-weight-bold align-middle">Cleaning air filter indoor unit</td>
                                            <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l1" name="l1" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col" align="center" colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l1k1" name="l1k1" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan fan blower indoor unit</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l2" name="l2" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>

                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l2k2" name="l2k2" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>
                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Suara tidak kasar</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l3" name="l3" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l3k3" name="l3k3" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Periksa kekencangan skrew koneksi kabel indoor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l4" name="l4" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l4k4" name="l4k4" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Remote berfungsi baik</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l5" name="l5" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l5k5" name="l5k5" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan PCB indoor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l6" name="l6" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l6k6" name="l6k6" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning cover indoor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l7" name="l7" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>

                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l7k7" name="l7k7" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cover indoor terpasang baik</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l8" name="l8" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l8k8" name="l8k8" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning/vakum drain</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l9" name="l9" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l9k9" name="l9k9" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Drain tidak bocor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l10" name="l10" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l10k10" name="l10k10" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning coil evap indoor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l11" name="l11" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l11k11" name="l11k11" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Coil evap tidak berkarat</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l12" name="l12" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l12k12" name="l12k12" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Fin coil evap tidak rusak</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l13" name="l13" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l13k13" name="l13k13" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pipe refrigerant Tidak bocor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l14" name="l14" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l14k14" name="l14k14" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kedudukan Unit indoor terpasang baik</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l15" name="l15" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l15k15" name="l15k15" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Compresor Suara tidak kasar</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l16" name="l16" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l16k16" name="l16k16" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Ampere outdoor sesuai spesifikasi</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l17" name="l17" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l17k17" name="l17k17" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Fin outdoor tidak rusak</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l18" name="l18" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>

                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l18k18" name="l18k18" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning evap kondensor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l19" name="l19" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l19k19" name="l19k19" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Coil kondendor Tidak bocor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l20" name="l20" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l20k20" name="l20k20" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning motor fan outdoor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                                <select class="custom-select" id="l21" name="l21" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l21k21" name="l21k21" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Periksa kekencangan skrew koneksi kabel outdoor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                            <div class="form-group">
                                                <select class="custom-select" id="l22" name="l22" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </div>
                                            </td>
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l22k22" name="l22k22" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pipe refrigerant Tidak bocor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                            <div class="form-group">
                                                <select class="custom-select" id="l23" name="l23" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </div>
                                            </td>

                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l23k23" name="l23k23" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning body unit outdoor</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                            <div class="form-group">
                                                <select class="custom-select" id="l24" name="l24" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </div>
                                            </td>

                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l24k24" name="l24k24" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pondasi unit outdoor terpasang baik</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                            <div class="form-group">
                                                <select class="custom-select" id="l25" name="l25" required>
                                                <option value="">Pilih</option>
                                                    <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </div>
                                            </td>

                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l25k25" name="l25k25" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                                    <tr style="background-color: #1f1f1ef0; color:#1ab394;">
                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kabel power tidak panas</td>
                                            <td scope="col"  class="font-weight-bold align-middle" colspan="7">
                                            <div class="form-group">
                                            <div class="form-group">
                                                <select class="custom-select" id="l26" name="l26" required>
                                                <option value="">Pilih</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="R">R</option>
                                                <option value="X">X</option>
                                                </select>
                                            </div>
                                            </div>
                                            </td>

                                            <td scope="col"  colspan="6" class="font-weight-bold align-middle">
                                            <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Keterangan" id="l26k26" name="l26k26" autocomplete="off">
                                            </div>
                                            </td>
                                    </tr>

                            </tbody>


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
                    $('#table_pmac').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });
            $('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_pmac').DataTable().destroy();
                load_data();
            });




            $('body').on('click', '.Export-pdf', function () {
                event.preventDefault();
            var data_id = $(this).data('id');
                var url = "/ac/pdf/"+data_id;
                location.replace(url);
            });

            $('body').on('click', '.Export-xlsx', function () {
                event.preventDefault();
            var data_id = $(this).data('id');
                var url = "/ac/xlsx/"+data_id;
                location.replace(url);
            });

            //LOAD DATATABLE
            //script untuk memanggil data json dari server dan menampilkannya berupa datatable
            //load data menggunakan parameter tanggal dari dan tanggal hingga
            function load_data(from_date = '', to_date = '') {
                $('#table_pmac').DataTable({
                    processing: true,
                    serverSide: true, //aktifkan server-side
                    ajax: {
                        url: "{{ route('pmac.index') }}",
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
                            data: 'tower',
                            name: 'tower'
                        },
                        {
                            data: 'lantai',
                            name: 'lantai'
                        },
                        {
                            data: 'lokasi_unit',
                            name: 'lokasi_unit'
                        },
                        {
                            data: 'item_no',
                            name: 'item_no'
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
            $('#modal-judul').html("ADD PM AC"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
            $('#lokasi_unit_baru').empty();
            $('#item_no_baru').empty();
            $('#item_no').empty();
            $('#lokasi_unit').empty();
            $('#lokasi_unit').trigger("reset");
            $.ajax({
                    type: 'GET',
                    url: '/ac/tower',
                    success:function(data){
                        console.log(data);

                        var isi_data =JSON.parse(data);

                        $('#tower').empty();
                        $('#tower').append('<option value="0" disabled selected>Select Tower</option>');
                        isi_data.forEach(element => {
                        $('#tower').append(`<option value="${element['tower']}">${element['tower']}</option>`);
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
                        url: "{{ route('pmac.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON

                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_pmac').dataTable(); //inialisasi datatable
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
            $.get('ac/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("UPDATE PM AC");
                $('#btn-name').html("update"); //valuenya tambah
                $('#tombol-simpan').val("edit-post");
                $('#tambah-edit-modal').modal('show');
                $('#tower').empty();
                $('#lantai').empty();
                $('#lokasi_unit').empty();
                $('#item_no').empty();

            //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
            $('#id').val(data_id);
            $('#teknisi').val(data.teknisi);
            $('#jadwalpm').val(data.jadwalpm);
            $('#planpm').val(data.planpm);

            $('#tower_baru').val(data.tower);
            $('#lantai_baru').val(data.lantai);
            $('#lokasi_unit_baru').val(data.lokasi_unit);
            $('#item_no_baru').val(data.item_no);
            $.ajax({
                    type: 'GET',
                    url: '/ac/tower',
                    success:function(datas){
                        console.log(datas);
                        var isi_data =JSON.parse(datas);

                        $('#tower').empty();
                        $('#tower').append(`<option value="${data['tower']}">${data['tower']}</option>`);
                        isi_data.forEach(element => {
                        $('#tower').append(`<option value="${element['tower']}">${element['tower']}</option>`);
                        });

                    },
            });
            $('#lantai').append(`<option value="${data['lantai']}">${data['lantai']}</option>`);
            $('#lokasi_unit').append(`<option value="${data['lokasi_unit']}">${data['lokasi_unit']}</option>`);
            $('#item_no').append(`<option value="${data['item_no']}">${data['item_no']}</option>`);
            $('#l1').val(data.l1);
            $('#l2').val(data.l2);
            $('#l3').val(data.l3);
            $('#l4').val(data.l4);
            $('#l5').val(data.l5);
            $('#l6').val(data.l6);
            $('#l7').val(data.l7);
            $('#l8').val(data.l8);
            $('#l9').val(data.l9);
            $('#l10').val(data.l10);
            $('#l11').val(data.l11);
            $('#l12').val(data.l12);
            $('#l13').val(data.l13);
            $('#l14').val(data.l14);
            $('#l15').val(data.l15);
            $('#l16').val(data.l16);
            $('#l17').val(data.l17);
            $('#l18').val(data.l18);
            $('#l19').val(data.l19);
            $('#l20').val(data.l20);
            $('#l21').val(data.l21);
            $('#l22').val(data.l22);
            $('#l23').val(data.l23);
            $('#l24').val(data.l24);
            $('#l25').val(data.l25);
            $('#l26').val(data.l26);

            $('#l1k1').val(data.l1k1);
            $('#l2k2').val(data.l2k2);
            $('#l3k3').val(data.l3k3);
            $('#l4k4').val(data.l4k4);
            $('#l5k5').val(data.l5k5);
            $('#l6k6').val(data.l6k6);
            $('#l7k7').val(data.l7k7);
            $('#l8k8').val(data.l8k8);
            $('#l9k9').val(data.l9k9);
            $('#l10k10').val(data.l10k10);
            $('#l11k11').val(data.l11k11);
            $('#l12k12').val(data.l12k12);
            $('#l13k13').val(data.l13k13);
            $('#l14k14').val(data.l14k14);
            $('#l15k15').val(data.l15k15);
            $('#l16k16').val(data.l16k16);
            $('#l17k17').val(data.l17k17);
            $('#l18k18').val(data.l18k18);
            $('#l19k19').val(data.l19k19);
            $('#l20k20').val(data.l20k20);
            $('#l21k21').val(data.l21k21);
            $('#l22k22').val(data.l22k22);
            $('#l23k23').val(data.l23k23);
            $('#l24k24').val(data.l24k24);
            $('#l25k25').val(data.l25k25);
            $('#l26k26').val(data.l26k26);


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
                url: "ac/delete/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Deleting'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_pmac').dataTable();
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

        $('#tower').on('change',function(){
            var tower_id = $(this).val();
            $('#lantai').empty();
            $('#lokasi_unit').empty();
            $('#item_no').empty();
            $('#lantai').append('<option value="0" disabled selected>Processing...</option>');
            $.ajax({
                type: 'GET',
                url: '/ac/lantai/'+tower_id,
                success:function(data){
console.log(data);
                    var isi_data =JSON.parse(data);

                    $('#lantai').empty();
                    $('#lantai').append('<option value="0" disabled selected>Select Floor</option>');
                    isi_data.forEach(element => {
                    $('#lantai').append(`<option value="${element['name']}">${element['name']}</option>`);
                    });

                },
                error:function(data){

                }
            });

        });


    $('#lantai').on('change',function(){
    var lantai_id = $(this).val();
    var tower_id = $('#tower').val();
    $('#lokasi_unit').empty();
    $('#item_no').empty();
    $('#lokasi_unit').append('<option value="0" disabled selected>Processing...</option>');
    $.ajax({
        type: 'GET',
        url: '/ac/lokasi',
        data: {lantai:lantai_id, tower: tower_id},
        success:function(data){
console.log(data);
            var isi_data =JSON.parse(data);

            $('#lokasi_unit').empty();
            $('#lokasi_unit').append('<option value="0" disabled selected>Select Area</option>');
            isi_data.forEach(element => {
            $('#lokasi_unit').append(`<option value="${element['name']}">${element['name']}</option>`);
            });

        },
        error:function(data){
            console.log(data);

        }
    });

});

$('#lokasi_unit').on('change',function(){
    var item_id = $(this).val();
    $('#item_no').empty();
    $('#item_no').append('<option value="0" disabled selected>Processing...</option>');
    $.ajax({
        type: 'GET',
        url: '/ac/item/'+item_id,
        success:function(data){
console.log(data);
            var isi_data =JSON.parse(data);

            $('#item_no').empty();
            $('#item_no').append('<option value="0" disabled selected>Select item no</option>');
            isi_data.forEach(element => {
            $('#item_no').append(`<option value="${element['name']}">${element['name']}</option>`);
            });

        },
        error:function(data){

        }
    });

});

    </script>

    <!-- JAVASCRIPT -->
    @endsection

