@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container user-container" >
    <div class="snippet-image row"> 
      <div class="col-md-1">
        <img class="user-image" src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
      </div>
      <div class="col-md-11">
        <h2 class="title"">
          Nama User 
          <a href="{{ route('user.edit',['user'=>'user']) }}" class="edit-user-button">
            <i class="fa fa-pencil"></i>
          </a>
        </h2> 
        <div class="user-statistik">
          <a class="user-github" href="">
            <i class="fa fa-github"></i>
            Github
          </a>
          <i class="fa fa-eye"></i> 10
          <i class="fa fa-copy"></i> 10
          <i class="fa fa-star"></i> 10
        </div>
      </div>
      <br>
    </div>
  </div>
</div>

<div class="content" style="min-height:600px">
  <div class="container">
    
    <div class="list-snippet">
      
      <div class="row">
        
        @include('user.snippet')

      </div>

    </div>

  </div>
</div>


@endsection