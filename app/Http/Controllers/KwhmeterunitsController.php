<?php

namespace App\Http\Controllers;

use App\Kwhmeterunit;
use App\Kwhcomersile;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
use File;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\KwhunitExport;
use App\Exports\KwhcomersileExport;
use Maatwebsite\Excel\Facades\Excel;
class KwhmeterunitsController extends Controller
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
                    $data = Kwhmeterunit::whereDate('created_at','=', $request->from_date)
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
                    $data = Kwhmeterunit::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('Unit', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Kwhmeterunit::orderBy('created_at', 'desc')->get();
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

        return view('Kwhmeterunit.index');
    }

public function indexcomersile(Request $request)
    {
        if($request->ajax()){
            //Jika request from_date ada value(datanya) maka
            if(!empty($request->from_date))
            {
                //Jika tanggal awal(from_date) hingga tanggal akhir(to_date) adalah sama maka
                if($request->from_date === $request->to_date){
                    //kita filter tanggalnya sesuai dengan request from_date
                    $data = Kwhcomersile::whereDate('created_at','=', $request->from_date)
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
                    $data = Kwhcomersile::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('Unit', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Kwhcomersile::orderBy('created_at', 'desc')->get();
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

        return view('Kwhmeterunit.indexkwhcomersile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
            $data = Kwhmeterunit::where('Unit', $request->Unit)
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
                        $tujuan_upload = 'dataIMG_kwhmeterunit';
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
                        if(File::exists(public_path('dataIMG_kwhmeterunit/'.$request->Gambarlama2)))
                        {
                        File::delete(public_path('dataIMG_kwhmeterunit/'.$request->Gambarlama2));
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
                            $tujuan_upload = 'dataIMG_kwhmeterunit';
                            $filegambar->move($tujuan_upload,$nama_file);
                            $GambarAkhir = $nama_file;
                    }
                }

        $validation = Validator::make($request->all(), [
            'Unit'=>'required',
            'NoSeri'=>'required',
            'Daya'=>'required',
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
                    'Daya'=> $request->Daya,
                    'StandAwal'=> $request->StandAwal,
                    'GambarAwal'=>$GambarAwal,
                    'StandAkhir'=>$request->StandAkhir,
                    'GambarAkhir'=>$GambarAkhir,
                    'TotalPakai'=> $request->StandAkhir-$request->StandAwal,
                    'TanggalBAST'=> $request->TanggalBAST
                );

                $data = Kwhmeterunit::updateOrCreate(['id' => $id], $data);
                    return response()->json(['success' => 'success']);
                //  return response()->json(['success'=>'success']);
                }
                return response()->json(['errors'=>$validation->errors()->all()]);
    }
public function storecomersile(Request $request)
    {
        $id = $request->id;
        $tujuan_upload = 'dataIMG_kwhmeterunit';
        if ($id == null) {
            $start = Carbon::now()->subMonth()->subDay()->startOfDay()->format('Y-m-d H:i:s');
            $i = 21;
            $tgl = $i++ < 29 ;
            if(Carbon::now()->subMonth()->startOfDay()->format('d') == $tgl){
                $start = Carbon::now()->subMonth()->startOfDay()->format('Y-m-d H:i:s');
            }
            $end = Carbon::now()->format('Y-m-d H:i:s');
            $data = Kwhcomersile::where('Unit', $request->Unit)
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
        if ($request->Gambarlama_GambarAwal_lwbp == null) {
            if ($request->GambarAwal_lwbp == null) {
                $GambarAwal_lwbp = "baruBAST";
                }
            }
        if ($request->Gambarlama_GambarAwal_wbp == null) {
            if ($request->GambarAwal_wbp == null) {
                $GambarAwal_wbp = "baruBAST";
                }
            }
//gambar start add bulanan
        if ($request->Gambarlama_GambarAwal_lwbp != null) {
            if ($request->GambarAwal_lwbp == null) {
                $GambarAwal_lwbp = $request->Gambarlama_GambarAwal_lwbp;}
            }
        if ($request->Gambarlama_GambarAwal_wbp != null) {
            if ($request->GambarAwal_wbp == null) {
                $GambarAwal_wbp = $request->Gambarlama_GambarAwal_wbp;}
            }

        if ($request->Gambarlama_GambarAkhir_lwbp == null) {
            if ($request->GambarAkhir_lwbp == null) {
                $validation = Validator::make($request->all(), [
                    'GambarAkhir_lwbp' => 'required|image|mimes:jpeg,JPEG,png,jpg|max:2048',
                    ]);
                    if($validation->fails())
                    {
                        return response()->json(['errors' => $validation->errors()->all()]);
                    }
                }
            }
        if ($request->Gambarlama_GambarAkhir_wbp == null) {
            if ($request->GambarAkhir_wbp == null) {
                $validation = Validator::make($request->all(), [
                    'GambarAkhir_wbp' => 'required|image|mimes:jpeg,JPEG,png,jpg|max:2048',
                    ]);
                    if($validation->fails())
                    {
                        return response()->json(['errors' => $validation->errors()->all()]);
                    }
                }
            }

            if ($request->Gambarlama_GambarAkhir_lwbp == null) {
                if ($request->GambarAkhir_lwbp != null ) {
                    $validation = Validator::make($request->all(), [
                        'GambarAkhir_lwbp' => 'required|image|mimes:jpeg,JPEG,png,jpg|max:2048',
                        ]);
                        if($validation->fails())
                        {
                            return response()->json(['errors' => $validation->errors()->all()]);
                        }
                        $filegambar_GambarAkhir_lwbp = $request->file('GambarAkhir_lwbp');
                        $nama_file_GambarAkhir_lwbp = "lwbp".time().".".$filegambar_GambarAkhir_lwbp->getClientOriginalExtension();
                        $GambarAkhir_lwbp = $nama_file_GambarAkhir_lwbp;
                        $filegambar_GambarAkhir_lwbp->move($tujuan_upload,$nama_file_GambarAkhir_lwbp);
                    }
                }

                if ($request->Gambarlama_GambarAkhir_wbp == null) {
                    if ($request->GambarAkhir_wbp != null ) {
                        $validation = Validator::make($request->all(), [
                            'GambarAkhir_wbp' => 'required|image|mimes:jpeg,JPEG,png,jpg|max:2048',
                            ]);
                            if($validation->fails())
                            {
                            File::delete(public_path('dataIMG_kwhmeterunit/'.$nama_file_GambarAkhir_lwbp));
                            return response()->json(['errors' => $validation->errors()->all()]);
                            }
                            $filegambar_GambarAkhir_wbp = $request->file('GambarAkhir_wbp');
                            $nama_file_GambarAkhir_wbp = "wbp".time().".".$filegambar_GambarAkhir_wbp->getClientOriginalExtension();
                            $GambarAkhir_wbp = $nama_file_GambarAkhir_wbp;
                            $filegambar_GambarAkhir_wbp->move($tujuan_upload,$nama_file_GambarAkhir_wbp);
                        }
                    }
// end untuk form add

//startd yntuk form edit
                if ($request->Gambarlama_GambarAkhir_lwbp != null) {
                    if ($request->GambarAkhir_lwbp == null ) {
                        $GambarAkhir_lwbp= $request->Gambarlama_GambarAkhir_lwbp;
                        }
                    }
                if ($request->Gambarlama_GambarAkhir_wbp != null) {
                    if ($request->GambarAkhir_wbp == null ) {
                        $GambarAkhir_wbp= $request->Gambarlama_GambarAkhir_wbp;
                        }
                    }
                if ($request->Gambarlama_GambarAkhir_lwbp != null) {
                    if ($request->GambarAkhir_lwbp != null ) {
                        if(File::exists(public_path('dataIMG_kwhmeterunit/'.$request->Gambarlama_GambarAkhir_lwbp)))
                        {
                        File::delete(public_path('dataIMG_kwhmeterunit/'.$request->Gambarlama_GambarAkhir_lwbp));
                        }else{
                        return response()->json(['errors'=>'Pict Gagal Didelete']);
                        }
                        $validation = Validator::make($request->all(), [
                            'GambarAkhir_lwbp' => 'required|image|mimes:jpeg,JPEG,png,jpg|max:2048',
                            ]);
                            if($validation->fails())
                            {
                                return response()->json(['errors' => $validation->errors()->all()]);
                            }
                            $filegambar_GambarAkhir_lwbp = $request->file('GambarAkhir_lwbp');
                            $nama_file_GambarAkhir_lwbp = "lwbp".time().".".$filegambar_GambarAkhir_lwbp->getClientOriginalExtension();
                            $GambarAkhir_lwbp = $nama_file_GambarAkhir_lwbp;
                            $filegambar_GambarAkhir_lwbp->move($tujuan_upload,$nama_file_GambarAkhir_lwbp);
                    }
                }

                if ($request->Gambarlama_GambarAkhir_wbp != null) {
                    if ($request->GambarAkhir_wbp != null ) {
                        if(File::exists(public_path('dataIMG_kwhmeterunit/'.$request->Gambarlama_GambarAkhir_wbp)))
                        {
                        File::delete(public_path('dataIMG_kwhmeterunit/'.$request->Gambarlama_GambarAkhir_wbp));
                        }else{
                        return response()->json(['errors'=>'Pict Gagal Didelete']);
                        }
                        $validation = Validator::make($request->all(), [
                            'GambarAkhir_wbp' => 'required|image|mimes:jpeg,JPEG,png,jpg|max:2048',
                            ]);
                            if($validation->fails())
                            {
                                return response()->json(['errors' => $validation->errors()->all()]);
                            }
                            $filegambar_GambarAkhir_wbp = $request->file('GambarAkhir_wbp');
                            $nama_file_GambarAkhir_wbp = "wbp".time().".".$filegambar_GambarAkhir_wbp->getClientOriginalExtension();
                            $GambarAkhir_wbp = $nama_file_GambarAkhir_wbp;
                            $filegambar_GambarAkhir_wbp->move($tujuan_upload,$nama_file_GambarAkhir_wbp);
                    }
                }

        $validation = Validator::make($request->all(), [
            'Unit'=>'required',
            'NoSeri'=>'required',
            'Daya'=>'required',
            'Faktor_kali'=>'required',
            'StandAwal_lwbp'=>'required',
            'StandAwal_wbp'=>'required',
            'StandAkhir_lwbp'=>'required',
            'StandAkhir_wbp'=>'required',
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
                    'Daya'=> $request->Daya,
                    'Faktor_kali'=> $request->Faktor_kali,
                    'StandAwal_lwbp'=> $request->StandAwal_lwbp,
                    'StandAwal_wbp'=> $request->StandAwal_wbp,
                    'StandAkhir_lwbp'=> $request->StandAkhir_lwbp,
                    'StandAkhir_wbp'=> $request->StandAkhir_wbp,
                    'GambarAwal_lwbp'=>$GambarAwal_lwbp,
                    'GambarAwal_wbp'=>$GambarAwal_wbp,
                    'GambarAkhir_lwbp'=>$GambarAkhir_lwbp,
                    'GambarAkhir_wbp'=>$GambarAkhir_wbp,
                    'total'=> ((($request->StandAkhir_lwbp-$request->StandAwal_lwbp)*$request->Faktor_kali)+(($request->StandAkhir_wbp-$request->StandAwal_wbp)*$request->Faktor_kali)),
                    'TanggalBAST'=> $request->TanggalBAST
                );

                $data = Kwhcomersile::updateOrCreate(['id' => $id], $data);
                    return response()->json(['success' => 'success']);
                }
                return response()->json(['errors'=>$validation->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kwhmeterunit  $kwhmeterunit
     * @return \Illuminate\Http\Response
     */
public function show(Kwhmeterunit $kwhmeterunit)
    {
         return view('/kwhmeterunit.filter', compact('kwhmeterunit'));

    }
public function showcomersile(Kwhcomersile $kwhcomersile)
    {
         return view('/kwhmeterunit.createlamacomersile', compact('kwhcomersile'));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kwhmeterunit  $kwhmeterunit
     * @return \Illuminate\Http\Response
     */
public function edit(Kwhmeterunit $kwhmeterunit)
    {
        $where = array('id' => $kwhmeterunit->id);
        $post  = Kwhmeterunit::where($where)->first();
        return response()->json($post, 200);
    }
public function editcomersile(Kwhcomersile $kwhcomersile)
    {
        $where = array('id' => $kwhcomersile->id);
        $post  = Kwhcomersile::where($where)->first();
        return response()->json($post, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kwhmeterunit  $kwhmeterunit
     * @return \Illuminate\Http\Response
     */
public function destroy(Kwhmeterunit $kwhmeterunit)
    {

        if(File::exists(public_path('dataIMG_kwhmeterunit/'.$kwhmeterunit->GambarAkhir)))
        {
        File::delete(public_path('dataIMG_kwhmeterunit/'.$kwhmeterunit->GambarAkhir));
        }else{
        return response()->json(['errors'=>'Pict Gagal Didelete']);
    }
        $data = Kwhmeterunit::findOrFail($kwhmeterunit->id);
        $data->delete();
        return response()->json(['warning' => 'Deleted Success']);
    }

public function destroycomersile(Kwhcomersile $kwhcomersile)
    {
        if(File::exists(public_path('dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAkhir_wbp)))
        {
            File::delete(public_path('dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAkhir_lwbp));
            File::delete(public_path('dataIMG_kwhmeterunit/'.$kwhcomersile->GambarAkhir_wbp));
        }else{
                return response()->json(['errors'=>'Pict Gagal Didelete']);
            }
            $data = Kwhcomersile::findOrFail($kwhcomersile->id);
            $data->delete();
            return response()->json(['warning' => 'Deleted Success']);
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
        $kwhunit = $request->all();
        $nama_file = 'Kwhunit_'.$request->from_date.'_'.$request->to_date.'.xlsx';
        return (new KwhunitExport($kwhunit))->download($nama_file);
    }
public function exportcomersile(Request $request)
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
        $kwhcomersile = $request->all();
        $nama_file = 'Kwhcomersile_'.$request->from_date.'_'.$request->to_date.'.xlsx';
        return (new KwhcomersileExport($kwhcomersile))->download($nama_file);
    }

}
