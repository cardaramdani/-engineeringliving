<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Floor;
use App\Towers;
use App\Rooms;
use Validator;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
        if(!empty($request->value_filter))
            {
                //Jika nilai filternya ada maka
                if($request->value_filter == "1"){
                    //kita filter floor berdasarkan tower
                    $data = Floor::where('tower_floor_id', $request->tower_change)->get();
                }
                if($request->value_filter == "2"){
                    //kita filter floor berdasarkan tower
                    $data = Rooms::where('tower_id', $request->tower_change)->get();
                }
                if($request->value_filter == "3"){
                    //kita filter floor berdasarkan tower
                }
            }
            //load data default
            else
            {
                $data = Floor::where('tower_floor_id', '1')->get();
            }

            return datatables()->of($data)
                        ->addColumn('action', function($data){
                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }
        $Towers = Towers::all();
        $Floors = Floor::all();

        return view('management_data.indexbuilding-data', compact('Towers', 'Floors'));
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
        if ($request->id_tab=='floor') {
            $id = $request->id;
            $rules = array(
                'tower'=>'required',
                'floor'=>'required',
            );
            $error = Validator::make($request->all(), $rules);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
            $data= array(
                'tower_floor_id'=> $request->tower,
                'name'=> $request->floor,

            );
            $data = Floor::updateOrCreate(['id' => $id], $data);
            return response()->json(['success' => $data]);
        }
        if ($request->id_tab=='room') {

        return response()->json($request, 200);
        }
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
    public function destroy($id)
    {
        //
    }
}
