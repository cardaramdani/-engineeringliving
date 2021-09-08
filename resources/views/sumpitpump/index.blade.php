@extends('layouts.master')
@section('tambahan_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @endsection
    @section('title')
          SUMPIT
    @endsection

    @section('main-container')

    <!-- MULAI CONTAINER -->
    <div class="panel">
        <div class="row">
            <div class="col-md-8">
                <h1 style="font-weight: bold; margin-left: 15px;">SUMPIT PUMP</h1>
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
            <table class="table table-striped table-bordered table-sm" id="table_sumpit">
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
                                <thead class="thead-dark" align="center">
                                    <input type="hidden" id="spv" name="spv" value="carda">
                                    <input type="hidden" id="teknisi" name="teknisi" >
                                    <input type="hidden" id="id" name="id" >
                                    <tr>
                                        <th scope="col" align="center" class="align-middle">Shift</th>
                                            <td scope="col" align="center" colspan="7" class="was-validated align-middle">
                                              <div class="form-group">
                                              <select class="custom-select" id="shift" name="shift" required>
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

                                        <tr>
                                            <th scope="col" align="center" colspan="4">Sumpit 1</th>
                                        </tr>

                                        <tr>
                                            <th scope="col" align="center" >Power</th>
                                            <th scope="col" align="center" >Selektor</th>
                                            <th scope="col" align="center" >Wlc</th>
                                            <th scope="col" align="center" >Kondisi Pit</th>
                                        </tr>

                                        <tr>
                                            <td scope="col" align="center" class="was-validated align-middle">
                                              <div class="form-group">
                                              <select class="custom-select" id="powerpit1" name="powerpit1" required>
                                              <option value="">Pilih status</option>
                                              <option value="On">On</option>
                                              <option value="Off">Off</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>

                                            <td scope="col" align="center" class="was-validated align-middle">
                                              <div class="form-group">
                                              <select class="custom-select" id="selektorpit1" name="selektorpit1" required>
                                              <option value="">Pilih status</option>
                                              <option value="Auto">Auto</option>
                                              <option value="Off">Off</option>
                                              <option value="Manual">Manual</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>

                                            <td scope="col" align="center" class="was-validated align-middle">
                                              <div class="form-group">
                                              <select class="custom-select" id="wlcpit1" name="wlcpit1" required>
                                              <option value="">Pilih status</option>
                                              <option value="Ok">Ok</option>
                                              <option value="Tidak">Tidak</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>

                                            <td scope="col" align="center" class="was-validated align-middle">
                                              <div class="form-group">
                                              <select class="custom-select" id="kondisipit1" name="kondisipit1" required>
                                              <option value="">Pilih status</option>
                                              <option value="Bersih">Bersih</option>
                                              <option value="Kotor">Kotor</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>


                                        </tr>

                                        <tr>
                                            <th scope="col" align="center" colspan="4">Sumpit 2</th>

                                        </tr>

                                        <tr>
                                            <th scope="col" align="center" >Power</th>
                                            <th scope="col" align="center" >Selektor</th>
                                            <th scope="col" align="center" >Wlc</th>
                                            <th scope="col" align="center" >Kondisi Pit</th>
                                        </tr>

                                        <tr>
                                            <td scope="col" align="center" class="was-validated align-middle">
                                              <div class="form-group">
                                              <select class="custom-select" id="powerpit2" name="powerpit2" required>
                                              <option value="">Pilih status</option>
                                              <option value="On">On</option>
                                              <option value="Off">Off</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>

                                            <td scope="col" align="center"  class="was-validated align-middle">
                                              <div class="form-group">
                                              <select class="custom-select" id="selektorpit2" name="selektorpit2" required>
                                              <option value="">Pilih status</option>
                                              <option value="Auto">Auto</option>
                                              <option value="Off">Off</option>
                                              <option value="Manual">Manual</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>

                                            <td scope="col" align="center"  class="was-validated align-middle">
                                              <div class="form-group">
                                              <select class="custom-select" id="wlcpit2" name="wlcpit2" required>
                                              <option value="">Pilih status</option>
                                              <option value="Ok">Ok</option>
                                              <option value="Tidak">Tidak</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>

                                            <td scope="col" align="center"  class="was-validated align-middle">
                                              <div class="form-group">
                                              <select class="custom-select" id="kondisipit2" name="kondisipit2" required>
                                              <option value="">Pilih status</option>
                                              <option value="Bersih">Bersih</option>
                                              <option value="Kotor">Kotor</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                            </td>


                                        </tr>

                                            <tr>
                                              <th scope="col" align="center" colspan="4">Sumpit 3</th>
                                            </tr>

                                            <tr>
                                              <th scope="col" align="center" >Power</th>
                                              <th scope="col" align="center" >Selektor</th>
                                              <th scope="col" align="center" >Wlc</th>
                                              <th scope="col" align="center" >Kondisi Pit</th>
                                            </tr>

                                            <tr>
                                            <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="powerpit3" name="powerpit3" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="On">On</option>
                                                  <option value="Off">Off</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="selektorpit3" name="selektorpit3" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Auto">Auto</option>
                                                  <option value="Off">Off</option>
                                                  <option value="Manual">Manual</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="wlcpit3" name="wlcpit3" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Ok">Ok</option>
                                                  <option value="Tidak">Tidak</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="kondisipit3" name="kondisipit3" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Bersih">Bersih</option>
                                                  <option value="Kotor">Kotor</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>


                                            </tr>

                                        </tr>
                                    </tr>

                                    <tr>
                                        <th scope="col" align="center" colspan="4">Sumpit 4</th>
                                    </tr>

                                    <tr>
                                      <th scope="col" align="center" >Power</th>
                                      <th scope="col" align="center" >Selektor</th>
                                      <th scope="col" align="center" >Wlc</th>
                                      <th scope="col" align="center" >Kondisi Pit</th>
                                    </tr>

                                    <tr>
                                        <td scope="col" align="center"  class="was-validated align-middle">
                                          <div class="form-group">
                                          <select class="custom-select" id="powerpit4" name="powerpit4" required>
                                          <option value="">Pilih status</option>
                                          <option value="On">On</option>
                                          <option value="Off">Off</option>
                                          </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>

                                        <td scope="col" align="center"  class="was-validated align-middle">
                                          <div class="form-group">
                                          <select class="custom-select" id="selektorpit4" name="selektorpit4" required>
                                          <option value="">Pilih status</option>
                                          <option value="Auto">Auto</option>
                                          <option value="Off">Off</option>
                                          <option value="Manual">Manual</option>
                                          </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>

                                        <td scope="col" align="center"  class="was-validated align-middle">
                                          <div class="form-group">
                                          <select class="custom-select" id="wlcpit4" name="wlcpit4" required>
                                          <option value="">Pilih status</option>
                                          <option value="Ok">Ok</option>
                                          <option value="Tidak">Tidak</option>
                                          </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>

                                        <td scope="col" align="center"  class="was-validated align-middle">
                                          <div class="form-group">
                                          <select class="custom-select" id="kondisipit4" name="kondisipit4" required>
                                          <option value="">Pilih status</option>
                                          <option value="Bersih">Bersih</option>
                                          <option value="Kotor">Kotor</option>
                                          </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                        </td>
                                    </tr>

                                </tr>
                                        <tr>
                                          <th scope="col" align="center" colspan="4">Sumpit 5</th>
                                        </tr>

                                        <tr>

                                            <th scope="col" align="center" >Power</th>
                                            <th scope="col" align="center" >Selektor</th>
                                            <th scope="col" align="center" >Wlc</th>
                                            <th scope="col" align="center" >Kondisi Pit</th>
                                        </tr>

                                        <tr>
                                            <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="powerpit5" name="powerpit5" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="On">On</option>
                                                  <option value="Off">Off</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="selektorpit5" name="selektorpit5" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Auto">Auto</option>
                                                  <option value="Off">Off</option>
                                                  <option value="Manual">Manual</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="wlcpit5" name="wlcpit5" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Ok">Ok</option>
                                                  <option value="Tidak">Tidak</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="kondisipit5" name="kondisipit5" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Bersih">Bersih</option>
                                                  <option value="Kotor">Kotor</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>


                                        </tr>
                                        <tr>
                                            <th scope="col" align="center" colspan="4">Sumpit 6</th>
                                          </tr>
                                        <tr>
                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="powerpit6" name="powerpit6" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="On">On</option>
                                                  <option value="Off">Off</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="selektorpit6" name="selektorpit6" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Auto">Auto</option>
                                                  <option value="Off">Off</option>
                                                  <option value="Manual">Manual</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="wlcpit6" name="wlcpit6" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Ok">Ok</option>
                                                  <option value="Tidak">Tidak</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="kondisipit6" name="kondisipit6" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Bersih">Bersih</option>
                                                  <option value="Kotor">Kotor</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>
                                        </tr>

                                        <tr>
                                          <th scope="col" align="center" colspan="4">Sumpit 7</th>
                                        </tr>

                                        <tr>
                                          <th scope="col" align="center" >Power</th>
                                            <th scope="col" align="center" >Selektor</th>
                                            <th scope="col" align="center" >Wlc</th>
                                            <th scope="col" align="center" >Kondisi Pit</th>
                                        </tr>

                                        <tr>
                                        <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="powerpit7" name="powerpit7" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="On">On</option>
                                                  <option value="Off">Off</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="selektorpit7" name="selektorpit7" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Auto">Auto</option>
                                                  <option value="Off">Off</option>
                                                  <option value="Manual">Manual</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center" class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="wlcpit7" name="wlcpit7" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Ok">Ok</option>
                                                  <option value="Tidak">Tidak</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="kondisipit7" name="kondisipit7" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Bersih">Bersih</option>
                                                  <option value="Kotor">Kotor</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="col" align="center" colspan="4">Sumpit 8</th>

                                          </tr>

                                          <tr>
                                            <th scope="col" align="center" >Power</th>
                                              <th scope="col" align="center" >Selektor</th>
                                              <th scope="col" align="center" >Wlc</th>
                                              <th scope="col" align="center" >Kondisi Pit</th>

                                          </tr>

                                          <tr>


                                                  <td scope="col" align="center"  class="was-validated align-middle">
                                                    <div class="form-group">
                                                    <select class="custom-select" id="powerpit8" name="powerpit8" required>
                                                    <option value="">Pilih status</option>
                                                    <option value="On">On</option>
                                                    <option value="Off">Off</option>
                                                    </select>
                                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                                  </td>

                                                  <td scope="col" align="center"  class="was-validated align-middle">
                                                    <div class="form-group">
                                                    <select class="custom-select" id="selektorpit8" name="selektorpit8" required>
                                                    <option value="">Pilih status</option>
                                                    <option value="Auto">Auto</option>
                                                    <option value="Off">Off</option>
                                                    <option value="Manual">Manual</option>
                                                    </select>
                                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                                  </td>

                                                  <td scope="col" align="center"  class="was-validated align-middle">
                                                    <div class="form-group">
                                                    <select class="custom-select" id="wlcpit8" name="wlcpit8" required>
                                                    <option value="">Pilih status</option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Tidak">Tidak</option>
                                                    </select>
                                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                                  </td>

                                                  <td scope="col" align="center"  class="was-validated align-middle">
                                                    <div class="form-group">
                                                    <select class="custom-select" id="kondisipit8" name="kondisipit8" required>
                                                    <option value="">Pilih status</option>
                                                    <option value="Bersih">Bersih</option>
                                                    <option value="Kotor">Kotor</option>
                                                    </select>
                                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                                  </td>


                                          </tr>

                                        <tr>
                                          <th scope="col" align="center" colspan="4">Sumpit 9</th>
                                        </tr>

                                        <tr>
                                          <th scope="col" align="center" >Power</th>
                                            <th scope="col" align="center" >Selektor</th>
                                            <th scope="col" align="center" >Wlc</th>
                                            <th scope="col" align="center" >Kondisi Pit</th>
                                        </tr>

                                        <tr>
                                        <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="powerpit9" name="powerpit9" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="On">On</option>
                                                  <option value="Off">Off</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="selektorpit9" name="selektorpit9" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Auto">Auto</option>
                                                  <option value="Off">Off</option>
                                                  <option value="Manual">Manual</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="wlcpit9" name="wlcpit9" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Ok">Ok</option>
                                                  <option value="Tidak">Tidak</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>

                                                <td scope="col" align="center"  class="was-validated align-middle">
                                                  <div class="form-group">
                                                  <select class="custom-select" id="kondisipit9" name="kondisipit9" required>
                                                  <option value="">Pilih status</option>
                                                  <option value="Bersih">Bersih</option>
                                                  <option value="Kotor">Kotor</option>
                                                  </select>
                                                  <div class="invalid-feedback">input data sesuai aktual</div>
                                                </td>
                                        </tr>
                                        <tr>
                                            <th scope="col" align="center" colspan="4">Sumpit 10</th>

                                          </tr>

                                          <tr>
                                            <th scope="col" align="center" >Power</th>
                                              <th scope="col" align="center" >Selektor</th>
                                              <th scope="col" align="center" >Wlc</th>
                                              <th scope="col" align="center" >Kondisi Pit</th>
                                          </tr>

                                          <tr>
                                                  <td scope="col" align="center"  class="was-validated align-middle">
                                                    <div class="form-group">
                                                    <select class="custom-select" id="powerpit10" name="powerpit10" required>
                                                    <option value="">Pilih status</option>
                                                    <option value="On">On</option>
                                                    <option value="Off">Off</option>
                                                    </select>
                                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                                  </td>

                                                  <td scope="col" align="center"  class="was-validated align-middle">
                                                    <div class="form-group">
                                                    <select class="custom-select" id="selektorpit10" name="selektorpit10" required>
                                                    <option value="">Pilih status</option>
                                                    <option value="Auto">Auto</option>
                                                    <option value="Off">Off</option>
                                                    <option value="Manual">Manual</option>
                                                    </select>
                                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                                  </td>

                                                  <td scope="col" align="center"  class="was-validated align-middle">
                                                    <div class="form-group">
                                                    <select class="custom-select" id="wlcpit10" name="wlcpit10" required>
                                                    <option value="">Pilih status</option>
                                                    <option value="Ok">Ok</option>
                                                    <option value="Tidak">Tidak</option>
                                                    </select>
                                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                                  </td>

                                                  <td scope="col" align="center"  class="was-validated align-middle">
                                                    <div class="form-group">
                                                    <select class="custom-select" id="kondisipit10" name="kondisipit10" required>
                                                    <option value="">Pilih status</option>
                                                    <option value="Bersih">Bersih</option>
                                                    <option value="Kotor">Kotor</option>
                                                    </select>
                                                    <div class="invalid-feedback">input data sesuai aktual</div>
                                                  </td>
                                          </tr>
                            </thead>
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
                    $('#table_sumpit').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });
            $('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_sumpit').DataTable().destroy();
                load_data();
            });

            $('#export').click(function (e) {
                e.preventDefault();
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $.ajax({
                        data: {from_date:from_date, to_date:to_date}, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('sumpitpump.export') }}", //url simpan data
                        type: "GET", //karena simpan kita pakai method POST
                        dataType: 'json',

                        complete:function(data){
                            location.href="/sumpitpump/export?"+"from_date="+from_date+"&"+"to_date="+to_date;
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
                $('#table_sumpit').DataTable({
                    processing: true,
                    serverSide: true, //aktifkan server-side
                    ajax: {
                        url: "{{ route('sumpitpump.index') }}",
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
            $('#modal-judul').html("ADD SUMPIT"); //valuenya tambah pegawai baru
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
                        url: "{{ route('sumpitpump.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON

                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_sumpit').dataTable(); //inialisasi datatable
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
            $.get('sumpitpump/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("UPDATE SUMPIT");
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
                $('#powerpit1').val(data.powerpit1);
                $('#powerpit2').val(data.powerpit2);
                $('#powerpit3').val(data.powerpit3);
                $('#powerpit4').val(data.powerpit4);
                $('#powerpit5').val(data.powerpit5);
                $('#powerpit6').val(data.powerpit6);
                $('#powerpit7').val(data.powerpit7);
                $('#powerpit8').val(data.powerpit8);
                $('#powerpit9').val(data.powerpit9);
                $('#powerpit10').val(data.powerpit10);
                $('#selektorpit1').val(data.selektorpit1);
                $('#selektorpit2').val(data.selektorpit2);
                $('#selektorpit3').val(data.selektorpit3);
                $('#selektorpit4').val(data.selektorpit4);
                $('#selektorpit5').val(data.selektorpit5);
                $('#selektorpit6').val(data.selektorpit6);
                $('#selektorpit7').val(data.selektorpit7);
                $('#selektorpit8').val(data.selektorpit8);
                $('#selektorpit9').val(data.selektorpit9);
                $('#selektorpit10').val(data.selektorpit10);
                $('#wlcpit1').val(data.wlcpit1);
                $('#wlcpit2').val(data.wlcpit2);
                $('#wlcpit3').val(data.wlcpit3);
                $('#wlcpit4').val(data.wlcpit4);
                $('#wlcpit5').val(data.wlcpit5);
                $('#wlcpit6').val(data.wlcpit6);
                $('#wlcpit7').val(data.wlcpit7);
                $('#wlcpit8').val(data.wlcpit8);
                $('#wlcpit9').val(data.wlcpit9);
                $('#wlcpit10').val(data.wlcpit10);
                $('#kondisipit1').val(data.kondisipit1);
                $('#kondisipit2').val(data.kondisipit2);
                $('#kondisipit3').val(data.kondisipit3);
                $('#kondisipit4').val(data.kondisipit4);
                $('#kondisipit5').val(data.kondisipit5);
                $('#kondisipit6').val(data.kondisipit6);
                $('#kondisipit7').val(data.kondisipit7);
                $('#kondisipit8').val(data.kondisipit8);
                $('#kondisipit9').val(data.kondisipit9);
                $('#kondisipit10').val(data.kondisipit10);
        })
    });

    $('body').on('click', '.view-post', function () {
            var data_id = $(this).data('id');
            $.get('sumpitpump/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("DETAIL SUMPIT");
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
                $('#powerpit1').val(data.powerpit1);
                $('#powerpit2').val(data.powerpit2);
                $('#powerpit3').val(data.powerpit3);
                $('#powerpit4').val(data.powerpit4);
                $('#powerpit5').val(data.powerpit5);
                $('#powerpit6').val(data.powerpit6);
                $('#powerpit7').val(data.powerpit7);
                $('#powerpit8').val(data.powerpit8);
                $('#powerpit9').val(data.powerpit9);
                $('#powerpit10').val(data.powerpit10);
                $('#selektorpit1').val(data.selektorpit1);
                $('#selektorpit2').val(data.selektorpit2);
                $('#selektorpit3').val(data.selektorpit3);
                $('#selektorpit4').val(data.selektorpit4);
                $('#selektorpit5').val(data.selektorpit5);
                $('#selektorpit6').val(data.selektorpit6);
                $('#selektorpit7').val(data.selektorpit7);
                $('#selektorpit8').val(data.selektorpit8);
                $('#selektorpit9').val(data.selektorpit9);
                $('#selektorpit10').val(data.selektorpit10);
                $('#wlcpit1').val(data.wlcpit1);
                $('#wlcpit2').val(data.wlcpit2);
                $('#wlcpit3').val(data.wlcpit3);
                $('#wlcpit4').val(data.wlcpit4);
                $('#wlcpit5').val(data.wlcpit5);
                $('#wlcpit6').val(data.wlcpit6);
                $('#wlcpit7').val(data.wlcpit7);
                $('#wlcpit8').val(data.wlcpit8);
                $('#wlcpit9').val(data.wlcpit9);
                $('#wlcpit10').val(data.wlcpit10);
                $('#kondisipit1').val(data.kondisipit1);
                $('#kondisipit2').val(data.kondisipit2);
                $('#kondisipit3').val(data.kondisipit3);
                $('#kondisipit4').val(data.kondisipit4);
                $('#kondisipit5').val(data.kondisipit5);
                $('#kondisipit6').val(data.kondisipit6);
                $('#kondisipit7').val(data.kondisipit7);
                $('#kondisipit8').val(data.kondisipit8);
                $('#kondisipit9').val(data.kondisipit9);
                $('#kondisipit10').val(data.kondisipit10);
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
                url: "sumpitpump/delete/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Deleting'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_sumpit').dataTable();
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

