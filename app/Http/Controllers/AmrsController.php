<?php

namespace App\Http\Controllers;

use App\Amr;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;
use App\Exports\AmrsExport;
use Maatwebsite\Excel\Facades\Excel;

class AmrsController extends Controller
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
                    $data = Amr::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Amr::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Amr::orderBy('created_at', 'desc')->get();
            }
            return datatables()->of($data)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('amr.index');
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
        $rules = array(
            'teknisi'    =>  'required',
            'shift'     =>  'required',
            'lwbp'     =>  'required',
            'wbp'     =>  'required',
            'kvarh'     =>  'required',
            'cosp'     =>  'required',
            'penalty'     =>  'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = array(
            'teknisi'    =>  $request->teknisi,
            'shift'     =>  $request->shift,
            'lwbp'     =>  $request->lwbp,
            'wbp'     =>  $request->wbp,
            'total'     =>  $request->lwbp+$request->wbp,
            'kvarh'     =>  $request->kvarh,
            'cosp'     =>  $request->cosp,
            'penalty'     =>  $request->penalty,
        );

        $data = Amr::updateOrCreate(['id' => $id], $data);
        return response()->json(['success' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function show(Amr $amr)

{

}





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function edit(Amr $amr)

    {
        $where = array('id' => $amr->id);
        $post  = Amr::where($where)->first();
        // return response()->json($post);
        return response()->json($post, 200);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amr $amr)
    {
        $data = Amr::findOrFail($amr->id);
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
        $Amr = $request->all();
        $nama_file = 'logsheet_Amr_'.$request->from_date.'-'.$request->to_date.'.xlsx';
        // return Excel::download(new AmrExport($Amr), $nama_file);
        return (new AmrsExport($Amr))->download($nama_file);
    }

    public function cari(Request $request)
  {
    $cari = $request->get('#');
    $Amr= Amr::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/amr.index', compact('Amr'));
  }
}
