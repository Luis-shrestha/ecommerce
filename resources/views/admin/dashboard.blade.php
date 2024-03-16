@extends('layouts.master')
@section('title')
    Dashboard
@endsection


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container{
      display:flex;
      justify-content:space-evenly;
      width:100%;

    }
    .card{
      margin-top: 20px;
      margin-left: 20px;
      width:300px;
      height:160px;
      border-radius: 30px;
      box-shadow: 2px 2px 1px black;
      transition:.1s;
    }
    .text_icon{
      padding-top:20px;
      padding-left:20px;
      font-size:1.5vw;
     
    }
    p{
      margin-top:20px;
      margin-bottom:0;
    }
    .number{
      float:right;
      font-size:2vw;
      padding-left:20px;
    }
    .card:hover{
      transform:scale(1.1);
      cursor: pointer;
      box-shadow: 3px 3px 2px black;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card bg-light">
      <div class="text_icon">
      <i class="fa-solid fa-diagram-project"></i>
        <p>Project complete</p>
      </div>
      <div class="number" id="num">50</div>
    </div>
  
    <div class="card bg-light">
      <div class="text_icon">
      <i class="fa-solid fa-circle-arrow-right"></i>
        <p>ongoing project</p>
      </div>
      <div class="number">12</div>
    </div>
  
    <div class="card bg-light">
      <div class="text_icon">
      <i class="fa-solid fa-face-smile"></i>
        <p>Customer satisfied</p>
      </div>
      <div class="number">53</div>
    </div>
  </div>
  <div class="container">
    <div class="card bg-light">
      <div class="text_icon">
      <i class="fa-solid fa-comment"></i>
        <p>customer feedback</p>
      </div>
      <div class="number">40</div>
    </div>
  
    
  </div>
</body>
</html>
        
@endsection



@section('scripts')

@endsection