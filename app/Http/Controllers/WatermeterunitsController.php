<?php

namespace App\Http\Controllers;

use App\watermeterunit;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
use File;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\WatermeterExport;
use Maatwebsite\Excel\Facades\Excel;
class WatermeterunitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->ajax()){
            //Jika request from_date ada value(datanya) maka
            if(!empty($request->from_date))
            {
                //Jika tanggal awal(from_date) hingga tanggal akhir(to_date) adalah sama maka
                if($request->from_date === $request->to_date){
                    //kita filter tanggalnya sesuai dengan request from_date
                    $data = watermeterunit::whereDate('created_at','=', $request->from_date)
                    ->get();

                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = watermeterunit::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('Unit', 'desc')->get();

                }
            }
            //load data default
            else
            {
                $data = watermeterunit::orderBy('created_at', 'desc')->get();

            }
            if ($request->to_date != null) {
                return datatables()->of($data)
                        ->addColumn('images', function ($data) {
                            $url= asset('storage/dataIMG_kwhmeterunit'.$data->GambarAwal);
                            return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';})
                        ->addColumn('action1', function($data){
                            $button = '<div class="btn" role="group" aria-label="Basic example"><a href="javascript:void(0)" id="add" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Add"  class="add btn btn-success btn-sm "><i class="fas fa-plus"></i> Add</a>';
                            return $button;
                        })
                        ->addColumn('action2', function($data){
                            $button = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i></a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></div>';
                            return $button;
                        })
                        ->rawColumns(['images','action1','action2'])
                        ->addIndexColumn()
                        ->make(true);
            }else{
                return datatables()->of($data)
                        ->addColumn('images', function ($data) {
                            $url= asset('storage/dataIMG_kwhmeterunit'.$data->GambarAwal);
                            return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';})
                        ->addColumn('action1', function($data){
                            $button = '<div class="btn" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="view" id="view" class="view btn btn-info btn-sm view-post" ><i class="fas fa-eye"></i> view</a>';
                            return $button;
                        })
                        ->addColumn('action2', function($data){
                            $button = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>Delete</button> </div>';
                            return $button;
                        })
                        ->rawColumns(['images','action1','action2'])
                        ->addIndexColumn()
                        ->make(true);
            }
        }

        return view('watermeterunit.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        if ($id == null) {
            $start = Carbon::now()->subMonth()->subDay()->startOfDay()->format('Y-m-d H:i:s');
            $i = 21;
            $tgl = $i++ < 29 ;
            if(Carbon::now()->subMonth()->startOfDay()->format('d') == $tgl){
                $start = Carbon::now()->subMonth()->startOfDay()->format('Y-m-d H:i:s');
            }
            $end = Carbon::now()->format('Y-m-d H:i:s');
            $data = watermeterunit::where('Unit', $request->Unit)
            ->whereBetween('created_at', [$start,$end])
            ->orderBy('Unit')->get();

            $data_unit = count($data);
            if ($data_unit > 1) {
                return response()->json(['errors' => "Data"." ".$data[1]->Unit." "." sudah di input, mohon input unit selanjutnya"]);
            }
        }


        if ($request->teknisi != null) {
            $teknisi = $request->teknisi;
        } else {
            $teknisi = Auth::user()->username;
        }

// start untuk form add
        if ($request->Gambarlama1 == null) {
            if ($request->GambarAwal == null) {
                $GambarAwal = "baruBAST";
                }
            }
//gambar start add bulanan
        if ($request->Gambarlama1 != null) {
            if ($request->GambarAwal == null) {
                $GambarAwal = $request->Gambarlama1;}
            }

        if ($request->Gambarlama2 == null) {
            if ($request->GambarAkhir == null) {
                $validation = Validator::make($request->all(), [
                    'GambarAkhir' => 'required|image|mimes:jpeg,JPEG,png,jpg|max:2048',
                    ]);
                    if($validation->fails())
                    {
                        return response()->json(['errors' => $validation->errors()->all()]);
                    }
                }
            }
            if ($request->Gambarlama2 == null) {
                if ($request->GambarAkhir != null ) {
                    $validation = Validator::make($request->all(), [
                        'GambarAkhir' => 'required|image|mimes:jpeg,JPEG,png,jpg|max:2048',
                        ]);
                        if($validation->fails())
                        {
                            return response()->json(['errors' => $validation->errors()->all()]);
                        }
                        $filegambar = $request->file('GambarAkhir');
                        $nama_file = time().".".$filegambar->getClientOriginalExtension();
                        $tujuan_upload = 'dataIMG_watermeterunit';
                        $filegambar->move($tujuan_upload,$nama_file);
                        $GambarAkhir = $nama_file;
                    }
                }
// end untuk form add

//startd yntuk form edit
                if ($request->Gambarlama2 != null) {
                    if ($request->GambarAkhir == null ) {
                        $GambarAkhir= $request->Gambarlama2;
                        }
                    }
                if ($request->Gambarlama2 != null) {
                    if ($request->GambarAkhir != null ) {
                        if(File::exists(public_path('dataIMG_watermeterunit/'.$request->Gambarlama2)))
                        {
                        File::delete(public_path('dataIMG_watermeterunit/'.$request->Gambarlama2));
                        }else{
                        return response()->json(['errors'=>'Pict Gagal Didelete']);
                        }
                        $validation = Validator::make($request->all(), [
                            'GambarAkhir' => 'required|image|mimes:jpeg,JPEG,png,jpg|max:2048',
                            ]);
                            if($validation->fails())
                            {
                                return response()->json(['errors' => $validation->errors()->all()]);
                            }
                            $filegambar = $request->file('GambarAkhir');
                            $nama_file = time().".".$filegambar->getClientOriginalExtension();
                            $tujuan_upload = 'dataIMG_watermeterunit';
                            $filegambar->move($tujuan_upload,$nama_file);
                            $GambarAkhir = $nama_file;
                    }
                }

        $validation = Validator::make($request->all(), [
            'Unit'=>'required',
            'NoSeri'=>'required',
            'StandAwal'=>'required',
            'StandAkhir'=>'required',
            'TanggalBAST'=>'required',
           ]);
           if($validation->fails())
           {
               return response()->json(['errors' => $validation->errors()->all()]);
           }

           if($validation->passes()){
                $data = array(
                    'Unit'=> $request->Unit,
                    'teknisi'=> $teknisi,
                    'NoSeri'=> $request->NoSeri,
                    'StandAwal'=> $request->StandAwal,
                    'GambarAwal'=>$GambarAwal,
                    'StandAkhir'=>$request->StandAkhir,
                    'GambarAkhir'=>$GambarAkhir,
                    'TotalPakai'=> $request->StandAkhir-$request->StandAwal,
                    'TanggalBAST'=> $request->TanggalBAST
                );

                $data = watermeterunit::updateOrCreate(['id' => $id], $data);
                    return response()->json(['success' => 'success']);
                //  return response()->json(['success'=>'success']);
                }
                return response()->json(['errors'=>$validation->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\watermeterunit  $watermeterunit
     * @return \Illuminate\Http\Response
     */
    public function show(watermeterunit $watermeterunit)
    {
        return view('/watermeterunit.createlama', compact('watermeterunit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\watermeterunit  $watermeterunit
     * @return \Illuminate\Http\Response
     */
    public function edit(watermeterunit $watermeterunit)
    {
        $where = array('id' => $watermeterunit->id);
        $post  = watermeterunit::where($where)->first();
        return response()->json($post, 200);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\watermeterunit  $watermeterunit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, watermeterunit $watermeterunit)
    {
        $request->validate([
            'Unit'=>'required',
            'NoSeri'=>'required',
            'StandAwal'=>'required',
            'StandAkhir'=>'required',
            'TanggalBAST'=>'required',
        ]);
        if ($request->GambarAwal==null){$Gambarawal=$request->Gambarlama1;}
        //jika gambar akhir kosong maka gambar akhir = gambarlama 2
        if ($request->GambarAkhir==null)
        {
            $Gambarakhir=$request->Gambarlama2;
        }

        if ($request->GambarAwal > 0)
        {
            $request->validate([
                    'GambarAwal' => 'image|mimes:jpeg,png,jpg|max:2048'
                ]);
            $tmp1 = $request->file('GambarAwal');
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'dataIMG_watermeterunit';
            $Gambarawal = time().".".$tmp1->getClientOriginalName();
            $tmp1->move($tujuan_upload,$Gambarawal);
        }

        if ($request->GambarAkhir > 0)
        {
            $request->validate([
                    'GambarAkhir' => 'image|mimes:jpeg,png,jpg|max:2048'
                ]);
            $tmp2 = $request->file('GambarAkhir');
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'dataIMG_watermeterunit';
            $Gambarakhir = time().".".$tmp2->getClientOriginalName();
            $tmp2->move($tujuan_upload,$Gambarakhir);
            if(File::exists(public_path('dataIMG_watermeterunit/'.$request->Gambarlama2)))
            {
                File::delete(public_path('dataIMG_watermeterunit/'.$request->Gambarlama2));
            }else{
                return back()->with('toast_error','Pict Gagal Diperbarui');
            }
        }

        watermeterunit::where ('id', $watermeterunit->id)
        ->update([
            'Unit'=> $request->Unit,
            'teknisi'=> $request->teknisi,
            'NoSeri'=> $request->NoSeri,
            'StandAwal'=> $request->StandAwal,
            'GambarAwal'=>$Gambarawal,
            'StandAkhir'=>$request->StandAkhir,
            'GambarAkhir'=>$Gambarakhir,
            'TotalPakai'=> $request->StandAkhir-$request->StandAwal,
            'TanggalBAST'=> $request->TanggalBAST
                ]);
        return redirect('/watermeterunit' )->with('toast_info','Watermeter Unit Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\watermeterunit  $watermeterunit
     * @return \Illuminate\Http\Response
     */
    public function destroy(watermeterunit $watermeterunit)
    {
        if(File::exists(public_path('dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir)))
        {
        File::delete(public_path('dataIMG_watermeterunit/'.$watermeterunit->GambarAkhir));
        }else{
        return response()->json(['errors'=>'Pict Gagal Didelete']);
    }
        $data = watermeterunit::findOrFail($watermeterunit->id);
        $data->delete();
        return response()->json(['warning' => 'Deleted Success']);

        //  $watermeterunit->delete();
        // return redirect('/watermeterunit' )->with('toast_warning','Watermeter Unit Berhasil Didelete');
    }


    public function export(Request $request)
    {
        $rules = array(
            'from_date'    =>  'required',
            'to_date'     =>  'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return $error->errors()->all();
        }
        $Watermeter = $request->all();
        $nama_file = 'watermeter_'.$request->from_date.'_'.$request->to_date.'.xlsx';
        return (new WatermeterExport($Watermeter))->download($nama_file);
    }



}
