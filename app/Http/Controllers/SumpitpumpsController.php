<?php

namespace App\Http\Controllers;

use App\Sumpitpump;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\SumpitExport;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
class SumpitpumpsController extends Controller
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
                    $data = Sumpitpump::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Sumpitpump::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Sumpitpump::orderBy('created_at', 'desc')->get();
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
        return view('sumpitpump.index');
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

        if($request->teknisi==null){
            $teknisi= Auth::user()->username;
        }else{
            $teknisi = $request->teknisi;
        }
        $rules = array(
            'spv'=> 'required',
            'shift'=> 'required',
            'powerpit1'=> 'required',
            'selektorpit1'=> 'required',
            'wlcpit1'=> 'required',
            'kondisipit1'=> 'required',
            'powerpit2'=> 'required',
            'selektorpit2'=> 'required',
            'wlcpit2'=> 'required',
            'kondisipit2'=> 'required',
            'powerpit3'=> 'required',
            'selektorpit3'=> 'required',
            'wlcpit3'=> 'required',
            'kondisipit3'=> 'required',
            'powerpit4'=> 'required',
            'selektorpit4'=> 'required',
            'wlcpit4'=> 'required',
            'kondisipit4'=> 'required',
            'powerpit5'=> 'required',
            'selektorpit5'=> 'required',
            'wlcpit5'=> 'required',
            'kondisipit5'=> 'required',
            'powerpit6'=> 'required',
            'selektorpit6'=> 'required',
            'wlcpit6'=> 'required',
            'kondisipit6'=> 'required',
            'powerpit7'=> 'required',
            'selektorpit7'=> 'required',
            'wlcpit7'=> 'required',
            'kondisipit7'=> 'required',
            'powerpit8'=> 'required',
            'selektorpit8'=> 'required',
            'wlcpit8'=> 'required',
            'kondisipit8'=> 'required',
            'powerpit9'=> 'required',
            'selektorpit9'=> 'required',
            'wlcpit9'=> 'required',
            'kondisipit9'=> 'required',
            'powerpit10'=> 'required',
            'selektorpit10'=> 'required',
            'wlcpit10'=> 'required',
            'kondisipit10'=> 'required',
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = array(
            'spv'=> $request->spv,
            'teknisi'=> $teknisi,
            'shift'=> $request->shift,
            'powerpit1'=> $request->powerpit1,
            'selektorpit1'=> $request->selektorpit1,
            'wlcpit1'=> $request->wlcpit1,
            'kondisipit1'=> $request->kondisipit1,
            'powerpit2'=> $request->powerpit2,
            'selektorpit2'=> $request->selektorpit2,
            'wlcpit2'=> $request->wlcpit2,
            'kondisipit2'=> $request->kondisipit2,
            'powerpit3'=> $request->powerpit3,
            'selektorpit3'=> $request->selektorpit3,
            'wlcpit3'=> $request->wlcpit3,
            'kondisipit3'=> $request->kondisipit3,
            'powerpit4'=> $request->powerpit4,
            'selektorpit4'=> $request->selektorpit4,
            'wlcpit4'=> $request->wlcpit4,
            'kondisipit4'=> $request->kondisipit4,
            'powerpit5'=> $request->powerpit5,
            'selektorpit5'=> $request->selektorpit5,
            'wlcpit5'=> $request->wlcpit5,
            'kondisipit5'=> $request->kondisipit5,
            'powerpit6'=> $request->powerpit6,
            'selektorpit6'=> $request->selektorpit6,
            'wlcpit6'=> $request->wlcpit6,
            'kondisipit6'=> $request->kondisipit6,
            'powerpit7'=> $request->powerpit7,
            'selektorpit7'=> $request->selektorpit7,
            'wlcpit7'=> $request->wlcpit7,
            'kondisipit7'=> $request->kondisipit7,
            'powerpit8'=> $request->powerpit8,
            'selektorpit8'=> $request->selektorpit8,
            'wlcpit8'=> $request->wlcpit8,
            'kondisipit8'=> $request->kondisipit8,
            'powerpit9'=> $request->powerpit9,
            'selektorpit9'=> $request->selektorpit9,
            'wlcpit9'=> $request->wlcpit9,
            'kondisipit9'=> $request->kondisipit9,
            'powerpit10'=> $request->powerpit10,
            'selektorpit10'=> $request->selektorpit10,
            'wlcpit10'=> $request->wlcpit10,
            'kondisipit10'=> $request->kondisipit10,
            );
            $data = Sumpitpump::updateOrCreate(['id' => $id], $data);
            return response()->json(['success' => $data]);
        }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sumpitpump  $sumpitpump
     * @return \Illuminate\Http\Response
     */
    public function edit(Sumpitpump $sumpitpump)
    {
        $where = array('id' => $sumpitpump->id);
        $post  = Sumpitpump::where($where)->first();

        return response()->json($post, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sumpitpump  $sumpitpump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sumpitpump $sumpitpump)
    {
        $data = Sumpitpump::findOrFail($sumpitpump->id);
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
        $nama_file = 'logsheet_sumpit_'.$request->from_date.'-'.$request->to_date.'.xlsx';
        // return Excel::download(new dataExport($data), $nama_file);
        return (new SumpitExport($data))->download($nama_file);
    }

    public function teangan(Request $request)
  {
    $cari = $request->get('#');
    $Sumpitpump= Sumpitpump::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/sumpitpump.index', compact('Sumpitpump'));

  }
}
