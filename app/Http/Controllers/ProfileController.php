<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use Validator;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use File;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // konsep yg akan di gunakan adalah user hanya di beri role
        //sedangkan pemberian permission hanya kepada model role saja misal role admin mempunyai permission smua dan teknisi mempunyai permission logsheet dan pm saja

        // $role = Role::create(['name'=>'user/admin']);
        // $Permission = Permission::created(['name'=>'setting/produk']);

         //$nama =Auth::user();
        // $nama->givePermissionTo('logsheet');
         // $nama->assignRole('admin');

        // $role = Role::findById(1);
        // $role->givePermissionTo('logsheet');
        $Users = User::all(); 
         $Roles = \Auth::user()->getRoleNames();
         $Permission = \Auth::user()->getAllPermissions();
// $Roles = Role::all();
         
        // return $Roles[0];
          // return(Auth::user()->getRoleNames()[0]);
        return view('/layout.users', compact('Users','Roles', 'Permission'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    { 
        $User = $user;
        return view('/layout.profile', compact('User'));    
        
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
    
    public function edituser(Request $request, User $user)
    {
       // $data = $user->getPermissionNames();
       //  foreach ($data as $key => $value) {
       //      return $data;
       //  }
         

        
        $role_user = $user->getRoleNames();
        $Role_name = $role_user[0];
        $User = $user;
        $Role = Role::all();
        $Permission = Permission::all();
        
        // if ($request->isMethod('post')) {
        //     $data = $request->all();
        //     $role =Role::findById($data['role']);
        //     if (count($data['permission']>0)) {
        //         foreach ($data['permission'] as $key => $value) {
        //             $user->givePermissionTo($data['permission'][$key]);
        //             $user->assignRole(($role));
        //             $role->givePermissionTo($data['permission'][$key]);
                    
        //         }
        //     }
        //     return redirect('/users')->with('status', 'Profile Berhasil Diupdate!');     
        // }
         return view('/layout.profile_user', compact('User', 'Role', 'Permission', 'Role_name'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)

     {   

        if ($request->username==Auth::user()->username) 
            {$username=Auth::user()->username;}
            else {$request->validate(['username'=>'required|unique:users,username']);
        $username=$request->username;}
        if ($request->email==Auth::user()->email) 
            {$request->email;}
            else {$request->validate(['email'=>'required|unique:users,email']);}

        if ($request->departement==Auth::user()->departement) 
            {$request->departement;}
            else {$request->validate(['departement'=>'required|max:11']);}

        if ($request->nohp==Auth::user()->nohp) 
            {$request->nohp;}
            else{$request->validate(['nohp'=>'required|max:13|unique:users,nohp']);}
       $request->validate(['gambaruser' => '|file|image|mimes:jpeg,png,jpg|max:2080']);

        $Gambarlama=$request->Gambarlama;
        $tmp = $request->file('gambaruser');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_user';
         if ($tmp==0) {
             $nama_file= $Gambarlama;
             
        }else{
            if(File::exists(public_path('dataIMG_user/'.$Gambarlama))){
            File::delete(public_path('dataIMG_user/'.$Gambarlama));
        }else{
            return back()->with('toast_error','Pict Gagal Diperbarui');
        }
            $nama_file = time()."_".$tmp->getClientOriginalName(); 
                    // upload file
         $tmp->move($tujuan_upload,$nama_file); 

        }
       
        User::where ('id', $user->id)
        ->update([
            'username'=>$username,
            'departement'=>$request->departement,
            'jabatan'=>$request->jabatan,
            'email'=>$request->email,
            'nohp' => $request->nohp,
            'gambar' => $nama_file
                ]);
return redirect('/home' )->with('status', 'Profile Berhasil Diupdate!');     
}

public function updateuser(Request $request, User $User)

     {  
        $request->validate([
             'permission'=>'required' 
        ]);

        
        //ini update user dari superadmin
        
        $roles =Role::all();
        $permissions = Permission::all();
        $roles_name = $User->getRoleNames();
        $permissions_name = $User->permissions;
        $data = $request->all();
        $role =Role::findByName($data['role']);
        if ($roles_name == true){
             $User->removeRole($roles_name[0]);
            $User->revokePermissionTo($permissions_name);
        }
        
        if (($data['permission'] == null)) {
            return 'tdk ada permisson';
            // $User->assignRole($role);
            // $User->givePermissionTo('schedule');
            //  $role->givePermissionTo('schedule');
        }
        if (($data['permission'] > 0)) {
               foreach ($data['permission'] as $key => $value) {
                 $User->assignRole($role);
                 $User->givePermissionTo($data['permission'][$key]);
                 $role->givePermissionTo($data['permission'][$key]);
                 }
        } 
        
        
                 

        

       $request->validate(['gambaruser' => '|file|image|mimes:jpeg,png,jpg|max:2080']);
        $Gambarlama=$request->Gambarlama;
        $tmp = $request->file('gambaruser');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_user';
         if ($tmp==0) {
             $nama_file= $Gambarlama;
             
        }else{
            $nama_file = time()."_".$tmp->getClientOriginalName(); 
                    // upload file
         $tmp->move($tujuan_upload,$nama_file);  
        }
       
        User::where ('id', $User->id)
        ->update([
            'username'=>$request->username,
            'departement'=>$request->departement,
            'jabatan'=>$request->jabatan,
            'email'=>$request->email,
            'nohp' => $request->nohp,
            'gambar' => $nama_file
                ]);
        return redirect('/users' )->with('status', 'Profile Berhasil Diupdate!');     
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       
        $permissions = Permission::all();
        $roles_name = $user->getRoleNames();
        $permissions_name = $user->permissions;
        if ($roles_name == true){
             $user->removeRole($roles_name[0]);
            $user->revokePermissionTo($permissions_name);
            $user->delete();
        }
    return redirect('/users' )->with('status', 'Data Berhasil Dihapus!');
    }
    public function changepass(){return view('/layout.updatepass');}

    public function updatepass(){
                                // custom validator
        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, \Auth::user()->password);
        });
 
        // message for custom validation
        $messages = [
            'password' => 'Invalid current password.',
        ];
 
        // validate form
        $validator = Validator::make(request()->all(), [
            'current_password'      => 'required|password',
            'password'              => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
 
        ], $messages);
 
        // if validation fails
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }
 
        // update password
        $user = User::find(Auth::id());
 
        $user->password = bcrypt(request('password'));
        $user->save();
 
                    return redirect('home')->with('status', 'Password Berhasil Diupdate!');     
                            }
}
