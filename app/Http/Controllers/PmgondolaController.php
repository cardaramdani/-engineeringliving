<?php

namespace App\Http\Controllers;

use App\Pmgondola;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\http\Controllers\Controller;
class PmgondolaController extends Controller
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
        $Pmgondola = Pmgondola::orderBy('created_at', 'desc')->Paginate(20);
        
        return view('/pmgondola.indexpm', compact('Pmgondola', 'start', 'end'));
        
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function createpm()
    {
        return view('/pmgondola.createpm');    
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
        
        $Pmgondola= Pmgondola::create([
            'teknisi'=> $request->teknisi, 
            'jadwalpm'=> $request->jadwalpm, 
            'planpm'=> $request->planpm, 
            'lokasi_unit'=> $request->lokasi_unit, 
            'nama_pompa'=> $request->nama_pompa, 
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
            'l21'=> $request->l21, 
            'l22'=> $request->l22, 
            
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
              
        ]);
        return redirect('/gondola' )->with('toast_success','Form PM Gondola Berhasil Ditambahkan'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pmpompa  $pmpompa
     * @return \Illuminate\Http\Response
     */
    public function show(Pmgondola $pmgondola)
    {
        //
    }

    public function showpm(Pmgondola $pmgondola)
    {
        return view('/pmgondola.viewpm', compact('pmgondola'));          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pmpompa  $pmpompa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pmgondola $pmgondola)
    {
        //
    }

    public function editpm(Pmgondola $pmgondola)
    { 
        return view('/pmgondola.editpm', compact('pmgondola'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pmgondola  $pmgondola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pmgondola $pmgondola)
    {
        //
    }

    public function updatepm(Request $request, Pmgondola $pmgondola)
    {
        Pmgondola::where ('id', $pmgondola->id)
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
            return redirect('/gondola' )->with('toast_info','Form PM Gondola Berhasil Diupdate'); 
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pmpompa  $pmpompa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pmgondola $pmgondola)
    {
        //
    }

    public function destroypm(Pmgondola $pmgondola)
    {
        
    $pmgondola->delete();
    return redirect('/gondola' )->with('toast_warning','Form PM Gondola Berhasil Didelete'); 

    }

    public function exportpm(Request $request){
        $pmgondola = $request;
        return view('/pmgondola.exportpm', compact('pmgondola'));          
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
                $Pmgondola = Pmgondola::orderBy('created_at', 'desc')->Paginate(10);
                return view('/pmgondola.indexpm', compact('Pmgondola', 'start', 'end'));
               }
            if ($start > 0) {
                if ($end > 0) {
                    $start=$request->startdate;
                    $end=$request->todate;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $start.' '.$menitawal;
                    $tungtungkaping=$end.' '.$menitakhir;
                    $Pmgondola= Pmgondola::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
                    return view('/pmgondola/indexpm', compact('Pmgondola','start', 'end'));
                }
                if ($end==null) {
                    $end = Carbon::now()->format('Y-m-d H:i:s');
                    $start=$request->startdate;
                    $menitawal="00:00:00";
                    $menitakhir="23:59:59";
                    $awalkaping= $start.' '.$menitawal;
                    $tungtungkaping=$end.' '.$menitakhir;
                    $Pmgondola= Pmgondola::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
                    return view('/pmgondola/indexpm', compact('Pmgondola','start', 'end'));
                }
            }
        }
        //endb kondisi search kosong

        //kondisi search ada
        if ($cari != null) {
           if ($start == null) {
              if ($end == null) {

                $Pmgondola= Pmgondola::where('teknisi','like','%'.$cari.'%')
                ->orWhere('created_at','like','%'.$cari.'%')
                ->orderBy('created_at', 'desc')->Paginate(10);

               return view('/pmgondola.indexpm', compact('Pmgondola', 'start', 'end'));
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
                $Pmgondola= Pmgondola::where('teknisi','like','%'.$cari.'%')->whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
               return view('/pmgondola.indexpm', compact('Pmgondola', 'start', 'end'));
              }
              if ($end > 0) {

                $start=$request->startdate;
                $menitawal="00:00:00";
                $menitakhir="23:59:59";
                $awalkaping= $start.' '.$menitawal;
                $tungtungkaping=$end.' '.$menitakhir;
                $Pmgondola= Pmgondola::where('teknisi','like','%'.$cari.'%')->whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('created_at','desc')->Paginate(10);
               return view('/pmgondola.indexpm', compact('Pmgondola', 'start', 'end'));
            }
           }

        }
    }
}
