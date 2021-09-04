<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stp;
use App\User;
use Carbon\Carbon;
use App\http\Controllers\Controller;
use App\pmSTP;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\StpExport;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
class StpController extends Controller
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
                    $data = Stp::whereDate('created_at','=', $request->from_date)->get();
                }
                else{
                    $from_date=$request->from_date;
                    $to_date=$request->to_date;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $from_date.' '.$menitawal;
                    $tungtungkaping=$to_date.' '.$menitakhir;
                    //kita filter dari tanggal awal ke akhir
                    $data = Stp::whereBetween('created_at', array($awalkaping, $tungtungkaping))
                    ->orderBy('created_at', 'desc')->get();
                }
            }
            //load data default
            else
            {
                $data = Stp::orderBy('created_at', 'desc')->get();
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
        return view('stp.index');
    }

    public function indexpm()
    {
        $start = Carbon::now()->subMonth()->subDay('30')->startOfDay()->format('Y-m-d H:i:s');
        $end = Carbon::now()->format('Y-m-d H:i:s');
        $pmSTP = pmSTP::orderBy('created_at', 'desc')->Paginate(6);

        return view('/stp.indexpm', compact('pmSTP', 'start', 'end'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/stp.create');

   }

   public function createpm()
    {

        return view('/stp.createpm');
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
            $catatan ="Nihil";
        }else{$catatan = $datacatatan;
        }
        if($request->teknisi==null){
            $teknisi= Auth::user()->username;
        }else{
            $teknisi = $request->teknisi;
        }
        $rules = array(
            'shift'=> 'required',
            'spv'=> 'required',
            'basketscreen'=> 'required',
            'selektorblower'=> 'required',
            'statusblower1'=> 'required',
            'pressureblower1'=> 'required',
            'statusblower2'=> 'required',
            'pressureblower2'=> 'required',
            'kondisiblower1'=> 'required',
            'kondisiblower2'=> 'required',
            'selektorequalizing'=> 'required',
            'statusequalizing1'=> 'required',
            'statusequalizing2'=> 'required',
            'levelequalizing'=> 'required',
            'kondisiequalizing'=> 'required',
            'selektoreffluent'=> 'required',
            'statuseffluent1'=> 'required',
            'statuseffluent2'=> 'required',
            'leveleffluent'=> 'required',
            'kondisieffluent'=> 'required',
            'selektorfilter'=> 'required',
            'statusfilter1'=> 'required',
            'statusfilter2'=> 'required',
            'intakefan'=> 'required',
            'exhaustfan'=> 'required',
            'standmeter'=> 'required',
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
            'basketscreen'=>$request->basketscreen,
            'selektorblower'=>$request->selektorblower,
            'statusblower1'=>$request->statusblower1,
            'pressureblower1'=>$request->pressureblower1,
            'statusblower2'=>$request->statusblower2,
            'pressureblower2'=>$request->pressureblower2,
            'kondisiblower1'=>$request->kondisiblower1,
            'kondisiblower2'=>$request->kondisiblower2,
            'selektorequalizing'=>$request->selektorequalizing,
            'statusequalizing1'=>$request->statusequalizing1,
            'statusequalizing2'=>$request->statusequalizing2,
            'levelequalizing'=>$request->levelequalizing,
            'kondisiequalizing'=>$request->kondisiequalizing,
            'selektoreffluent'=>$request->selektoreffluent,
            'statuseffluent1'=>$request->statuseffluent1,
            'statuseffluent2'=>$request->statuseffluent2,
            'leveleffluent'=>$request->leveleffluent,
            'kondisieffluent'=>$request->kondisieffluent,
            'selektorfilter'=>$request->selektorfilter,
            'statusfilter1'=>$request->statusfilter1,
            'statusfilter2'=>$request->statusfilter2,
            'intakefan'=>$request->intakefan,
            'exhaustfan'=>$request->exhaustfan,
            'standmeter'=>$request->standmeter,
            'temuan'=> $catatan
        );
        $data = Stp::updateOrCreate(['id' => $id], $data);
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

        $pmSTP= pmSTP::create([
            'teknisi'=> $request->teknisi,
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
            'l16'=>$request->l16,
            'l17'=>$request->l17,
            'l18'=> $request->l18,

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

        ]);
        return redirect('/pmstp' )->with('toast_success','Form PM STP Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stp $stp)
    {
        return view('/stp.view', compact('stp'));

    }

    public function showpm(pmSTP $pmstp)
    {
        return view('/stp.viewpm', compact('pmstp'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Stp $stp)
    {
        $where = array('id' => $stp->id);
        $post  = Stp::where($where)->first();

        return response()->json($post, 200);
    }

    public function editpm(pmSTP $pmstp)
    {
        return view('/stp.editpm', compact('pmstp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stp $stp)
    {
        Stp::where ('id', $stp->id)
        ->update([
                    'teknisi'=> $request->teknisi,
                    'shift'=> $request->shift,
                    'spv'=> $request->spv,
                    'basketscreen'=>$request->basketscreen,
                    'selektorblower'=>$request->selektorblower,
                    'statusblower1'=>$request->statusblower1,
                    'pressureblower1'=>$request->pressureblower1,
                    'statusblower2'=>$request->statusblower2,
                    'pressureblower2'=>$request->pressureblower2,
                    'kondisiblower1'=>$request->kondisiblower1,
                    'kondisiblower2'=>$request->kondisiblower2,
                    'selektorequalizing'=>$request->selektorequalizing,
                    'statusequalizing1'=>$request->statusequalizing1,
                    'statusequalizing2'=>$request->statusequalizing2,
                    'levelequalizing'=>$request->levelequalizing,
                    'kondisiequalizing'=>$request->kondisiequalizing,
                    'selektoreffluent'=>$request->selektoreffluent,
                    'statuseffluent1'=>$request->statuseffluent1,
                    'statuseffluent2'=>$request->statuseffluent2,
                    'leveleffluent'=>$request->leveleffluent,
                    'kondisieffluent'=>$request->kondisieffluent,
                    'selektorfilter'=>$request->selektorfilter,
                    'statusfilter1'=>$request->statusfilter1,
                    'statusfilter2'=>$request->statusfilter2,
                    'intakefan'=>$request->intakefan,
                    'exhaustfan'=>$request->exhaustfan,
                    'standmeter'=>$request->standmeter,
                    'temuan'=> $request->temuan
                ]);
return redirect('/stp' )->with('toast_info','Logsheet STP Berhasil Diupdate');
}

public function updatepm(Request $request, pmSTP $pmstp)
    {
        pmSTP::where ('id', $pmstp->id)
        ->update([
                    'teknisi'=> $request->teknisi,
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
                    'l16'=>$request->l16,
                    'l17'=>$request->l17,
                    'l18'=> $request->l18,

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

                ]);
            return redirect('/pmstp' )->with('toast_info','Form PM STP Berhasil Diupdate');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stp $stp)
    {
        $data = Stp::findOrFail($stp->id);
        $data->delete();
    }

    public function destroypm(pmSTP $pmstp)
    {

    $pmstp->delete();
    return redirect('/pmstp' )->with('toast_warning','Form PM STP Berhasil Didelete');

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
        $nama_file = 'logsheet_STP_'.$request->from_date.'-'.$request->to_date.'.xlsx';
        // return Excel::download(new dataExport($data), $nama_file);
        return (new StpExport($data))->download($nama_file);
    }

    public function exportpm(Request $request){
        $pmstp = $request;
        return view('/stp.exportpm', compact('pmstp'));
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
                $pmSTP = pmSTP::orderBy('created_at', 'desc')->Paginate(10);
                return view('/stp.indexpm', compact('pmSTP', 'start', 'end'));
               }
            if ($start > 0) {
                if ($end > 0) {
                    $start=$request->startdate;
                    $end=$request->todate;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $start.' '.$menitawal;
                    $tungtungkaping=$end.' '.$menitakhir;
                    $pmSTP= pmSTP::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
                    return view('/stp/indexpm', compact('pmSTP','start', 'end'));
                }
                if ($end==null) {
                    $end = Carbon::now()->format('Y-m-d H:i:s');
                    $start=$request->startdate;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $start.' '.$menitawal;
                    $tungtungkaping=$end.' '.$menitakhir;
                    $pmSTP= pmSTP::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
                    return view('/stp/indexpm', compact('pmSTP','start', 'end'));
                }
            }
        }
        //endb kondisi search kosong

        //kondisi search ada
        if ($cari != null) {
           if ($start == null) {
              if ($end == null) {

                $pmSTP= pmSTP::where('teknisi','like','%'.$cari.'%')
                ->orWhere('created_at','like','%'.$cari.'%')
                ->orderBy('created_at', 'desc')->Paginate(10);

               return view('/stp.indexpm', compact('pmSTP', 'start', 'end'));
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
                $pmSTP= pmSTP::where('teknisi','like','%'.$cari.'%')->whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
               return view('/stp.indexpm', compact('pmSTP', 'start', 'end'));
              }
              if ($end > 0) {

                $start=$request->startdate;
                $menitawal="00:00:00";
                $menitakhir="23:59:59";
                $awalkaping= $start.' '.$menitawal;
                $tungtungkaping=$end.' '.$menitakhir;
                $pmSTP= pmSTP::where('teknisi','like','%'.$cari.'%')->whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
               return view('/stp.indexpm', compact('pmSTP', 'start', 'end'));
            }
           }

        }
    }
  public function teangan(Request $request)
  {
    $cari = $request->get('#');
    $Stp= Stp::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/stp.index', compact('Stp'));

  }
}
