<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kwhmeterunit;
use App\DB;
use App\Amr;
use App\http\Controllers\Controller;
class HomescreenController extends Controller
{
    public function index()
            {
              
                return view('/layout.homescreen');
            }
     public function showdefect()
            {
              
               $Amr = Amr::select(\DB::raw("COUNT(*) as count"))
                            ->whereYear('created_at', date('Y'))
                            ->groupBy(\DB::raw("Month(created_at)"))
                            ->pluck('count');
                  
                return view('defect.grafik', compact('Amr')); 
            }
            // public function profile(Request $request){
            // 	return $request;
            // 	return view('/auth.profile');
            // }
    public function showsop(){
            return view('/layout.sop');
            }


    public function showlistrikunit()
            { 
              
                $data = Kwhmeterunit::all();
                 $Kwhmeterunit =  $data
                 // ->groupBy(\DB::raw("Month(created_at)"))
                 ->sum('TotalPakai');
                 // $Kwhmeterunit = Kwhmeterunit::select($data)
                 //             ->whereYear('created_at', date('Y'))
                 //             ->groupBy(\DB::raw("Month(created_at)"))
                 //            // ->pluck('count');

                  return $Kwhmeterunit;
                return view('listrikunit.grafik', compact('Kwhmeterunit')); 
            }
            
}
