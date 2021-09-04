<?php

namespace App\Http\Controllers;

use App\Transferpump;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\SumpitExport;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
class TransferpumpsController extends Controller
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
                    $data = Transferpump::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Transferpump::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Transferpump::orderBy('created_at', 'desc')->get();
            }
            return datatables()->of($data)
                        ->addColumn('action', function($data){
                            $button = '<div class="btn-group" role="group" aria-label="Basic example"><a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="view" id="view" class="view btn btn-info btn-sm view-post" ><i class="fas fa-eye"></i></a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i></a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></div>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('transferpump.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/transferpump.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;

        if($request->teknisi==null){
            $teknisi= Auth::user()->username;
    }else{
            $teknisi = $request->teknisi;
        }

        $rules = array(
            'valve_tfa'=> 'required',
            'status_tfa'=> 'required',
            'valve_tfb'=> 'required',
            'status_tfb'=> 'required',
            'valve_tfc'=> 'required',
            'status_tfc'=> 'required',
            'valve_tfd'=> 'required',
            'status_tfd'=> 'required',
            'kondisi'=> 'required',
            'spv'=> 'required',
            'shift'=> 'required',
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        $data =array(
            'teknisi'=> $teknisi,
            'spv'=> $request->spv ,
            'shift'=> $request->shift,
            'valve_tfa'=> $request->valve_tfa,
            'status_tfa'=> $request->status_tfa,
            'valve_tfb'=> $request->valve_tfb,
            'status_tfb'=> $request->status_tfb,
            'valve_tfc'=> $request->valve_tfc,
            'status_tfc'=> $request->status_tfc,
            'valve_tfd'=> $request->valve_tfd,
            'status_tfd'=> $request->status_tfd,
            'kondisi'=> $request->kondisi,

        );
        $data = Transferpump::updateOrCreate(['id' => $id], $data);
            return response()->json(['success' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transferpump  $transferpump
     * @return \Illuminate\Http\Response
     */
    public function show(Transferpump $transferpump)
    {
        return view('/transferpump.view', compact('transferpump'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transferpump  $transferpump
     * @return \Illuminate\Http\Response
     */
    public function edit(Transferpump $transferpump)
    {
        $where = array('id' => $transferpump->id);
        $post  = Transferpump::where($where)->first();

        return response()->json($post, 200);

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transferpump  $transferpump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transferpump $transferpump)
    {
        $data = Transferpump::findOrFail($transferpump->id);
        $data->delete();
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
        $data = $request->all();
        $nama_file = 'logsheet_transferpump_'.$request->from_date.'-'.$request->to_date.'.xlsx';
        // return Excel::download(new dataExport($data), $nama_file);
        return (new TransferpumpExport($data))->download($nama_file);
    }

    public function teangan(Request $request)
  {
    $cari = $request->get('#');
    $Transferpump= Transferpump::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/transferpump.index', compact('Transferpump'));

  }
}
