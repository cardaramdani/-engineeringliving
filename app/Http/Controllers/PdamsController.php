<?php

namespace App\Http\Controllers;

use App\Pdam;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Carbon\Carbon;
use App\http\Controllers\Controller;
use App\Exports\PdamExport;
use Maatwebsite\Excel\Facades\Excel;
class PdamsController extends Controller
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
                    $data = Pdam::whereDate('created_at','=', $request->from_date)->get();

                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Pdam::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Pdam::orderBy('created_at', 'desc')->get();
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
        return view('pdam.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pdam.create');
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
            'stand'     =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = array(
            'teknisi'        =>  $request->teknisi,
            'shift'         =>  $request->shift,
            'stand'         =>  $request->stand
        );

        $data = Pdam::updateOrCreate(['id' => $id], $data);


        return response()->json(['success' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pdam  $pdam
     * @return \Illuminate\Http\Response
     */
    public function show(Pdam $pdam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pdam  $pdam
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdam $pdam)
    {

        $where = array('id' => $pdam->id);
        $post  = Pdam::where($where)->first();

        // return response()->json($post);
        return response()->json($post, 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pdam  $pdam
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pdam  $pdam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdam $pdam)
    {
        $data = Pdam::findOrFail($pdam->id);
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
            $pdam = $request->all();
            $nama_file = 'logsheet_pdam_'.$request->from_date.'-'.$request->to_date.'.xlsx';
            // return Excel::download(new PdamExport($pdam), $nama_file);
            return (new PdamExport($pdam))->download($nama_file);
        }

    public function teangan(Request $request)
  {
    $cari = $request->get('#');
    $Pdam= Pdam::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/pdam.index', compact('Pdam'));

  }
}
