<?php

namespace App\Http\Controllers;

use App\Floor;
use App\Towers;
use Illuminate\Http\Request;
use Validator;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            if(!empty($request->tower_change))
            {
            $tower = $request->tower_change;
            $data = Floor::where('tower_floor_id', $tower)->
            orderBy('name', 'desc')->get();
            }else{
                $data = Floor::where('tower_floor_id', '1')
                ->orderBy('name', 'desc')->get();
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
        return view('management_data.indexfloor', compact('Towers'));
    }

    public function indexfloor()
    {
        $data = Floor::all();
        echo json_encode($data);
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

        // $data_tower = $request->tower;
        // $idtower = Towers::where('tower', $data_tower)->get('id');
        // $s = $idtower[0];
        // $tower = $s['id'];
        $data= array(
            'tower_floor_id'=> $request->tower,
            'name'=> $request->floor,

        );
        $data = Floor::updateOrCreate(['id' => $id], $data);

        return response()->json(['success' => $data]);
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
        $where = array('id' => $floor->id);
        $post  = Floor::where($where)->first();
        // return response()->json($post);
        return response()->json($post, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Floor $floor)
    {
        // $data = Floor::findOrFail($floor->id);
        // return response()->json($data, 200);
        $floor->delete();
    }
}
