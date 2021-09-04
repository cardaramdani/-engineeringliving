<?php

namespace App\Http\Controllers;



use App\User;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Logbook;
use Carbon\Carbon;
use Validator;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\LogbookExport;
use Maatwebsite\Excel\Facades\Excel;
class LogbooksController extends Controller
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
                    $data = Logbook::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Logbook::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Logbook::orderBy('created_at', 'desc')->get();
            }
            return datatables()->of($data)
                        ->addColumn('action1', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';

                            return $button;
                        })
                        ->addColumn('action2', function($data){

                            $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action1','action2'])
                        ->addIndexColumn()
                        ->make(true);
        }
        return view('logbook.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/logbook.create');    }

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
            'shift'     =>  'required',
            'deskripsi'     =>  'required',

        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = array(
            'teknisi'    =>  $teknisi,
            'shift'     =>  $request->shift,
            'deskripsi'     =>  $request->deskripsi,

        );

        $data = Logbook::updateOrCreate(['id' => $id], $data);
        return response()->json(['success' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function show(Logbook $logbook)
    {
        return view('/logbook.view', compact('logbook'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */



    public function edit(Logbook $logbook)
    {
        $where = array('id' => $logbook->id);
        $post  = Logbook::where($where)->first();
        // return response()->json($post);
        return response()->json($post, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logbook $logbook)
    {



        Logbook::where ('id', $logbook->id)
        ->update([
                    'shift'=> $request->shift,
                    'teknisi'=> $request->teknisi,
                    'deskripsi'=> $request->deskripsi
                ]);
        return redirect('/logbook' )->with('toast_info','Logbook Berhasil Diupdate');

            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logbook $logbook)
    {
        $data = Logbook::findOrFail($logbook->id);
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
        $logbook = $request->all();
        $nama_file = 'logbook_'.$request->from_date.'-'.$request->to_date.'.xlsx';
        // return Excel::download(new logbookExport($logbook), $nama_file);
        return (new LogbookExport($logbook))->download($nama_file);
    }

}
