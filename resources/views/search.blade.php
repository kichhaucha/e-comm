@extends('master')
@section('content')
     

@foreach ($user as $item)
{{-- <h2>name:{{$item['name']}} </h2> --}}
    

<div class="col-sm-6" >
    <img class="sild-img"  src="{{$item['gallery']}}" alt="Chania">
    </div>
    <div class="col-sm-6" >
      <a href="/"> go back </a>
      <h2>name:{{$item['name']}} </h2>
      <h3>price: {{$item['price']}} </h3>
      <h3>category:{{$item['category']}} </h3>
      <h3>description:{{$item['description']}} </h3>
        
      <form action="/cart" method="post">
        @csrf
        <input type="hidden"  name="id" value="{{$item['id']}}" >
        <button  class="btn btn-success my-3">Add to cart</button>
        <button type="button" class="btn btn-primary my-2">BuyNow</button>
        
      </form>
      
    </div>
    
    @endforeach
 
    

  @endsection


 

  
