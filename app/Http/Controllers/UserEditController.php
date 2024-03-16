<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserEditController extends Controller {
   public function index() {
      $users = DB::select('select * from users');
      return view('admin.userprofile',['users'=>$users]);
   }
   public function show(Request $request, $id) {
      $users = User::find($id);
      return view('admin.edit', ['users'=>$users]);
   }
   public function update(Request $request,$id) {
      $users=User::find($id);
      $users->name = $request->input('name');
      $users->username= $request->input('username');
      $users->email= $request->input('email');
      $users->update();
      return redirect('admin/userprofile');

      // DB::update('update users set name = ? username = ? email = ?  where id = ?',[$name,$username,$email,$id]);
      // return view('admin.userprofile');
      // return view('admin.userprofile',['users'=>$users]);

   }

   public function edit($id)
{
    $users = User::find($id);
    return view('users', compact('users'));
}
public function delete($id){
    $users=User::find($id);
    $users->delete();
    return redirect()->back();
}
}
