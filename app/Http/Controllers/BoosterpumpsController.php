<?php

namespace App\Http\Controllers;

use App\Boosterpump;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Carbon\Carbon;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\BoosterpumpExport;
use Maatwebsite\Excel\Facades\Excel;
class BoosterpumpsController extends Controller
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
                    $data = Boosterpump::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Boosterpump::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Boosterpump::orderBy('created_at', 'desc')->get();
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
        return view('boosterpump.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/boosterpump.create');
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
            'shift'=>'required',
            'teknisi'=>'required',
            'spv'=>'required',
            'valvehisappompa1'=>'required',
            'valvehisappompa2'=>'required',
            'valvesuplypompa1'=>'required',
            'valvesuplypompa2'=>'required',
            'selektorpompa1'=>'required',
            'selektorpompa2'=>'required',
            'kondisi'=>'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = array(
            'shift'=>$request->shift,
            'teknisi'=>$request->teknisi,
            'spv'=>$request->spv,
            'valvehisappompa1'=>$request->valvehisappompa1,
            'valvehisappompa2'=>$request->valvehisappompa2,
            'valvesuplypompa1'=>$request->valvesuplypompa1,
            'valvesuplypompa2'=>$request->valvesuplypompa2,
            'selektorpompa1'=>$request->selektorpompa1,
            'selektorpompa2'=>$request->selektorpompa2,
            'kondisi'=>$request->kondisi
        );

        $data = Boosterpump::updateOrCreate(['id' => $id], $data);
        return response()->json(['success' => $data]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boosterpump  $Boosterpump
     * @return \Illuminate\Http\Response
     */
    public function show(Boosterpump $boosterpump)

{
       return view('/boosterpump.view',compact('boosterpump'));

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boosterpump  $Boosterpump
     * @return \Illuminate\Http\Response
     */
    public function edit(Boosterpump $boosterpump)
    {
        $where = array('id' => $boosterpump->id);
        $post  = Boosterpump::where($where)->first();

        return response()->json($post, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boosterpump  $Boosterpump
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boosterpump $boosterpump)
    {
        $request->validate([
            'shift'=>'required',
            'teknisi'=>'required',
            'spv'=>'required',
            'valvehisappompa1'=>'required',
            'valvehisappompa2'=>'required',
            'valvesuplypompa1'=>'required',
            'valvesuplypompa2'=>'required',
            'selektorpompa1'=>'required',
            'selektorpompa2'=>'required',
            'kondisi'=>'required']);

        Boosterpump::where ('id', $boosterpump->id)
        ->update([
                    'shift'=>$request->shift,
                    'teknisi'=>$request->teknisi,
                    'spv'=>$request->spv,
                    'valvehisappompa1'=>$request->valvehisappompa1,
                    'valvehisappompa2'=>$request->valvehisappompa2,
                    'valvesuplypompa1'=>$request->valvesuplypompa1,
                    'valvesuplypompa2'=>$request->valvesuplypompa2,
                    'selektorpompa1'=>$request->selektorpompa1,
                    'selektorpompa2'=>$request->selektorpompa2,
                    'kondisi'=>$request->kondisi
                ]);
return redirect('/boosterpump' )->with('toast_info','Logsheet Boosterpump Berhasil Diupdate');

            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boosterpump  $Boosterpump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boosterpump $boosterpump)
    {
        $data = Boosterpump::findOrFail($boosterpump->id);
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
        $nama_file = 'logsheet_Boosterpump_'.$request->from_date.'-'.$request->to_date.'.xlsx';
        // return Excel::download(new dataExport($data), $nama_file);
        return (new BoosterpumpExport($data))->download($nama_file);
    }

}
