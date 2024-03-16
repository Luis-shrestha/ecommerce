<?php
// use App\Models\Cart;
use  App\Http\Controllers\Controller;
// use  App\Http\Controllers\CartController;
use  App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>navbar</title>

         
    </head>
    <style>
        body{
            font-family:'open sans', sans-serif;
            margin: 0;
            padding: 0;
        }
        nav{
            position: sticky;
            top:0;
            position: -webkit-sticky;
            /* margin: 270px auto 0; */
            width: 100%;
            height: 50px;
            background-color: #34495e;
            /* border-radius: 8px; */
            font-size: 0;
            box-shadow: 0 2px 3px 0 rgba((0), 0, 0, .1);
            z-index:1;
        }
        nav a {
            font-size: 1vw;
            text-transform: uppercase;
            color: white;
            text-decoration: none;
            line-height: 50px;
            position: relative;
            z-index: 1;
            display: inline-block;
            text-align: center;
            margin-left:50px;
        }
        nav a:hover {
            color: #ECD5BB;
        }
        
        .login-register{
            float:right;
            margin-right: 40px;
        }
        .users{
            float: right;
            margin-right: 30px;
        }
        .users a:hover{
            cursor: pointer;
        }
        
    </style>
    <body>
        
           <nav>
                
                <a href="cartmade#home">Home</a>
                <a href="cartmade#about">About</a>
                <a href="cartmade#blog">Blog</a>
                <a href="cartmade#we_offer">We Offer</a>
                <a href="cartmade#contact">Contact</a>


                @if(isset( Auth::user()->email ))
                    <div class="users">
                        <a style="color:white;"><i class="fa fa-solid fa-user" style="color: white"></i>&nbsp&nbsp{{ Auth::user()->name }} </a>
                        <a href="{{ route('logout') }}">Logout</a>
                    </div>
                   @else
                   <div class="login-register">
                    <a href="register">Register</a>
                    <a href="login">Login</a>
                    </div>
                   @endif
           </nav>
            
    </body>
</html>
