@extends('layouts.master')
@section('title')
    Customer Message
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
                <h4 class="card-title"> message list</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Message</th>
                      
                    </thead>
                    <tbody>
                    @foreach ($messages as $message)
                      <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->firstname }}</td>
                        <td>{{ $message->lastname }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->address }}</td>
                        <td>{{ $message->message }}</td>
                        
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