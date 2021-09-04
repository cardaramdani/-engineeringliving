<?php

namespace App\Http\Controllers;

use App\Firepump;
use App\pmFirepumps;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\FirepumpExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Validator;
class FirepumpsController extends Controller
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
                    $data = Firepump::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Firepump::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Firepump::orderBy('created_at', 'desc')->get();
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
        return view('firepump.index');
    }

    public function indexpm(Request $request)
    {
        if($request->ajax()){

            //Jika request from_date ada value(datanya) maka
            if(!empty($request->from_date))
            {
                //Jika tanggal awal(from_date) hingga tanggal akhir(to_date) adalah sama maka
                if($request->from_date === $request->to_date){
                    //kita filter tanggalnya sesuai dengan request from_date
                    $data = pmFirepumps::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = pmFirepumps::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = pmFirepumps::orderBy('created_at', 'desc')->get();
            }
            if ($request->to_date != null) {
                return datatables()->of($data)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i></a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Export-pdf" id="Export-pdf" class="Export-pdf btn btn-info btn-sm pdf-post" ><i class="fas fa-file-pdf"></i> pdf</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Export-xlsx" id="Export-xlsx" class="Export-xlsx btn btn-info btn-sm xlsx-post" ><i class="fas fa-file-excel"></i> xlsx</a>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
            }else{
                return datatables()->of($data)
                        ->addColumn('action', function($data){
                            $button = '<div class="panel"><a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i></a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></div>';

                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
            }


        }
        return view('firepump.indexpm');
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
        $datatemuan = $request->temuan;
        if($datatemuan==null){
            $temuan="Nihil";
        }else{
            $temuan = $datatemuan;
        }
        if($request->teknisi==null){
            $teknisi= Auth::user()->username;
        }else{
            $teknisi = $request->teknisi;
        }
    $rules = array(
        'spv'=>'required',
        'shift'=>'required',
        'statusjockey'=>'required',
        'selectorjockey'=>'required',
        'valvejockey'=>'required',
        'onpressurejockey'=>'required',
        'ofpressurejockey'=>'required',
        'bodyjockey'=>'required',
        'statuselectric'=>'required',
        'selectorelectric'=>'required',
        'valveelectric'=>'required',
        'onpressureelectric'=>'required',
        'ofpressureelectric'=>'required',
        'bodyelectric'=>'required',
        'statusdiesel'=>'required',
        'selectordiesel'=>'required',
        'valvediesel'=>'required',
        'onpressurediesel'=>'required',
        'ofpressurediesel'=>'required',
        'batterycharger'=>'required',
        'leveloli'=>'required',
        'levelsolar'=>'required',
        'levelradiator'=>'required',
        'aktualpressureheader'=>'required',
    );
    $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }


     $data = array(
        'spv'=>$request->spv,
        'shift'=>$request->shift,
        'teknisi'=>$teknisi,
       'statusjockey'=>$request->statusjockey,
        'selectorjockey'=>$request->selectorjockey,
         'valvejockey'=>$request->valvejockey,
       'onpressurejockey'=>$request->onpressurejockey,
        'ofpressurejockey'=>$request->ofpressurejockey,
         'bodyjockey'=>$request->bodyjockey,

         'statuselectric'=>$request->statuselectric,
          'selectorelectric'=>$request->selectorelectric,
           'valveelectric'=>$request->valveelectric,
            'onpressureelectric'=>$request->onpressureelectric,
             'ofpressureelectric'=>$request->ofpressureelectric,
              'bodyelectric'=>$request->bodyelectric,

     'statusdiesel'=>$request->statusdiesel,
      'selectordiesel'=>$request->selectordiesel,
       'valvediesel'=>$request->valvediesel,
        'onpressurediesel'=>$request->onpressurediesel,
         'ofpressurediesel'=>$request->ofpressurediesel,
          'batterycharger'=>$request->batterycharger,
           'leveloli'=>$request->leveloli,
           'levelsolar'=>$request->levelsolar,
            'levelradiator'=>$request->levelradiator,
             'aktualpressureheader'=>$request->aktualpressureheader,
             'temuan'=>$temuan
                        );
        $data = Firepump::updateOrCreate(['id' => $id], $data);
        return response()->json(['success' => $data]);
     }


    public function storepm(Request $request)
    {
        $id = $request->id;
        $datal1k1 = $request->l1k1;if ($datal1k1==null){$l1k1 ="Nihil";}else{$l1k1 = $datal1k1;}
        $datal2k2 = $request->l2k2;if ($datal2k2==null){$l2k2 ="Nihil";}else{$l2k2 = $datal2k2;}
        $datal3k3 = $request->l3k3;if ($datal3k3==null){$l3k3 ="Nihil";}else{$l3k3 = $datal3k3;}
        $datal4k4 = $request->l4k4;if ($datal4k4==null){$l4k4 ="Nihil";}else{$l4k4 = $datal4k4;}
        $datal5k5 = $request->l5k5;if ($datal5k5==null){$l5k5 ="Nihil";}else{$l5k5 = $datal5k5;}
        $datal6k6 = $request->l6k6;if ($datal6k6==null){$l6k6 ="Nihil";}else{$l6k6 = $datal6k6;}
        $datal7k7 = $request->l7k7;if ($datal7k7==null){$l7k7 ="Nihil";}else{$l7k7 = $datal7k7;}
        $datal8k8 = $request->l8k8;if ($datal8k8==null){$l8k8 ="Nihil";}else{$l8k8 = $datal8k8;}
        $datal9k9 = $request->l9k9;if ($datal9k9==null){$l9k9 ="Nihil";}else{$l9k9 = $datal9k9;}
        $datal10k10 = $request->l10k10;if ($datal10k10==null){$l10k10 ="Nihil";}else{$l10k10 = $datal10k10;}
        $datal11k11 = $request->l11k11;if ($datal11k11==null){$l11k11 ="Nihil";}else{$l11k11 = $datal11k11;}
        $datal12k12 = $request->l12k12;if ($datal12k12==null){$l12k12 ="Nihil";}else{$l12k12 = $datal12k12;}
        $datal13k13 = $request->l13k13;if ($datal13k13==null){$l13k13 ="Nihil";}else{$l13k13 = $datal13k13;}

        if ($request->teknisi != null) {
            $teknisi = $request->teknisi;
        } else {
            $teknisi = Auth::user()->username;
        }
        $rules = array(
            'jadwalpm'=> 'required',
            'planpm'=> 'required',
            'l1'=> 'required',
            'l2'=> 'required',
            'l3'=> 'required',
            'l4'=> 'required',
            'l5'=> 'required',
            'l6'=> 'required',
            'l7'=> 'required',
            'l8'=> 'required',
            'l9'=> 'required',
            'l10'=> 'required',
            'l11'=> 'required',
            'l12'=> 'required',
            'l13'=> 'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data= array(
            'teknisi'=> $teknisi,
            'jadwalpm'=> $request->jadwalpm,
            'planpm'=> $request->planpm,
            'l1'=> $request->l1,
            'l2'=> $request->l2,
            'l3'=> $request->l3,
            'l4'=> $request->l4,
            'l5'=> $request->l5,
            'l6'=> $request->l6,
            'l7'=> $request->l7,
            'l8'=> $request->l8,
            'l9'=> $request->l9,
            'l10'=> $request->l10,
            'l11'=> $request->l11,
            'l12'=> $request->l12,
            'l13'=> $request->l13,

            'l1k1'=> $l1k1,
            'l2k2'=> $l2k2,
            'l3k3'=> $l3k3,
            'l4k4'=> $l4k4,
            'l5k5'=> $l5k5,
            'l6k6'=> $l6k6,
            'l7k7'=> $l7k7,
            'l8k8'=> $l8k8,
            'l9k9'=> $l9k9,
            'l10k10'=> $l10k10,
            'l11k11'=> $l11k11,
            'l12k12'=> $l12k12,
            'l13k13'=> $l13k13,
        );
        $data = pmFirepumps::updateOrCreate(['id' => $id], $data);
        return response()->json(['success' => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Firepump  $firepump
     * @return \Illuminate\Http\Response
     */


    public function edit(Firepump $firepump)
    {
        $where = array('id' => $firepump->id);
        $post  = Firepump::where($where)->first();

        return response()->json($post, 200);
     }

      public function editpm(pmFirepumps $pmfirepumps)
    {
        $where = array('id' => $pmfirepumps->id);
        $post  = pmFirepumps::where($where)->first();

        return response()->json($post, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Firepump  $firepump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Firepump $firepump)
    {
        $data = Firepump::findOrFail($firepump->id);
        $data->delete();
    }

    public function destroypm(pmFirepumps $pmfirepumps)
    {
        $data = pmFirepumps::findOrFail($pmfirepumps->id);
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
        $nama_file = 'logsheet_Firepump_'.$request->from_date.'-'.$request->to_date.'.xlsx';
        // return Excel::download(new dataExport($data), $nama_file);
        return (new FirepumpExport($data))->download($nama_file);
    }

    public function exportpm(Request $request){
        $pmfirepumps = $request;
        return view('/firepump.exportpm', compact('pmfirepumps'));
    }

    public function exportpdf(pmFirepumps $pmfirepumps)
    {
        // return view('cwt.exportpdf', compact('cwt'));
        $pdf = PDF::loadview('/firepump.exportpdf',compact('pmfirepumps') )->setPaper('A4','potrait');
        $nama_file = 'PM_FIREPUMP_'.$pmfirepumps->created_at.'.pdf';
        return $pdf->download($nama_file);
    }

    public function exportxlsx(pmFirepumps $pmfirepumps)
    {
        return view('/firepump.exportexcel', compact('pmfirepumps'));

        // $pdf = PDF::loadview('/cwt.exportpdf',compact('cwt') )->setPaper('A4','potrait');
        // $nama_file = 'PM_CWT_'.$pmac->created_at.'.pdf';
        // return $pdf->download($nama_file);
    }

}
