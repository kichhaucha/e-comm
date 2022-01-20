@extends('master')
@section('content')

<div class="container sethight my-4">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  @foreach ($product as $user)
    <div class="item {{$user['id']==1?'active':''}}">
     <a href="/det/{{$user['id']}}">
     <img class="silde-img"  src="{{$user['gallery']}}" alt="Chania">
      <div class="carousel-caption slider-text">
        <h3>{{$user['name']}}</h3>
        <p> {{$user['description']}} </p>
      </div>
</a>
    </div>
    @endforeach
</div>
 
   
   

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <div class="waraper" >
   <h1>tranding</h1>

     <!-- Wrapper for slides -->
  <div class="carousel-inner">
  @foreach ($product as $user)
    <div class="trending">
    <a href="/det/{{$user['id']}}">
      <img class="silde-img"  src="{{$user['gallery']}}" >
      <div class=" ">
        <h3>{{$user['name']}}</h3>
        
      </div>
      
</a>
    </div>
    @endforeach
</div>
 </div>
  </div>
  @endsection


 

  
