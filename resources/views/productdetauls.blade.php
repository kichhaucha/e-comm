@extends('master')
@section('content')

        <div class="col-sm-6" >
        <img class="sild-img"  src="{{$user['gallery']}}" alt="Chania">
        </div>
        <div class="col-sm-6" >
          <a href="/"> go back </a>
          <h2>name:{{$user['name']}} </h2>
          <h3>price: {{$user['price']}} </h3>
          <h3>category:{{$user['category']}} </h3>
          <h3>description:{{$user['description']}} </h3>

          
         <form action="/cart" method="post">
          @csrf
          <input type="hidden"  name="id" value="{{$user['id']}}" >
          <button  class="btn btn-success my-3">Add to cart</button>
          
        </form>
    
        <button  class="btn btn-primary my-2">BuyNow</button>

        </div>
        

  @endsection


 

  
