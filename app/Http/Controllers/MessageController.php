<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $messageStore=new Message();
        $messageStore->firstname =$request->fname;
        $messageStore->lastname =$request->lname;
        $messageStore->email =$request->email;
        $messageStore->phone =$request->phone;
        $messageStore->address =$request->address;
        $messageStore->message =$request->message;
        $messageStore->save();
        return view('cartmade');
    }
   
}
