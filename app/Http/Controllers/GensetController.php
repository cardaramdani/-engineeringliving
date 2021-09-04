<?php

namespace App\Http\Controllers;
use App\Genset;
use App\Pmgenset;
use Carbon\Carbon;
use App\User;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\GensetExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Validator;
class GensetController extends Controller
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
                    $data = Genset::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Genset::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Genset::orderBy('created_at', 'desc')->get();
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
        return view('genset.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/genset.create');
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
            'shift'=> 'required',
            'spv'=> 'required',
            'leveloli'=> 'required',
            'modemodulpkg'=> 'required',
            'levelradiator'=> 'required',
            'odometer'=> 'required',
            'airfilter'=> 'required',
            'pompasolar'=> 'required',
            'valvesolar'=> 'required',
            'voltagecharger'=> 'required',
            'voltageaccu'=> 'required',
            'amf'=> 'required',
            'emergencybutton'=> 'required',
            'bodygenset'=> 'required',
        );
        $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }

        $data = array(
            'teknisi'=> $teknisi,
            'shift'=> $request->shift,
            'spv'=> $request->spv,
            'leveloli'=> $request->leveloli,
            'modemodulpkg'=> $request->modemodulpkg,
            'levelradiator'=> $request->levelradiator,
            'odometer'=> $request->odometer,
            'airfilter'=> $request->airfilter,
            'pompasolar'=> $request->pompasolar,
            'valvesolar'=> $request->valvesolar,
            'voltagecharger'=> $request->voltagecharger,
            'voltageaccu'=> $request->voltageaccu,
            'amf'=> $request->amf,
            'emergencybutton'=> $request->emergencybutton,
            'bodygenset'=> $request->bodygenset,
            'catatan'=> $temuan
        );
        $data = Genset::updateOrCreate(['id' => $id], $data);
        return response()->json(['success' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function show(Genset $genset)
    {
       return view('/genset.view',compact('genset'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function edit(Genset $genset)
    {
        $where = array('id' => $genset->id);
        $post  = Genset::where($where)->first();

        return response()->json($post, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genset $genset)
    {
        $data = Genset::findOrFail($genset->id);
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
        $nama_file = 'logsheet_Genset_'.$request->from_date.'-'.$request->to_date.'.xlsx';
        // return Excel::download(new dataExport($data), $nama_file);
        return (new GensetExport($data))->download($nama_file);
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
                    $data = Pmgenset::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Pmgenset::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Pmgenset::orderBy('created_at', 'desc')->get();
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
        return view('genset.indexpm');
    }

public function editpm(Pmgenset $pmgenset)
    {
        $where = array('id' => $pmgenset->id);
        $post  = Pmgenset::where($where)->first();

        return response()->json($post, 200);
    }
    public function exportpdf(Pmgenset $pmgenset)
    {
        // return view('cwt.exportpdf', compact('cwt'));
        $pdf = PDF::loadview('/genset.exportpdf',compact('pmgenset') )->setPaper('A4','potrait');
        $nama_file = 'PM_GENSET_'.$pmgenset->created_at.'.pdf';
        return $pdf->download($nama_file);
    }

    public function exportxlsx(Pmgenset $pmgenset)
    {
        return view('/genset.exportexcel', compact('pmgenset'));

        // $pdf = PDF::loadview('/cwt.exportpdf',compact('cwt') )->setPaper('A4','potrait');
        // $nama_file = 'PM_CWT_'.$pmac->created_at.'.pdf';
        // return $pdf->download($nama_file);
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
        $datal14k14 = $request->l14k14;if ($datal14k14==null){$l14k14 ="Nihil";}else{$l14k14 = $datal14k14;}
        $datal15k15 = $request->l15k15;if ($datal15k15==null){$l15k15 ="Nihil";}else{$l15k15 = $datal15k15;}
        $datal16k16 = $request->l16k16;if ($datal16k16==null){$l16k16 ="Nihil";}else{$l16k16 = $datal16k16;}
        $datal17k17 = $request->l17k17;if ($datal17k17==null){$l17k17 ="Nihil";}else{$l17k17 = $datal17k17;}
        $datal18k18 = $request->l18k18;if ($datal18k18==null){$l18k18 ="Nihil";}else{$l18k18 = $datal18k18;}
        $datal19k19 = $request->l19k19;if ($datal19k19==null){$l19k19 ="Nihil";}else{$l19k19 = $datal19k19;}
        $datal20k20 = $request->l20k20;if ($datal20k20==null){$l20k20 ="Nihil";}else{$l20k20 = $datal20k20;}
        $datal21k21 = $request->l21k21;if ($datal21k21==null){$l21k21 ="Nihil";}else{$l21k21 = $datal21k21;}
        $datal22k22 = $request->l22k22;if ($datal22k22==null){$l22k22 ="Nihil";}else{$l22k22 = $datal22k22;}
        $datal23k23 = $request->l23k23;if ($datal23k23==null){$l23k23 ="Nihil";}else{$l23k23 = $datal23k23;}
        $datal24k24 = $request->l24k24;if ($datal24k24==null){$l24k24 ="Nihil";}else{$l24k24 = $datal24k24;}
        $datal25k25 = $request->l25k25;if ($datal25k25==null){$l25k25 ="Nihil";}else{$l25k25 = $datal25k25;}
        $datal26k26 = $request->l26k26;if ($datal26k26==null){$l26k26 ="Nihil";}else{$l26k26 = $datal26k26;}
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
            'l14'=> 'required',
            'l15'=> 'required',
            'vr'=> 'required',
            'vs'=> 'required',
            'vt'=> 'required',
            'ampr'=> 'required',
            'amps'=> 'required',
            'ampt'=> 'required',
            'l18'=> 'required',
            'l19'=> 'required',
            'l20'=> 'required',
            'l21'=> 'required',
            'l22'=> 'required',
            'l23'=> 'required',
            'l24'=> 'required',
            'l25'=> 'required',
            'l26'=> 'required',
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
            'l14'=> $request->l14,
            'l15'=> $request->l15,
            'vr'=>$request->vr,
            'vs'=>$request->vs,
            'vt'=>$request->vt,
            'ampr'=>$request->ampr,
            'amps'=>$request->amps,
            'ampt'=>$request->ampt,
            'l18'=> $request->l18,
            'l19'=> $request->l19,
            'l20'=> $request->l20,
            'l21'=> $request->l21,
            'l22'=> $request->l22,
            'l23'=> $request->l23,
            'l24'=> $request->l24,
            'l25'=> $request->l25,
            'l26'=> $request->l26,

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
            'l15k15'=> $l15k15,
            'l16k16'=> $l16k16,
            'l17k17'=> $l17k17,
            'l18k18'=> $l18k18,
            'l19k19'=> $l19k19,
            'l20k20'=> $l20k20,
            'l21k21'=> $l21k21,
            'l22k22'=> $l22k22,
            'l23k23'=> $l23k23,
            'l24k24'=> $l24k24,
            'l25k25'=> $l25k25,
            'l26k26'=> $l26k26,
        );
        $data = Pmgenset::updateOrCreate(['id' => $id], $data);
        return response()->json(['success' => $data]);
    }


public function destroypm(Pmgenset $pmgenset)
    {
        $data = Pmgenset::findOrFail($pmgenset->id);
        $data->delete();
    }


}
