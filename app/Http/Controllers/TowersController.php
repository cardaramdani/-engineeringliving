<?php

namespace App\Http\Controllers;

use App\Towers;
use Illuminate\Http\Request;

class TowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Towers = Towers::orderBy('created_at', 'desc')->Paginate(20);
        return view('/management_data.indextower', compact('Towers'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'tower'=>'required',
            'tower_type'=>'required',
            
        ]);

        Towers::create([
            'tower'=> $request->tower, 
            'tower_type'=> $request->tower_type, 
            
        ]);
        return redirect('/tower' )->with('toast_success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Towers  $towers
     * @return \Illuminate\Http\Response
     */
    public function show(Towers $towers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Towers  $towers
     * @return \Illuminate\Http\Response
     */
    public function edit(Towers $towers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Towers  $towers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Towers $tower)
    {
         $request->validate([
            'tower'=>'required',
            'tower_type'=>'required',]);

        Towers::where ('id', $tower->id)
        ->update([
                    'tower'=>$request->tower,
                    'tower_type'=>$request->tower_type,
                   
                ]);
return redirect('/tower' )->with('toast_info','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Towers  $towers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Towers $tower)
    {
         $tower->delete();
    return redirect('/tower' )->with('toast_warning','Data Berhasil Dihapus');
    }
}
