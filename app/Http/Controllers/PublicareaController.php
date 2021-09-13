<?php

namespace App\Http\Controllers;
use App\Rooms;
use Illuminate\Http\Request;

class PublicareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rooms = Rooms::orderBy('created_at', 'desc')->Paginate(20);
            return view('/management_data.indexrooms', compact('Rooms'));
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
            'public_area'=>'required',

        ]);

        PublicArea::create([
            'public_area'=> $request->public_area,
            'tower_id'=> 1,

        ]);
        return redirect('/public-area' )->with('toast_success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicArea $public)
    {

        $request->validate([
            'public_area'=>'required',
           ]);

        PublicArea::where ('id', $public->id)
        ->update([
                    'public_area'=>$request->public_area,
                    'tower_id'=>$request->tower_id

                ]);
        return redirect('/public-area' )->with('toast_info','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicArea $public)
    {
         $public->delete();
    return redirect('/public-area' )->with('toast_warning','Data Berhasil Dihapus');
    }
}
