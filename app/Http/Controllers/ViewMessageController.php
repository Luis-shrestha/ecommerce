<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewMessageController extends Controller {
    public function index(){
        $messages = DB::select('select * from messages');
        return view('admin.message',['messages'=>$messages]);
    }
}