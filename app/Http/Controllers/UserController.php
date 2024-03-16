<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $users = User::all();
    //     return view('users.index', compact('users'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('users.create');
    // }
    public function store(Request $request)
    {
        $userStore=new User();
        $userStore->name =$request->name;
        $userStore->username =$request->username;
        $userStore->email =$request->email;
        $userStore->password=bcrypt($request->password);
        $userStore->save();
        return view('login');
    }
    
    public function login(Request $request){
        $credentials=($request->except("_token"));

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect ('/cartmade');
        }
        else{ 
            return view('login');
        }

    }
    public function logout(Request $request){
       $remove=$request->session()->flush();
        return redirect('login');
    }
}
