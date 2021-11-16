<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;

class Userauthcontroller extends Controller
{
    function login(){
        return view('auth');
    }
    function register(){
        return view('register');
    }

    function create(Request $req){
        $req->validate([
          'name'=>'required',
          'email'=>'required|email|unique:clients',
          'password'=>'required|min:5|max:12'

        ]);

        $user = new Client;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password= Hash::make($req->password);
        $result=$user->save();   
        if($result){
            return back()->with('success','you have successfully registered');
              }
              else{
                return back()->with('fail', 'something went wrong');
              }
        
    }
    function check(Request $req){
      $req->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'
      ]);
      $user = Client::where('email','=', $req->email)->first();
      if($user){
        if(Hash::check($req->password,$user->password)){
          $req->session()->put('LoggedUser',$user->id);
          return redirect('profile');
        }
        else{
          return back()->with('fail','Invalid Password');
        }
      }
      else{
        return back()->with('fail','No Account found for this email');
      }
    }
    function profile(){
      if(session()->has('LoggedUser')){
        $user= Client::where('id','=',session('LoggedUser'))->first();
        
      }
      return view('profile',['LoggedUserInfo'=>$user]);
    }
    function logout(){
      if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('login');
      }
    }
}

