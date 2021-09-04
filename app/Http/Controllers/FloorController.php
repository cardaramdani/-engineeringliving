<?php

namespace App\Http\Controllers;

use App\Floor;
use App\Towers;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Floor = Floor::orderBy('created_at', 'desc')->Paginate(10);
        $Tower = Towers::all();
        return view('/management_data.indexfloor', compact('Floor', 'Tower'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'floor'=>'required',

        ]);

        Floor::create([
            'tower'=> $request->tower,
            'floor'=> $request->floor,

        ]);
        return redirect('/floor' )->with('toast_success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function show(Floor $floor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function edit(Floor $floor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Floor $floor)
    {
        $request->validate([
            'tower'=>'required',
            'floor'=>'required',]);

        Floor::where ('id', $floor->id)
        ->update([
                    'tower'=>$request->tower,
                    'floor'=>$request->floor,

                ]);
return redirect('/floor' )->with('toast_info','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Floor $floor)
    {
        $floor->delete();
        return redirect('/floor' )->with('toast_warning','Data Berhasil DiDelete');
    }
}
