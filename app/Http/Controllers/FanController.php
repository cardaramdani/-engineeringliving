<?php

namespace App\Http\Controllers;

use App\Fan;
use App\Type_fan;
use App\Floor;
use App\Towers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Validator;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
class FanController extends Controller
{
    public function indexcarda()
    {
        return view('/portofolio.portofolio');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexpm(Request $request)
    {
        if($request->ajax()){

            //Jika request from_date ada value(datanya) maka
            if(!empty($request->from_date))
            {
                //Jika tanggal awal(from_date) hingga tanggal akhir(to_date) adalah sama maka
                if($request->from_date === $request->to_date){
                    //kita filter tanggalnya sesuai dengan request from_date
                    $data = Fan::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Fan::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Fan::orderBy('created_at', 'desc')->get();
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
        $Tower = Towers::all();
        return view('fan.indexpm', compact('Tower'));
    }

    public function tower()
    {
            $data = Towers::all();
        // return response()->json(['success'=> $data]);
        echo json_encode($data);
    }
    public function lantai($fan)
    {
        $id_tower = Towers::where('tower', $fan)->get('id');
        $s = $id_tower[0];
        $tower = $s['id'];
        $data = Floor::where('tower_floor_id', $tower)->get();
        echo json_encode($data);
    }
    public function type($fan)
    {
        $id_floor = Floor::where('name', $fan)->get('id');
        $s = $id_floor[0];
        $floor = $s['id'];
        // $nama_lantai = Floor::where('id', $fan)->get('name');
            $data = Type_fan::where('floor_type_id', $floor)->get();
        // return response()->json(['success'=> $data]);
        echo json_encode($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $datal14k14 = $request->l14k14;if ($datal14k14==null){$l14k14 ="Nihil";}else{$l14k14 = $datal14k14;}
        if ($request->teknisi != null) {
            $teknisi = $request->teknisi;
        } else {
            $teknisi = Auth::user()->username;
        }


        $rules = array(
            'jadwalpm'=> 'required',
            'planpm'=> 'required',
            'tower'=> 'required',
            'lantai'=> 'required',
            'type_fan'=> 'required',
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
            'l14'=> 'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        if ($request->tower_baru === $request->tower) {
            $tower= $request->tower_baru;
         }else{
            //  $twr = Towers::where('id', $request->tower)->get('tower');
            //  $s = $twr[0];
            //  $tower = $s['tower'];
            $tower= $request->tower;
         }
         if ($request->lantai_baru === $request->lantai) {
            // $lt = Floor::where('name', $request->lantai)->get('name');
            //  $s = $lt[0];
            //  $lantai = $s['name'];
              $lantai = $request->lantai_baru;

         }else{
              $lantai = $request->lantai;
        // $lt = Floor::where('id', $request->lantai)->get('name');
        //     $s = $lt[0];
        //     $lantai = $s['name'];
         }
        $data= array(
            'teknisi'=> $teknisi,
            'jadwalpm'=> $request->jadwalpm,
            'planpm'=> $request->planpm,
            'tower'=> $tower,
            'lantai'=> $lantai,
            'type_fan'=> $request->type_fan,
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
            'l14'=> $request->l14,


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
            'l14k14'=> $l14k14,

        );
        $data = Fan::updateOrCreate(['id' => $id], $data);

        return response()->json(['success' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function showpm(Fan $fan)
    {
        $Floor = Floor::all();
        $Tower = Towers::all();
        return view('/fan.viewpm', compact('fan', 'Floor', 'Tower'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function editpm(Fan $fan)
    {
        $where = array('id' => $fan->id);
        $post  = Fan::where($where)->first();
        // return response()->json($post);
        return response()->json($post, 200);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function destroypm(Fan $fan)
    {
        $data = Fan::findOrFail($fan->id);
        $data->delete();
    }

    public function exportexcel(Fan $fan)
    {

        // $nama_file = 'PM_AC_'.$pmac->created_at.'.xlsx';
        // return Excel::download(new PmacExport, $nama_file);
        // return (new PmacExport($Pmac))->download($nama_file);
        // $excel = Excel::loadview('/ac.exportpm',compact('Pmac') )->setPaper('A4','potrait');
        // return $excel->download($nama_file);
        return view('/fan.exportexcel', compact('fan'));

    }
    public function exportpdf(Fan $fan)
    {
        // return view('/fan.exportpdf', compact('fan'));
        $pdf = PDF::loadview('/fan.exportpdf',compact('fan') )->setPaper('A4','potrait');
        $nama_file = 'PM_VAC_'.$fan->created_at.'.pdf';
        return $pdf->download($nama_file);
    }


}
