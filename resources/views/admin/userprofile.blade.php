@extends('layouts.master')
@section('title')
    User Profile
@endsection


@section('content')
<!DOCTyPE html>
<html>
    <head>
        <title>View Customers Records</title>
    </head>
    <body>
    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Operation</th>
                      
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href = "edit/{{ $user->id }}">Edit</a>&nbsp&nbsp|&nbsp&nbsp<a href = 'delete/{{ $user->id }}'>delete</a></td>
                        
                      </tr>
                    @endforeach
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </body>
</html>

@endsection



@section('scripts')

@endsection