@extends('master')
@section('content')
<a href="/"> <h3>Go-Back</h3> </a>

@foreach ($user as $item)
{{-- <h2>name:{{$item['name']}} </h2> --}}
    

<div class="col-sm-6 cart-list-devider my-4 " >
    <img class="sild-img"  src="{{$item->gallery}}" alt="Chania">
    </div>
    <div class="col-sm-6" >
     
      <h2>name:{{$item->name}} </h2>
      <h3>price: {{$item->price}} </h3>
      <h3>category:{{$item->category}} </h3>
      <h3>description:{{$item->description}} </h3>
      
        
      {{-- <form action="/cart" method="post"> --}}
        {{-- @csrf --}}
        {{-- <input type="hidden"  name="id" value="{{$item['id']}}" > --}}
        <a href="/remove/{{$item->cart_id}}" class="btn btn-success my-3">Remove</a>
        <button type="button" class="btn btn-primary my-2">BuyNow</button>
        
      {{-- </form> --}}
      
    </div>
    
    @endforeach
 
    <a href="/"> <h3>Go-Back</h3> </a>

  @endsection


 

  
