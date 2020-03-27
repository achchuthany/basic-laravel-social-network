<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getDashboard(){
        return view('dashboard');
    }
    public function postSignUp(Request $request){
        $this->validate($request,[
            'email'=>'required|unique:users|email',
            'first_name'=>'required|max:255',
            'last_name'=>'required|max:255',
            'password'=>'required|min:4'
        ]);
        $user = new User();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        return redirect()->route('dashboard');
    }
    public function postSignIn(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back();
        }
    }

    public function getSignOut(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}
