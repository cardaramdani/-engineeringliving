<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Http\Request;
use App\Esp;
class Espcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         $data = Esp::all();
         return Response()->json($data);
        
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
            'sensor'=>'required',
            'value1'=>'required',
            'value2'=>'required',
            'status'=>'required', 
        ]);

        $esp=Esp::create([
            'sensor'=> $request->sensor, 
            'value1'=> $request->value1, 
            'value2'=> $request->value2, 
            'status'=>$request->status, 
            
        ]);    
            return Response()->json("data berhasil di tambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $data = Esp::find($id);
         return Response($data->status);
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
        $sensor= $request->sensor;
        $value1 = $request->value1;
        $value2 = $request->value2;
        $status = $request->status;

        $esp= Esp::find($id);
        $esp->sensor= $sensor;
        $esp->value1 = $value1;
        $esp->value2 = $value2;
        $esp->status = $status;
        $esp->save();
        return ($esp->sensor." ".$esp->status);
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Esp $esp, $id)
    { 
        $esp= Esp::find($id);
        $esp->delete();
        return "data berhasi di hapus";
            }
}
