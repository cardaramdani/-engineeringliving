<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Esp;
use App\User;
use Illuminate\Support\Facades\Auth;
class Espcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    { 
         
        $Esp = Esp::orderBy('created_at', 'desc')->Paginate(20);
      
        return view('/esp32.index', compact('Esp'));
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
            'value3'=>'required', 
        ]);

        $esp=Esp::create([
            'sensor'=> $request->sensor, 
            'value1'=> $request->value1, 
            'value2'=> $request->value2, 
            'value3'=>$request->value3, 
            
        ]);    
            return Response()->json($esp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('/esp32.esplampu');    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function showgrafik()
    {
         
        $Esp = Esp::orderBy('created_at', 'asc')->get('value1')->pluck('value1');
                
                return view('esp32.grafik', compact('Esp'));
    }
        
    public function edit(Request $request, Esp $esp)
    { 
        return view('/esp32.edit', compact('esp'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
     { $data = Esp::find($id);
     
         $sensor= $data->sensor;
        $value1 = $data->value1;
        $value2 = $data->value2;
        $status = $request->status_baru;

        $esp= Esp::find($id);
        $esp->sensor= $sensor;
        $esp->value1 = $value1;
        $esp->value2 = $value2;
        $esp->status = $status;
        $esp->save();
        
        return redirect('/esp' )->with('status', 'Data Berhasil update!');
            }
            
        public function updates(Request $request, $id)
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
        
        return redirect('/esp' )->with('status', 'Data Berhasil update!');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $esp= Esp::find($id);
        $esp->delete();
        return "data berhasi di hapus";
            }
}
