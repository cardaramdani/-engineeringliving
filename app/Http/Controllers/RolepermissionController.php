<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RolepermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexrole()
    {
       
// $permission = Permission::create(['name' => 'edit articles']);

        $Role = Role::orderBy('created_at', 'desc')->Paginate(20);

        return view('/rolepreset.indexrole', compact('Role'));   
     }
     public function indexpermission()
    {
        
// $permission = Permission::create(['name' => 'edit articles']);

        $Permission = Permission::orderBy('created_at', 'desc')->Paginate(20);

        return view('/rolepreset.indexpermission', compact('Permission'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/rolepreset.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRole(Request $request)
    {

        $role = Role::create(['name' => $request->role]);
        return redirect('/rolepreset' )->with('toast_success','Role Berhasil Ditambahkan');     
    }

    public function storePermission(Request $request)
    {

        $permission = Permission::create(['name' => $request->permission]);
        return redirect('/permissionpreset' )->with('toast_success','Permission Berhasil Ditambahkan');          
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
    public function updateRole(Request $request, Role $role)
    {
        Role::where ('id', $role->id)
        ->update([
                    'name'=>$request->role,
                ]);
return redirect('/rolepreset' )->with('toast_info','Role Berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {

        $role =Role::findById($user);
       
        
         if ($role == true){
               $role->delete();
                
         }
    return redirect('/rolepreset' )->with('toast_warning','Role Berhasil Didelete');
    }
}
