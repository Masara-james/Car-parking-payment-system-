<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use AUth;


class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function show_login_form()
    {
        return view('login');
    }
    public function process_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if (auth()->attempt($credentials)) {

            return redirect()->route('home');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }
    public function show_signup_form()
    {
        return view('backend.register');
    }
    public function process_signup(Request $request)
    {   
        
 
        $user = User::create([
            'username' => $request->username,
            'email' => strtolower($request->email),
            'phone' => $request->phone,
            'password' => $request->password,
        ]);

        session()->flash('message', 'Your account is created');
       
        return response()->json([
            'status'=>true,
            'msg'=>'registration successful'
        ]);

    }
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }
 public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
       
        $user = User::where('email','=',$email,'and')
        ->where('password','=',$password)->get();
        
        if($user->count() == 0){
            return response()->json([
                'status'=>false,
                'msg'=>'no user details found'
            ]);
        }else{
            //set session login
            session([
                'user'=>$user
            ]);
            return response()->json([
                'status'=>true,
                'msg'=>'login sucessful'
            ]); 
        }
 }
 public function register(Request $request){
      
    $user= new User();
    $user->username=$request->username;
    $user->email=$request->email;
    $user->phone=$request->phone;
    dd($phone);
    $user->save();

 }
}
