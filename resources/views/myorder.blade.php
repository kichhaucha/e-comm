
@extends('master')
@section('content')

{{-- <a href="order" class="btn btn-success mx-4">Order-Now</a> --}}
<a href="/"> <h3>Go-Back</h3> </a>

@foreach ($user as $item)
{{-- <h2>name:{{$item['name']}} </h2> --}}
    

<div class="col-sm-6   my-4 " >
    <img class="sild-img"  src="{{$item->gallery}}" alt="Chania">
    </div>
    <div class="col-sm-6 cart-list-devider  " >
     
      <h2>{{$item->name}} </h2>
      <h3>price: {{$item->price}} </h3>
      <h3>category:{{$item->category}} </h3>
      <h3>delevery status:{{$item->status}} </h3>
      <h3>payment status:{{$item->payment_status}} </h3>
      <h3>delevery addres:{{$item->address}} </h3>
      <h3>payment method:{{$item->payment_method}} </h3>
      
        
      {{-- <form action="/cart" method="post"> --}}
        {{-- @csrf --}}
        {{-- <input type="hidden"  name="id" value="{{$item['id']}}" > --}}
        {{-- <a href="/remove/{{$item->cart_id}}" class="btn btn-success my-3">Remove</a> --}}
        {{-- <button type="button" class="btn btn-primary my-2">BuyNow</button> --}}
        
      {{-- </form> --}}
      
    </div>
    
    @endforeach
 
    {{-- <a href="order" class="btn btn-success mx-4">Order-Now</a> --}}
    <a href="/"> <h3>Go-Back</h3> </a>

   
  @endsection


 

  



   




















  
 