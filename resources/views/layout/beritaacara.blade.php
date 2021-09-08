@extends('layouts.crud')
@section('link_tambahan')
      
@endsection
@section('title')
      Logsheet berita
@endsection
@section('li_tambahan')
      
      
@endsection
@section('main-container')
<h1>test logbook</h1>
      <div class="table-responsive">
        <form method="post" id="logbook" >
                 <span id="result"></span>
          <table class="table table-bordered table-striped" id="logbook_table">
            <thead>
                <tr>
                  <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
                </tr>
                <tr>
                  <th width="35%">Shift 
                      <div class="form-group was-validated">
                      <select class="custom-select" name="shift" required>
                      <option value="">Pilih shift</option>
                      <option value="Pagi">Pagi</option>
                      <option value="Siang">Siang</option>
                      <option value="Malam">Malam</option>
                      </select>
                      </div>
                   </th>
                </tr>
                <tr>
                    <th width="35%">Deskripsi</th>
                    <th width="30%" >Action</th>
                </tr>
            </thead>
             <tbody>

             </tbody>
               <tfoot>
                <tr>
                  <td  align="right">&nbsp;</td>
                  <td>
                  @csrf

                  <input type="submit" name="save" id="save" class="btn btn-primary" value="submit" />
                 </td>
                </tr>
               </tfoot>
        </table>
      </form>
   </div>
@endsection
@section('script_tambahan')
      <script>
$(document).ready(function(){
 var count = 1;
 dynamic_field(count);
 function dynamic_field(number)
 {
  html = '<tr>';

        // html += '<td><input type="text" name="teknisi[]" class="form-control" value="{{Auth::user()->username }}"/></td>';
        // html += '<td><input type="text" name="shift[]" class="form-control" /></td>';
        html += '<td width="200%" height="100%"><input type="text" name="deskripsi[]" class="form-control"  /></td>';
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#logbook').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:logbook/add,
            method:'POST',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});


// function insert(Request $request)
//     {
//      if($request->ajax()) {
//                           $rules = array(
//                            'shift'  => 'required',
//                            'teknisi'  => 'required',
//                            'deskripsi.*'=>'required'
//                           );

//       $error = Validator::make($request->all(), $rules);
//           if($error->fails())
//       {
//            return response()->json([
//             'error'  => $error->errors()->all()
//            ]);
//       }

//       $shift = $request->shift;
//       $teknisi = $request->teknisi;
//       $deskripsi=$request->deskripsi;
//       for($count = 0; $count < count($deskripsi); $count++)
//       {
//                    $data = array(
//                     'deskripsi' => $deskripsi[$count],
//                     'shift'=>$shift,
//                     'teknisi'=>$teknisi
//                    );

//                    $insert_data[] = $data; 
//       }

//       Logbook::insert($insert_data);
      
//       return response()->json([
//        'success'  => 'Data Berhasil Ditambahkan!!!.'
//       ]);
//      }
//     }


</script>
@endsection
<!-- 
<div class="form-row">
      <div class="form-group ">
        <button type="button" class="btn btn-outline-warning " data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Tutorial..!!
        </button>
      </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tata cara tambah data pencatatan bulanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body align-middle was-validated" align="center">
<h5  class="font-weight-bold " align="center">Cara untuk tambah data pencatatan bulanan</h5>
  <h5  class="font-weight-bold " align="left">1. Klik navbar pojok kiri atas</h5>
  <h5  class="font-weight-bold " align="left">2. Pilih tanggal 21 bulan lalu - 20 bulan sekarang dan klik filter</h5>
  <h5  class="font-weight-bold " align="left">3. Klik tombol ADD pada unit yang akan di tambah data pencatatan bulanan</h5>
  <h5  class="font-weight-bold " align="left">4. Input data sesuai aktual dan tekan tombol submit</h5>
  <h5  class="font-weight-bold " align="left">5. Jika sudah ada keterangan berhasil, klik kembali ke halaman form pencatatan bulanan agar tidak lupa unit terahir yang di catat</h5>
  <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
  </div>
    </div>
  </div>
</div>



@if(Auth::user()->jabatan=='chief')
        <button type="button" class="btn btn-outline-success col-3 offset-md-9 " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Data
        </button>
@endif

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New WaterMeter Unit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body align-middle was-validated" align="center">
       <form action="/watermeterunit/add" method="post" class="d-inline offset-md-10" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
        <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group">
                <label for="TanggalBAST" class="font-weight-bold">Tanggal BAST</label>
                <input type="date" class="form-control" name="TanggalBAST" required autocomplete="off">
            <div class="invalid-feedback">pilih tanggal sesuai aktual</div>
            </div>
        </td>
          <td scope="col" align="center" class="was-validated align-middle">
            <div class="form-group" >
              <label for="Unit" class="font-weight-bold">Unit</label>
             <input type="number" class="form-control" placeholder="Unit" name="Unit"  required autocomplete="off">
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
          <label for="NoSeri" class="font-weight-bold">No Seri</label>
         <input type="text" class="form-control" placeholder="No Seri" name="NoSeri"required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
          <label for="StandAwal" class="font-weight-bold">Stan dAwal</label>
         <input type="number" class="form-control" placeholder="Stand Awal" name="StandAwal" required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="form-group">
          <label for="StandAkhir" class="font-weight-bold">Stand Akhir</label>
         <input type="number" class="form-control" placeholder="Stand Akhir" name="StandAkhir" required autocomplete="off">
          <div class="invalid-feedback">input data sesuai aktual</div>
        </div>
    </td>

    <td scope="col" align="center" class="was-validated align-middle">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="GambarAkhir" id="GambarAkhir" required autocomplete="off">
            <label class="custom-file-label @error('GambarAkhir') is-invalid @enderror" align="left"  for="GambarAkhir">Upload Gambar...</label>
            @error('GambarAkhir')
                  <div class="invalid-feedback">Gagal Upload Max file 2MB</div>
            @enderror   
      </div>
    </td>

    <td>
            <input type="hidden" class="custom-file-input" value="baruBAST" name="GambarAwal" >
    </td>
    
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn-lg btn-primary col-md-12  font-weight-bold"  type="submit">Submit form</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

 -->














<!-- <html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logbook</title>
  
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Logbook</h3>
     <br />
   
  </div>
 </body>
</html>

 -->

