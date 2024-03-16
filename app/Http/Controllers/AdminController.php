<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function adminlogin(Request $request){
        $credentials=($request->except("_token"));

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect ('/admin/dashboard');
        }
        else{ 
            return view('/admin/adminlogin');
        }

    }
    public function adminlogout(Request $request){
       $remove=$request->session()->flush();
        return redirect('/admin/adminlogin');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function adminstore(Request $request)
    {
        $adminStore=new Admin();
        $adminStore->username =$request->username;
        $adminStore->password=bcrypt($request->password);
        $adminStore->save();
        return view('admin.adminlogin');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
