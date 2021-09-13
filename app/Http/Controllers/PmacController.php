<?php

namespace App\Http\Controllers;

use App\Pmac;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use App\Towers;
use App\Floor;
use App\Category_wo;
use App\Category_system;
use App\Rooms;
use App\Unit_ac;
use Illuminate\Support\Facades\Auth;
use Validator;
use PDF;
use App\Exports\PmacExport;
use Maatwebsite\Excel\Facades\Excel;
class PmacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
                    $data = Pmac::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Pmac::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Pmac::orderBy('created_at', 'desc')->get();
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
        // $equipment_ac = "2";
        // $tower_podium = "4";

        // $categories = Rooms::where('equipment_id', $equipment_ac)
        // ->where('tower_id' , $tower_podium )
        // ->get('name');
        $Tower = Towers::all();
        return view('ac.indexpm', compact('Tower'));
    }
    public function indextower()
    {
        $data = Towers::all();
        echo json_encode($data);
    }
    public function indexlantai($id)
    {
        $id_floor = Towers::where('tower', $id)->get('id');
        $s = $id_floor[0];
        $floor = $s['id'];
        $data = Floor::where('tower_floor_id', $floor)->get();
        echo json_encode($data);
    }

    public function indexlokasi(Request $request)
    {
        $lantai = $request->lantai;
        $tower = $request->tower;
        $equipment = "2";
        $id_tower = Towers::where('tower', $tower)->get('id');
        $s = $id_tower[0];
        $tower = $s['id'];
        $id_floor = Floor::where('name', $lantai)->get('id');
        $s = $id_floor[0];
        $floor = $s['id'];
        $data = Rooms::where('tower_id', $tower)
        ->where('floor_id', $floor)
        ->where('equipment_id', $equipment)->get();
        echo json_encode($data);
    }
    public function indexitem($id)
    {
        $id_room = Rooms::where('name', $id)->get('id');
        $s = $id_room[0];
        $room = $s['id'];
        // return response()->json($id, 200);
        $data = Unit_ac::where('room_id', $room)->get();
        echo json_encode($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            'tower'=> 'required',
            'lantai'=> 'required',
            'lokasi_unit'=> 'required',
            'item_no'=> 'required',
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
            'l16'=> 'required',
            'l17'=> 'required',
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

        if ($request->tower_baru === $request->tower) {
            $tower= $request->tower_baru;
         }else{
             // $l_unit = Rooms::where('id', $request->lokasi_unit)->get('name');
             // $s = $l_unit[0];
             // $lokasi_unit = $s['name'];
             $tower = $request->tower;
         }
         if ($request->lantai_baru === $request->lantai) {
            $lantai= $request->lantai_baru;
         }else{
             // $l_unit = Rooms::where('id', $request->lokasi_unit)->get('name');
             // $s = $l_unit[0];
             // $lokasi_unit = $s['name'];
             $lantai = $request->lantai;
         }

        if ($request->lokasi_unit_baru === $request->lokasi_unit) {
           $lokasi_unit= $request->lokasi_unit_baru;
        }else{
            // $l_unit = Rooms::where('id', $request->lokasi_unit)->get('name');
            // $s = $l_unit[0];
            // $lokasi_unit = $s['name'];
            $lokasi_unit = $request->lokasi_unit;
        }

        if ($request->item_no_baru === $request->item_no) {
            $item_no= $request->item_no_baru;
         }else{
             // $l_unit = Rooms::where('id', $request->lokasi_unit)->get('name');
             // $s = $l_unit[0];
             // $lokasi_unit = $s['name'];
             $item_no = $request->item_no;
         }

        $data= array(
            'teknisi'=> $teknisi,
            'jadwalpm'=> $request->jadwalpm,
            'planpm'=> $request->planpm,
            'tower'=> $tower,
            'lantai'=> $lantai,
            'lokasi_unit'=> $lokasi_unit,
            'item_no'=> $item_no,
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
            'l16'=> $request->l16,
            'l17'=> $request->l17,
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
        $data = Pmac::updateOrCreate(['id' => $id], $data);

        return response()->json(['success' => $data]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Pmac  $pmac
     * @return \Illuminate\Http\Response
     */
    public function exportexcel(Pmac $pmac)
    {

        $Pmac = $pmac;
        // $nama_file = 'PM_AC_'.$pmac->created_at.'.xlsx';
        // return Excel::download(new PmacExport, $nama_file);
        // return (new PmacExport($Pmac))->download($nama_file);
        // $excel = Excel::loadview('/ac.exportpm',compact('Pmac') )->setPaper('A4','potrait');
        // return $excel->download($nama_file);
        return view('/ac.exportexcel', compact('Pmac'));

    }
    public function exportpdf(Pmac $pmac)
    {
        $Pmac = $pmac;
        $pdf = PDF::loadview('/ac.exportpdf',compact('Pmac') )->setPaper('A4','potrait');
        $nama_file = 'PM_AC_'.$pmac->created_at.'.pdf';
        return $pdf->download($nama_file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pmac  $pmac
     * @return \Illuminate\Http\Response
     */
    public function edit(Pmac $pmac)
    {
        //
    }

    public function editpm(Pmac $pmac)
    {
        $where = array('id' => $pmac->id);
        $post  = Pmac::where($where)->first();
        // return response()->json($post);
        return response()->json($post, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pmac  $pmac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pmac $pmac)
    {
        //
    }

    public function destroypm(Pmac $pmac)
    {
        $data = Pmac::findOrFail($pmac->id);
        $data->delete();
    }

    public function exportpm(Pmac $pmac){
        return Excel::download(new PmacExport, 'invoices.xlsx');
        // $Pmac = Pmac::findOrFail($pmac->id);
        // $nama_file = 'PM_AC_'.$pmac->created_at.'.xlsx';

        // return (new PmacExport($pmac))->download($nama_file);
    }

}
