
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
   <title>Document</title>
</head>
<style>
   .card-body{
      height:600px;
   }
   .form-outline{
      border:1px solid black;
      border-radius:5px;
   }
   .form-outline:hover{
      box-shadow: 5px 5px 5px black;
   }
   .label{
      width:150px;
   }
   .back{
      margin-top:5px;
      margin-left:25px;
   }
   .back button{
      height:45px;
      width: 150px;
      font-size: 15px;
      background-color:transparent;
      border-radius:4px;
   }
</style>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-8 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update user profile</p>

                <form class="mx-1 mx-md-4" action="{{url('admin/update/'.$users['id'])}}" method="post">

                {{csrf_field()}}

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="label">Name:</div>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="name" value="{{$users->name}}"/>
                      <!-- <label class="form-label" for="form3Example1c">Name</label> -->
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="label">UserName:</div>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="username" value="{{$users->username}}"/>
                      <!-- <label class="form-label" for="form3Example1c">User Name</label> -->
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="label">Email:</div>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" name="email" value="{{$users->email}}"/>
                      <!-- <label class="form-label" for="form3Example3c">Email</label> -->
                    </div>
                  </div>

                  <input class="btn btn-outline-dark btn-lg px-5" type="submit" value="udpate" />

               </form>
               
               <div class="back">
                 <button type="button" onclick="back()">cancle</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
  </div>
</section>
</body>
<script>
  function back(){
    window.location.href = "http://127.0.0.1:8000/admin/userprofile";
  }
</script>
</html>
        
