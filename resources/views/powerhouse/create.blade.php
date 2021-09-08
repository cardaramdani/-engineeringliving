@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
      Add Logsheet Power House
@endsection

@section('main-container')
    <h1 align="center" class="my-5">Form Logsheet Power House</h1>
            <table class="table table-bordered table-striped">
              <form method="post" action="/PowerHouse/add" >
              @csrf
                <tbody>
                  <thead class="thead-dark" align="center">
                    <tr>

                            <th scope="col" align="center" class="align-middle" >Shift</th>
                            <th scope="col" align="center" class="align-middle" >Item Pengecekan</th>
                            <th scope="col" align="center" class="align-middle" >Batasan Normal</th>
                            <th scope="col" align="center" class="align-middle" >PUTR1 </th>
                            <th scope="col" align="center" class="align-middle" >PUTR2 </th>
                    </tr>
                  </thead>


              <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
              <input type="hidden" name="spv" value="Belum di cross cek">


                <tr>

                  <td scope="col" align="center"   class="font-weight-bold " rowspan="29">
                    <div class="form-group was-validated">
                            <select class="custom-select" name="shift" required>
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
              <tr>
                  <td scope="col" align="center" class="font-weight-bold align-middle">KWH</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">Total KWH</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="kwh1" placeholder="Stand kwh" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="kwh2" placeholder="Stand kwh"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>
                  <td scope="col" align="center" class="font-weight-bold align-middle">KVA</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">Total Kva</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="kva1" placeholder="Total kva" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="kva2" placeholder="Total kva"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>

              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">KVARH</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">Total KVarH</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="kvarh1" placeholder="Total kvarh" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="kvarh2" placeholder="Total kvarh"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Phase R</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">ampere</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="ampere1r" placeholder="ampere R" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="ampere2r" placeholder="ampere R"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Phase S</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">ampere</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="ampere1s" placeholder="ampere S" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="ampere2s" placeholder="ampere S"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Phase t</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">ampere</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="ampere1t" placeholder="ampere T" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="ampere2t" placeholder="ampere T"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">R-S</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v1rs" placeholder="Voltage R-S" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v2rs" placeholder="Voltage R-S"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">S-T</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v1st" placeholder="Voltage S-T" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v2st" placeholder="Voltage S-T"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">T-R</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v1tr" placeholder="Voltage T-R" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v2tr" placeholder="Voltage T-R"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">R-N</td>
                  <td scope="col" align="center" >
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v1rn" placeholder="Voltage R-N" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v2rn" placeholder="Voltage R-N"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">S-N</td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v1sn" placeholder="Voltage S-N" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v2sn" placeholder="Voltage S-N"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Voltage</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">T-N</td>
                  <td scope="col" align="center" >
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v1tn" placeholder="Voltage T-N" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="v2tn" placeholder="Voltage T-N"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">FREQUENCY</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">Hz </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="text" class="form-control" name="freq1" placeholder="FREQUENCY" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="freq2" placeholder="FREQUENCY"  required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Selector Panel</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">Manual / Off / Auto </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                            <select class="custom-select" name="selektor1" required >
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
                            <select class="custom-select" name="selektor2" required >
                            <option value="">Pilih status</option>
                            <option value="Manual">Manual</option>
                            <option >Off</option>
                            <option value="Auto">Auto</option>
                            </select>
                          <div class="invalid-feedback">input data sesuai aktual</div>
                      </div>

                    </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Fan Blower panel</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">On / Off </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                            <select class="custom-select" name="fan1" required >
                            <option value="">Pilih status</option>
                            <option value="On">On</option>
                            <option >Off</option>
                            </select>
                          <div class="invalid-feedback">input data sesuai aktual</div>
                      </div>
                    </td>
                  <td scope="col" align="center">
                      <div class="form-group was-validated">
                            <select class="custom-select" name="fan2" required >
                            <option value="">Pilih status</option>
                            <option value="On">On</option>
                            <option >Off</option>
                            </select>
                          <div class="invalid-feedback">input data sesuai aktual</div>
                      </div>

                  </td>
              </tr>
              <tr>
                  <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="4">B. CAPASITOR BANK</td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Power Factor(cosp)</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">0,86 - 0,99 </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="text" class="form-control" name="pf1" placeholder="cosp" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                      <div class="form-group was-validated">
                         <input type="text" class="form-control" name="pf2" placeholder="cosp" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>

                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Step Cap On</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">Step 1 - 13 </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="cap1" placeholder="step on" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="cap2" placeholder="step on" required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Fan Blowe Panel</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">On / Off </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">
                            <select class="custom-select" name="fancap1" required >
                            <option value="">Pilih status</option>
                            <option value="On">On</option>
                            <option >Off</option>
                            </select>
                          <div class="invalid-feedback">input data sesuai aktual</div>
                      </div>
                  </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">

                         <select class="custom-select" name="fancap2" required >
                            <option value="">Pilih status</option>
                            <option value="On">On</option>
                            <option >Off</option>
                            </select>
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Temperature panel</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">Hot / Normal </td>
                  <td scope="col" align="center">

                    <div class="form-group was-validated">
                            <select class="custom-select" name="tempcap1" required >
                            <option value="">Pilih status</option>
                            <option value="Hot">Hot</option>
                            <option value="Normal">Normal</option>
                            </select>
                          <div class="invalid-feedback">input data sesuai aktual</div>
                      </div>
                    </td>
                  <td scope="col" align="center">
                    <div class="form-group was-validated">

                         <select class="custom-select" name="tempcap2" required >
                            <option value="">Pilih status</option>
                            <option value="Hot">Hot</option>
                            <option value="Normal">Normal</option>
                            </select>
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>
                  <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="4">C. TRAFO 1</td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Level Oli Trafo</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">High / Medium / Low </td>
                  <td scope="col" align="center" colspan="2">
                    <div class="form-group was-validated">
                            <select class="custom-select" name="levelolitrafo1" required >
                            <option value="">Pilih status</option>
                            <option value="High">High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                            </select>
                          <div class="invalid-feedback">input data sesuai aktual</div>
                      </div>
                    </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Temperature Oli </td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">30 - 60 </td>
                  <td scope="col" align="center" colspan="2">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="temptrafo1" placeholder="Temperatur oli" required autocomplete="off">
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>
                  <td scope="col" align="center"   class="font-weight-bold align-middle" colspan="4">D. TRAFO 2 </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Level Oli Trafo</td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">High / Medium / Low </td>
                  <td scope="col" align="center" colspan="2">
                    <div class="form-group was-validated">

                         <select class="custom-select" name="levelolitrafo2" required >
                            <option value="">Pilih status</option>
                            <option value="High">High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                            </select>
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="center" class="font-weight-bold align-middle">Temperature Oli </td>
                  <td scope="col" align="center" class="font-weight-bold align-middle">30 - 60 </td>
                  <td scope="col" align="center" colspan="2">
                    <div class="form-group was-validated">
                         <input type="number" class="form-control" name="temptrafo2" placeholder="Temperatur oli" required autocomplete="off" >
                        <div class="invalid-feedback">input data sesuai aktual</div>
                    </div>
                  </td>
              </tr>
              <tr>

                  <td scope="col" align="left" class="font-weight-bold align-middle" colspan="4">Temuan :
                         <input type="text" class="form-control" name="temuan" placeholder="Catat di sini jika ada temuan di lapangan">
                  </td>

              </tr>

                </tbody>
                  <tfoot>
                  <button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold align-middle"  type="submit" style="margin-left: inherit;">Submit

                  </tfoot>
              </form>
            </table>
@endsection

