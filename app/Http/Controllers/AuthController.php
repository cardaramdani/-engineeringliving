<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Auth;
Use App\User;
// namespace App\Http\Controllers\Auth;
// use App\Http\Controllers\Controller;
 use App\Providers\RouteServiceProvider;
// use App\User;
 use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthController extends Controller
{
    public function getLogin(){

                               	return view('/layout.login');
                                }
    public function postLogin(Request $request)
                    {       
            		 $input = $request->all();
                    $this->validate($request, [
                                            'username' => 'required',
                                            'password' => 'required',
                        ]);
  
                    $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username' ;
                    if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
                        {
        
                        return redirect('homescreen');}
                      else

                	{
                		return back()->with('error','Username/password salah!');
                	}
                	   
    }
    public function getRegister(){

                                	return view('/layout.register');
                                }
    public function postRegister(Request $request){
                                
                             	$request->validate([
                                        'username'=>'required|unique:users,username',
                                        'departement'=>'required|max:11',
                                        'email'=>'required|unique:users,email',
                                        'password'=>'required|min:8|confirmed',
                                        'nohp' =>'required|max:13|unique:users,nohp',
                                    ]);

                                	$data = User::create([
                                        'username'=>$request->username,
                                        'departement'=>$request->departement,
                                		'jabatan'=>$request->jabatan,
                                		'email'=>$request->email,
                                		'password'=>bcrypt($request->password),
                                        'nohp' => $request->nohp,
                                        'gambar' => $request->gambaruser,
                                        'api_token' => Str::random(80),
                                	]);
                                   
                                     if ($data[0] == null) {
                                       $data->assignRole('User');  
                                     }
                            
                            // $this->guard()->login($data);
                            // $this->middleware('auth');
                            // $this->middleware('signed')->only('verify');
                            // $this->middleware('throttle:6,1')->only('verify', 'resend');

    	            return redirect('home');
                            }


    public function logout(){

                            	Auth::logout();
                            	return redirect()->route('login');
                            }
                            protected function guard()
                            {
                                return Auth::guard();
                            }

    
}
