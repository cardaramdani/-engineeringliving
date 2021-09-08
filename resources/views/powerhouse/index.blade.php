@extends('layouts.master')
@section('tambahan_link')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @endsection
    @section('title')
          Power House
    @endsection

    @section('main-container')

    <!-- MULAI CONTAINER -->
    <div class="panel">
        <div class="row">
            <div class="col-md-8">
                <h1 style="font-weight: bold; margin-left: 15px;">POWER HOUSE</h1>
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
            <table class="table table-striped table-bordered table-sm" id="table_powerhouse">
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
                                <form id="form-tambah-edit" name="form-tambah-edit"  class="d-inline offset-md-5" enctype="multipart/form-data">
                                  <tbody>
                                    <thead class="thead-dark" align="center">
                                      <tr style="color: #1ab394">
                                              <th scope="col" align="center" class="align-middle" >Shift</th>
                                              <th scope="col" align="center" class="align-middle" >Item Pengecekan</th>
                                              <th scope="col" align="center" class="align-middle" >Parameter</th>
                                              <th scope="col" align="center" class="align-middle" >PUTR1 </th>
                                              <th scope="col" align="center" class="align-middle" >PUTR2 </th>
                                      </tr>
                                    </thead>
                                <input type="hidden" id="id" name="id" >
                                <input type="hidden" id="teknis" name="teknisi" >
                                <input type="hidden" id="spv" v" name="spv" value="carda">
                                  <tr style="color: #1ab394">
                                    <td scope="col" align="center"   class="font-weight-bold " rowspan="29">
                                      <div class="form-group was-validated">
                                              <select class="custom-select" id="shift"" name="shift" required>
                                              <option value="">Pilih Shift</option>
                                              <option value="Pagi">Pagi</option>
                                              <option value="Siang">Siang</option>
                                              <option value="Malam">Malam</option>
                                              </select>
                                              <div class="invalid-feedback">input data sesuai aktual</div>
                                          </div>
                                    </td>
                                    <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="4">A. POWER METER PUTR</td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">KWH</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Total KWH</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="kwh1" " name="kwh1" placeholder="Stand kwh" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="kwh2" " name="kwh2" placeholder="Stand kwh"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">KVA</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Total Kva</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="kva1" " name="kva1" placeholder="Total kva" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="kva2" " name="kva2" placeholder="Total kva"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>

                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">KVARH</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Total KVarH</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="kvarh1" name="kvarh1" placeholder="Total kvarh" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="kvarh2" name="kvarh2" placeholder="Total kvarh"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Phase R</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">ampere</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="ampere1r" name="ampere1r" placeholder="ampere R" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="ampere2r" name="ampere2r" placeholder="ampere R"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Phase S</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">ampere</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="ampere1s" name="ampere1s" placeholder="ampere S" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="ampere2s" name="ampere2s" placeholder="ampere S"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Phase t</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">ampere</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="ampere1t" name="ampere1t" placeholder="ampere T" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="ampere2t" name="ampere2t" placeholder="ampere T"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">R-S</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v1rs" " name="v1rs" placeholder="Voltage R-S" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v2rs" " name="v2rs" placeholder="Voltage R-S"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">S-T</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v1st" " name="v1st" placeholder="Voltage S-T" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v2st" " name="v2st" placeholder="Voltage S-T"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">T-R</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v1tr" " name="v1tr" placeholder="Voltage T-R" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v2tr" " name="v2tr" placeholder="Voltage T-R"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">R-N</td>
                                    <td scope="col" align="center" >
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v1rn" " name="v1rn" placeholder="Voltage R-N" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v2rn" " name="v2rn" placeholder="Voltage R-N"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">S-N</td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v1sn" " name="v1sn" placeholder="Voltage S-N" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v2sn" " name="v2sn" placeholder="Voltage S-N"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">T-N</td>
                                    <td scope="col" align="center" >
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v1tn" " name="v1tn" placeholder="Voltage T-N" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="v2tn" " name="v2tn" placeholder="Voltage T-N"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">FREQUENCY</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Hz </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="text" class="form-control" id="freq1"" name="freq1" placeholder="FREQUENCY" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="text" class="form-control" id="freq2"" name="freq2" placeholder="FREQUENCY"  required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Selector Panel</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Manual / Off / Auto </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                              <select class="custom-select" id="selektor1" name="selektor1" required >
                                              <option value="">Pilih status</option>
                                              <option value="Manual">Manual</option>
                                              <option >Off</option>
                                              <option value="Auto">Auto</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                      </td>
                                    <td scope="col" align="center">
                                        <div class="form-group was-validated">
                                              <select class="custom-select" id="selektor2" name="selektor2" required >
                                              <option value="">Pilih status</option>
                                              <option value="Manual">Manual</option>
                                              <option >Off</option>
                                              <option value="Auto">Auto</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                      </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Fan Blower panel</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">On / Off </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                              <select class="custom-select" id="fan1"  name="fan1" required >
                                              <option value="">Pilih status</option>
                                              <option value="On">On</option>
                                              <option >Off</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                      </td>
                                    <td scope="col" align="center">
                                        <div class="form-group was-validated">
                                              <select class="custom-select" id="fan2"  name="fan2" required >
                                              <option value="">Pilih status</option>
                                              <option value="On">On</option>
                                              <option >Off</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>

                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="4">B. CAPASITOR BANK</td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Power Factor(cosp)</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">0,86 - 0,99 </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="text" class="form-control" id="pf1"  name="pf1" placeholder="cosp" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                        <div class="form-group was-validated">
                                           <input type="text" class="form-control" id="pf2"  name="pf2" placeholder="cosp" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Step Cap On</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Step 1 - 13 </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="cap1"  name="cap1" placeholder="step on" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="cap2"  name="cap2" placeholder="step on" required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Fan Blowe Panel</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">On / Off </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                              <select class="custom-select" id="fancap1" name="fancap1" required >
                                              <option value="">Pilih status</option>
                                              <option value="On">On</option>
                                              <option >Off</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                    </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">

                                           <select class="custom-select" id="fancap2" name="fancap2" required >
                                              <option value="">Pilih status</option>
                                              <option value="On">On</option>
                                              <option >Off</option>
                                              </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Temperature panel</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Hot / Normal </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                              <select class="custom-select" id="tempcap1" name="tempcap1" required >
                                              <option value="">Pilih status</option>
                                              <option value="Hot">Hot</option>
                                              <option value="Normal">Normal</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                      </td>
                                    <td scope="col" align="center">
                                      <div class="form-group was-validated">
                                           <select class="custom-select" id="tempcap2" name="tempcap2" required >
                                              <option value="">Pilih status</option>
                                              <option value="Hot">Hot</option>
                                              <option value="Normal">Normal</option>
                                              </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="4">C. TRAFO 1</td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Level Oli Trafo</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">High / Medium / Low </td>
                                    <td scope="col" align="center" colspan="2">
                                      <div class="form-group was-validated">
                                              <select class="custom-select" id="levelolitrafo1" name="levelolitrafo1" required >
                                              <option value="">Pilih status</option>
                                              <option value="High">High</option>
                                              <option value="Medium">Medium</option>
                                              <option value="Low">Low</option>
                                              </select>
                                            <div class="invalid-feedback">input data sesuai aktual</div>
                                        </div>
                                      </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Temperature Oli </td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">30 - 60 </td>
                                    <td scope="col" align="center" colspan="2">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="temptrafo1" name="temptrafo1" placeholder="Temperatur oli" required autocomplete="off">
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="4">D. TRAFO 2 </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Level Oli Trafo</td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">High / Medium / Low </td>
                                    <td scope="col" align="center" colspan="2">
                                      <div class="form-group was-validated">

                                           <select class="custom-select" id="levelolitrafo2" name="levelolitrafo2" required >
                                              <option value="">Pilih status</option>
                                              <option value="High">High</option>
                                              <option value="Medium">Medium</option>
                                              <option value="Low">Low</option>
                                              </select>
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="center" class="font-weight-bold align-middle">Temperature Oli </td>
                                    <td scope="col" align="center" class="font-weight-bold align-middle">30 - 60 </td>
                                    <td scope="col" align="center" colspan="2">
                                      <div class="form-group was-validated">
                                           <input type="number" class="form-control" id="temptrafo2" name="temptrafo2" placeholder="Temperatur oli" required autocomplete="off" >
                                          <div class="invalid-feedback">input data sesuai aktual</div>
                                      </div>
                                    </td>
                                </tr>
                                <tr style="color: #1ab394">
                                    <td scope="col" align="left" class="font-weight-bold align-middle" colspan="4">Temuan :
                                           <input type="text" class="form-control" id="temuan" name="temuan" placeholder="Catat di sini jika ada temuan di lapangan">
                                    </td>
                                </tr>
                                  </tbody>
                                </form>
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
<!-- for export all -->
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
            $('#filter').click(function () {
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $('#table_powerhouse').DataTable().destroy();
                    load_data(from_date, to_date);
                } else {
                    alert('Both Date is required');
                }
            });
            $('#refresh').click(function () {
                $('#from_date').val('');
                $('#to_date').val('');
                $('#table_powerhouse').DataTable().destroy();
                load_data();
            });

            $('#export').click(function (e) {
                e.preventDefault();
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if (from_date != '' && to_date != '') {
                    $.ajax({
                        data: {from_date:from_date, to_date:to_date}, //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('powerhouse.export') }}", //url simpan data
                        type: "GET", //karena simpan kita pakai method POST
                        dataType: 'json',

                        complete:function(data){
                            location.href="/powerhouse/export?"+"from_date="+from_date+"&"+"to_date="+to_date;
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
                $('#table_powerhouse').DataTable({
                    processing: true,
                    serverSide: true, //aktifkan server-side
                    ajax: {
                        url: "{{ route('powerhouse.index') }}",
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
            $('#modal-judul').html("ADD POWERHOUSE"); //valuenya tambah pegawai baru
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
                        url: "{{ route('powerhouse.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON

                        success: function (data) { //jika berhasil
                            $('#form-tambah-edit').trigger("reset"); //form reset
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            var oTable = $('#table_powerhouse').dataTable(); //inialisasi datatable
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
            $.get('powerhouse/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("UPDATE POWERHOUSE");
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
                $('#kwh1').val(data.kwh1);
                $('#kwh2').val(data.kwh2);
                $('#kva1').val(data.kva1);
                $('#kva2').val(data.kva2);
                $('#kvarh1').val(data.kvarh1);
                $('#kvarh2').val(data.kvarh2);
                $('#ampere1r').val(data.ampere1r);
                $('#ampere2r').val(data.ampere2r);
                $('#ampere1s').val(data.ampere1s);
                $('#ampere2s').val(data.ampere2s);
                $('#ampere1t').val(data.ampere1t);
                $('#ampere2t').val(data.ampere2t);
                $('#v1rs').val(data.v1rs);
                $('#v2rs').val(data.v2rs);
                $('#v1st').val(data.v1st);
                $('#v2st').val(data.v2st);
                $('#v1tr').val(data.v1tr);
                $('#v2tr').val(data.v2tr);
                $('#v1rn').val(data.v1rn);
                $('#v2rn').val(data.v2rn);
                $('#v1sn').val(data.v1sn);
                $('#v2sn').val(data.v2sn);
                $('#v1tn').val(data.v1tn);
                $('#v2tn').val(data.v2tn);
                $('#freq1').val(data.freq1);
                $('#freq2').val(data.freq2);
                $('#selektor1').val(data.selektor1);
                $('#selektor2').val(data.selektor2);
                $('#fan1').val(data.fan1);
                $('#fan2').val(data.fan2);
                $('#pf1').val(data.pf1);
                $('#pf2').val(data.pf2);
                $('#cap1').val(data.cap1);
                $('#cap2').val(data.cap2);
                $('#fancap1').val(data.fancap1);
                $('#fancap2').val(data.fancap2);
                $('#tempcap1').val(data.tempcap1);
                $('#tempcap2').val(data.tempcap2);
                $('#levelolitrafo1').val(data.levelolitrafo1);
                $('#levelolitrafo2').val(data.levelolitrafo2);
                $('#temptrafo1').val(data.temptrafo1);
                $('#temptrafo2').val(data.temptrafo2);
                $('#temuan').val(data.temuan);
        })
    });

    $('body').on('click', '.view-post', function () {
            var data_id = $(this).data('id');
            $.get('powerhouse/edit/' + data_id,
            function (data) {
                $('#modal-judul').html("DETAIL POWERHOUSE");
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
                $('#kwh1').val(data.kwh1);
                $('#kwh2').val(data.kwh2);
                $('#kva1').val(data.kva1);
                $('#kva2').val(data.kva2);
                $('#kvarh1').val(data.kvarh1);
                $('#kvarh2').val(data.kvarh2);
                $('#ampere1r').val(data.ampere1r);
                $('#ampere2r').val(data.ampere2r);
                $('#ampere1s').val(data.ampere1s);
                $('#ampere2s').val(data.ampere2s);
                $('#ampere1t').val(data.ampere1t);
                $('#ampere2t').val(data.ampere2t);
                $('#v1rs').val(data.v1rs);
                $('#v2rs').val(data.v2rs);
                $('#v1st').val(data.v1st);
                $('#v2st').val(data.v2st);
                $('#v1tr').val(data.v1tr);
                $('#v2tr').val(data.v2tr);
                $('#v1rn').val(data.v1rn);
                $('#v2rn').val(data.v2rn);
                $('#v1sn').val(data.v1sn);
                $('#v2sn').val(data.v2sn);
                $('#v1tn').val(data.v1tn);
                $('#v2tn').val(data.v2tn);
                $('#freq1').val(data.freq1);
                $('#freq2').val(data.freq2);
                $('#selektor1').val(data.selektor1);
                $('#selektor2').val(data.selektor2);
                $('#fan1').val(data.fan1);
                $('#fan2').val(data.fan2);
                $('#pf1').val(data.pf1);
                $('#pf2').val(data.pf2);
                $('#cap1').val(data.cap1);
                $('#cap2').val(data.cap2);
                $('#fancap1').val(data.fancap1);
                $('#fancap2').val(data.fancap2);
                $('#tempcap1').val(data.tempcap1);
                $('#tempcap2').val(data.tempcap2);
                $('#levelolitrafo1').val(data.levelolitrafo1);
                $('#levelolitrafo2').val(data.levelolitrafo2);
                $('#temptrafo1').val(data.temptrafo1);
                $('#temptrafo2').val(data.temptrafo2);
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
                url: "powerhouse/delete/" + dataId, //eksekusi ajax ke url ini
                type: 'delete',
                beforeSend: function () {
                    $('#tombol-hapus').text('Deleting'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#table_powerhouse').dataTable();
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

