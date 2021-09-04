<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedule;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Schedule = Schedule::orderBy('created_at', 'desc')->first();
        return view('/schedule.index', compact('Schedule'));
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
            'nama_bulan'=>'required',
            'nama_tahun'=>'required',
            'file' => 'required|file|mimes:xlsx,pdf,docx|max:5048'

        ]);
        $filedok = $request->file('file');
        $nama_file = time()."_".$filedok->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_schedule';

                // upload file
        $filedok->move($tujuan_upload,$nama_file);

        Schedule::create([
            'nama_bulan'=> $request->nama_bulan,
            'nama_tahun'=> $request->nama_tahun,
            'file'=>$nama_file,
        ]);
        return redirect('/schedule' )->with('toast_success','Data Berhasil Ditambahkan');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
    {
        //manipulasi agar tdk error next feature di aktivkan
        $Schedule = Schedule::orderBy('created_at', 'desc')->first();
        return view('/schedule.index', compact('Schedule'));
    }


}
