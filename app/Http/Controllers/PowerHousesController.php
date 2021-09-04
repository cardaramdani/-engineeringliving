<?php

namespace App\Http\Controllers;

use App\PowerHouse;
use App\Pmpanel;
use App\Equipment;
use App\Towers;
use App\Floor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\PowerhouseExport;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
class PowerHousesController extends Controller
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
                    $data = PowerHouse::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = PowerHouse::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = PowerHouse::orderBy('created_at', 'desc')->get();
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
        return view('PowerHouse.index');
    }
    public function indexpm()
    {
        $start = Carbon::now()->subMonth()->subDay('30')->startOfDay()->format('Y-m-d H:i:s');
        $end = Carbon::now()->format('Y-m-d H:i:s');
        $Pmpanel = Pmpanel::orderBy('created_at', 'desc')->Paginate(20);


        return view('/powerhouse.indexpm', compact('Pmpanel', 'start', 'end'));

         }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/powerhouse.create');
            }

    public function createpm()
    {
        $Equipment= Equipment::where('category_system','like','%'."Elektrikal".'%')
                ->orderBy('equipment_name')->get();

        $Floor = Floor::all();
        $Tower = Towers::all();
        return view('/powerhouse.createpm', compact('Floor', 'Equipment', 'Tower'));
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
        $datacatatan = $request->temuan;
        if ($datacatatan==null){
            $temuan ="Nihil";
        }else{$temuan = $datacatatan;
        }
        if($request->teknisi==null){
            $teknisi= Auth::user()->username;
        }else{
            $teknisi = $request->teknisi;
        }
        $rules = array(
            'shift'=> 'required',
            'spv'=> 'required',
            'kwh1'=> 'required',
            'kwh2'=> 'required',
            'kvarh1'=> 'required',
            'kvarh2'=> 'required',
            'ampere1r'=> 'required',
            'ampere2r'=> 'required',
            'ampere1s'=> 'required',
            'ampere2s'=> 'required',
            'ampere1t'=> 'required',
            'ampere2t'=> 'required',
            'v1rs'=> 'required',
            'v2rs'=> 'required',
            'v1st'=> 'required',
            'v2st'=> 'required',
            'v1tr'=> 'required',
            'v2tr'=> 'required',
            'v1rn'=> 'required',
            'v2rn'=> 'required',
            'v1sn'=> 'required',
            'v2sn'=> 'required',
            'v1tn'=> 'required',
            'v2tn'=> 'required',
            'freq1'=> 'required',
            'freq2'=> 'required',
            'selektor1'=> 'required',
            'selektor2'=> 'required',
            'fan1'=> 'required',
            'fan2'=> 'required',
            'pf1'=> 'required',
            'pf2'=> 'required',
            'cap1'=> 'required',
            'cap2'=> 'required',
            'fancap1'=> 'required',
            'fancap2'=> 'required',
            'tempcap1'=> 'required',
            'tempcap2'=> 'required',
            'levelolitrafo1'=> 'required',
            'levelolitrafo2'=> 'required',
            'temptrafo1'=> 'required',
            'temptrafo2'=> 'required',

        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data=array(
            'teknisi'=> $teknisi,
            'shift'=> $request->shift,
            'spv'=> $request->spv,
            'kwh1'=>$request->kwh1,'kwh2'=>$request->kwh2,
            'kva1'=>$request->kva1,'kva2'=>$request->kva2,
            'kvarh1'=>$request->kvarh1,'kvarh2'=>$request->kvarh2,
            'ampere1r'=>$request->ampere1r,'ampere2r'=>$request->ampere2r,'ampere1s'=>$request->ampere1s,'ampere2s'=>$request->ampere2s,'ampere1t'=>$request->ampere1t,'ampere2t'=>$request->ampere2t,
            'v1rs'=>$request->v1rs,'v2rs'=>$request->v2rs,'v1st'=>$request->v1st,'v2st'=>$request->v2st,'v1tr'=>$request->v1tr,'v2tr'=>$request->v2tr,
            'v1rn'=>$request->v1rn,'v2rn'=>$request->v2rn,'v1sn'=>$request->v1sn,'v2sn'=>$request->v2sn,'v1tn'=>$request->v1tn,'v2tn'=>$request->v2tn,
            'freq1'=>$request->freq1,'freq2'=>$request->freq2,
            'selektor1'=>$request->selektor1,'selektor2'=>$request->selektor2,
            'fan1'=>$request->fan1,'fan2'=>$request->fan2,
            'pf1'=>$request->pf1,'pf2'=>$request->pf2,
            'cap1'=>$request->cap1,'cap2'=>$request->cap2,
            'fancap1'=>$request->fancap1,'fancap2'=>$request->fancap2,
            'tempcap1'=>$request->tempcap1,'tempcap2'=>$request->tempcap2,
            'levelolitrafo1'=>$request->levelolitrafo1,'levelolitrafo2'=>$request->levelolitrafo2,
            'temptrafo1'=>$request->temptrafo1,'temptrafo2'=>$request->temptrafo2,
            'temuan'=> $temuan
        );
        $data = PowerHouse::updateOrCreate(['id' => $id], $data);
        return response()->json(['success' => $data]);
    }

     public function storepm(Request $request)
    {
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
        $pmPowerHouse= Pmpanel::create([
            'teknisi'=> $request->teknisi,
            'jadwalpm'=> $request->jadwalpm,
            'planpm'=> $request->planpm,
            'tower'=> $request->tower,
            'lantai'=> $request->lantai,
            'nama_panel'=> $request->nama_panel,
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
            'l16'=>$request->l16,
            'l17'=>$request->l17,
            'l18'=> $request->l18,
            'l19'=> $request->l19,
            'l20'=> $request->l20,

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

        ]);
        return redirect('/pmpanel' )->with('toast_success','Form PM Panel Berhasil Ditambahkan');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\PowerHouse  $powerHouse
     * @return \Illuminate\Http\Response
     */
    public function show(PowerHouse $powerHouse)
    {
        return view('/powerhouse.view', compact('powerHouse'));
        //
    }

    public function showpm(Pmpanel $pmpanel)
    {
        $Floor = Floor::all();
        $Tower = Towers::all();
        $Equipment = Equipment::all();
        return view('/powerhouse.viewpm', compact('pmpanel', 'Floor', 'Equipment', 'Tower'));
    }

    public function search(Request $request)
    {
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= PowerHouse::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $PowerHouse =  $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);

   return view('/powerhouse.filter', compact('PowerHouse'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PowerHouse  $powerHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(PowerHouse $powerHouse)
    {
        $where = array('id' => $powerHouse->id);
        $post  = PowerHouse::where($where)->first();

        return response()->json($post, 200);
    }

    public function editpm(Pmpanel $pmpanel)
    {
        $Floor = Floor::all();
        $Tower = Towers::all();
        $Equipment = Equipment::all();
        return view('/powerhouse.editpm', compact('pmpanel', 'Floor', 'Equipment', 'Tower'));
    }

    public function updatepm(Request $request,Pmpanel $pmpanel){
        Pmpanel::where ('id', $pmpanel->id)
        ->update([
                    'teknisi'=> $request->teknisi,
                    'jadwalpm'=> $request->jadwalpm,
                    'planpm'=> $request->planpm,
                    'tower'=> $request->tower,
                    'lantai'=> $request->lantai,
                    'nama_panel'=> $request->nama_panel,
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
                    'l16'=>$request->l16,
                    'l17'=>$request->l17,
                    'l18'=> $request->l18,
                    'l19'=> $request->l19,
                    'l20'=> $request->l20,

                    'l1k1'=> $request->l1k1,
                    'l2k2'=> $request->l2k2,
                    'l3k3'=> $request->l3k3,
                    'l4k4'=> $request->l4k4,
                    'l5k5'=> $request->l5k5,
                    'l6k6'=> $request->l6k6,
                    'l7k7'=> $request->l7k7,
                    'l8k8'=> $request->l8k8,
                    'l9k9'=> $request->l9k9,
                    'l10k10'=> $request->l10k10,
                    'l11k11'=> $request->l11k11,
                    'l12k12'=> $request->l12k12,
                    'l13k13'=> $request->l13k13,
                    'l14k14'=> $request->l14k14,
                    'l15k15'=> $request->l15k15,
                    'l16k16'=> $request->l16k16,
                    'l17k17'=> $request->l17k17,
                    'l18k18'=> $request->l18k18,
                    'l19k19'=> $request->l19k19,
                    'l20k20'=> $request->l20k20,

                ]);
            return redirect('/pmpanel' )->with('toast_info','Form PM Panel Berhasil Diupdate');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PowerHouse  $powerHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PowerHouse $powerHouse)
    {
        $data = PowerHouse::findOrFail($powerHouse->id);
        $data->delete();
    }

    public function destroypm(Pmpanel $pmpanel)
    {

    $pmpanel->delete();
    return redirect('/pmpanel' )->with('toast_warning','Form PM Panel Berhasil Didelete');

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
        $nama_file = 'logsheet_Powerhouse_'.$request->from_date.'-'.$request->to_date.'.xlsx';
        // return Excel::download(new dataExport($data), $nama_file);
        return (new PowerhouseExport($data))->download($nama_file);
    }

    public function exportpm(Request $request){
        $pmpanel = $request;
        return view('/powerhouse.exportpm', compact('pmpanel'));
    }

    public function fillter(Request $request)
    {
        $cari = $request->get('cari');
        $start = $request->get('startdate');
        $end = $request->get('todate');
        //kondisi search kosong
        if ($cari==null)
        {
            if ($start==null) {
                $Pmpanel = Pmpanel::orderBy('created_at', 'desc')->Paginate(10);
                return view('/powerhouse.indexpm', compact('Pmpanel', 'start', 'end'));
               }
            if ($start > 0) {
                if ($end > 0) {
                    $start=$request->startdate;
                    $end=$request->todate;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $start.' '.$menitawal;
                    $tungtungkaping=$end.' '.$menitakhir;
                    $Pmpanel= Pmpanel::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
                    return view('/powerhouse/indexpm', compact('Pmpanel','start', 'end'));
                }
                if ($end==null) {
                    $end = Carbon::now()->format('Y-m-d H:i:s');
                    $start=$request->startdate;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $start.' '.$menitawal;
                    $tungtungkaping=$end.' '.$menitakhir;
                    $Pmpanel= Pmpanel::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
                    return view('/powerhouse/indexpm', compact('Pmpanel','start', 'end'));
                }
            }
        }
        //endb kondisi search kosong

        //kondisi search ada
        if ($cari != null) {
           if ($start == null) {
              if ($end == null) {

                $Pmpanel= Pmpanel::where('teknisi','like','%'.$cari.'%')
                ->orWhere('created_at','like','%'.$cari.'%')
                ->orWhere('tower','like','%'.$cari.'%')
                ->orWhere('lantai','like','%'.$cari.'%')
                ->orWhere('nama_panel','like','%'.$cari.'%')
                ->orderBy('created_at', 'desc')->Paginate(10);

               return view('/powerhouse.indexpm', compact('Pmpanel', 'start', 'end'));
              }

           }
           if ($start > 0) {
              if ($end == null) {
                $end = Carbon::now()->format('Y-m-d H:i:s');
                $start=$request->startdate;
                $menitawal="00:00:00";
                $menitakhir="23:59:59";
                $awalkaping= $start.' '.$menitawal;
                $tungtungkaping=$end.' '.$menitakhir;
                $Pmpanel= Pmpanel::where('teknisi','like','%'.$cari.'%')->whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
               return view('/powerhouse.indexpm', compact('Pmpanel', 'start', 'end'));
              }
              if ($end > 0) {

                $start=$request->startdate;
                $menitawal="00:00:00";
                $menitakhir="23:59:59";
                $awalkaping= $start.' '.$menitawal;
                $tungtungkaping=$end.' '.$menitakhir;
                $Pmpanel= Pmpanel::where('teknisi','like','%'.$cari.'%')->whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
               return view('/powerhouse.indexpm', compact('Pmpanel', 'start', 'end'));
            }
           }

        }
    }

  public function teangan(Request $request)
  {
    $cari = $request->get('#');
    $PowerHouse= PowerHouse::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();

   return view('/powerhouse.index', compact('PowerHouse'));

  }
 }
