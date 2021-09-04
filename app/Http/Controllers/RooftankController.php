<?php

namespace App\Http\Controllers;

use App\Rooftank;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\http\Controllers\Controller;
class RooftankController extends Controller
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

    public function indexpm()
    {
        $start = Carbon::now()->subMonth()->subDay('30')->startOfDay()->format('Y-m-d H:i:s');
        $end = Carbon::now()->format('Y-m-d H:i:s');
        $Rooftank = Rooftank::orderBy('created_at', 'desc')->Paginate(20);
        
        return view('/rooftank.indexpm', compact('Rooftank', 'start', 'end'));
        
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpm()
    {
         return view('/rooftank.createpm');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        
        $Rooftank= Rooftank::create([
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
              
        ]);
        return redirect('/rooftank' )->with('toast_success','Form PM Rooftank Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooftank  $rooftank
     * @return \Illuminate\Http\Response
     */
    public function showpm(Rooftank $rooftank)
    {
        return view('/rooftank.viewpm', compact('rooftank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooftank  $rooftank
     * @return \Illuminate\Http\Response
     */
    public function editpm(Rooftank $rooftank)
    {
        return view('/rooftank.editpm', compact('rooftank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooftank  $rooftank
     * @return \Illuminate\Http\Response
     */
    public function updatepm(Request $request, Rooftank $rooftank)
    {
        Rooftank::where ('id', $rooftank->id)
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
                    
                ]);
            return redirect('/rooftank' )->with('toast_info','Form PM Rooftank Berhasil Diupdate');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooftank  $rooftank
     * @return \Illuminate\Http\Response
     */
    public function destroypm(Rooftank $rooftank)
    {
        $rooftank->delete();
    return redirect('/rooftank' )->with('toast_warning','Form PM Rooftank Berhasil Didelete');
    }

    public function exportpm(Request $request){

        $rooftank = $request;
        return view('/rooftank.exportpm', compact('rooftank'));          
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
                $Rooftank = Rooftank::orderBy('created_at', 'desc')->Paginate(10);
                return view('/rooftank.indexpm', compact('Rooftank', 'start', 'end'));
               }
            if ($start > 0) {
                if ($end > 0) {
                    $start=$request->startdate;
                    $end=$request->todate;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $start.' '.$menitawal;
                    $tungtungkaping=$end.' '.$menitakhir;
                    $Rooftank= Rooftank::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
                    return view('/rooftank/indexpm', compact('Rooftank','start', 'end'));
                }
                if ($end==null) {
                    $end = Carbon::now()->format('Y-m-d H:i:s');
                    $start=$request->startdate;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $start.' '.$menitawal;
                    $tungtungkaping=$end.' '.$menitakhir;
                    $Rooftank= Rooftank::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
                    return view('/rooftank/indexpm', compact('Rooftank','start', 'end'));
                }
            }
        }
        //endb kondisi search kosong

        //kondisi search ada
        if ($cari != null) {
           if ($start == null) {
              if ($end == null) {

                $Rooftank= Rooftank::where('teknisi','like','%'.$cari.'%')
                ->orWhere('created_at','like','%'.$cari.'%')
                ->orderBy('created_at', 'desc')->Paginate(10);

               return view('/rooftank.indexpm', compact('Rooftank', 'start', 'end'));
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
                $Rooftank= Rooftank::where('teknisi','like','%'.$cari.'%')->whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
               return view('/rooftank.indexpm', compact('Rooftank', 'start', 'end'));
              }
              if ($end > 0) {

                $start=$request->startdate;
                $menitawal="00:00:00";
                $menitakhir="23:59:59";
                $awalkaping= $start.' '.$menitawal;
                $tungtungkaping=$end.' '.$menitakhir;
                $Rooftank= Rooftank::where('teknisi','like','%'.$cari.'%')->whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
               return view('/rooftank.indexpm', compact('Rooftank', 'start', 'end'));
            }
           }

        }
    }
}
