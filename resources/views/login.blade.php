@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <title>login</title>

    </head>
    <style>
        
        body{
        margin:0;
        padding:0;
      }
        .bgimg{
            height: 700px;
            background-image: url('image/bgimg.avif');
            background-size:cover;
            
            background-repeat:no-repeat;
            filter: blur(8px);
            -webkit-filter: blur(8px);
        }
        .container{
            position: absolute;
            top: 5%;
            width: 100%;
            left: 7%;
        }
        
    </style>
    <body>
       <form action="{{ route('login')}}" method="post" >
        @csrf
        <div class="bgimg"></div>
                <section >
            <div class="container py-5 h-80" data-aos="zoom-in">
                <div class="row d-flex justify-content-center align-items-center h-80">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-black" style="border-radius: 1rem;">
                    <div class="card-body p-7 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text-black-50 mb-5">Please enter your login and password!</p>

                        <div class="form-outline form-black mb-4">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg" name="username" required/>
                            <label class="form-label" for="typeEmailX">username</label>
                        </div>

                        <div class="form-outline form-black mb-4">
                            <input type="password" id="typePasswordX" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                            <label class="form-label" for="typePasswordX">Password</label>
                        </div>

                        

                        <!-- <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">Forgot password?</a></p> -->

                        <input class="btn btn-outline-dark btn-lg px-5" type="submit" value="login" />

                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                            <a href="#!" class="text-black"><i class="fab fa-facebook-f fa-lg mx-2 px-1"></i></a>
                            <!-- <a href="#!" class="text-black"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a> -->
                            <a href="#!" class="text-black"><i class="fab fa-google fa-lg mx-2 px-1"></i></a>
                        </div>

                        </div>

                        <div>
                        <p class="mb-0">Don't have an account? <a href="register" class="text-black-50 fw-bold">Sign Up</a>
                        </p>
                        </div>
                        <div>
                        <p class="mb-0">login as admin:&nbsp<a href="admin/adminlogin" class="text-black-50 fw-bold">admin login</a>
                        </p>
                        </div>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
       </form>
       
    </body>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</html>
@endsection
