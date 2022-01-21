<?php
 use App\http\Controllers\userproduct;
 $value=0;
 if(session()->has('user'))
 {
   $value=userproduct::cartitem();
 }
?>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Home-Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">order</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link mx-4" href="cartlist">cart({{$value}})</a>
        </li>
    
   <div class="mx-4" >
      <form  action="/search" class="d-flex mx-6 ">
        <input class="   form-control mx-4 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
       
      </form>
    </div>
    @if(session()->has('user'))
    <h3  class="text-primary "> {{Session::get('user')['name']}} </h3>
    <br>
    <a href="/logout" class="text-primary my-4 mx-5" role="button">logout</a>
  @else
  <li class="nav-item ">
    <a href="/login" class="text-primary my-4 mx-5" role="button">login</a>
  </li>
  @endif

    </div>
  </div>
</nav>
</div>