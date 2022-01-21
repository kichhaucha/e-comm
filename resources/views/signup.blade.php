@extends('master')
@section('content')

<div class="container sethight my-4">
    
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <h3> sign up page here</h3>
            <form action="/signup" method="POST" >
                @csrf
            
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">user name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
               
                <button type="submit" class="btn btn-primary">submit</button>
              </form>
        </div>
    </div>

</div>

@endsection
 


























