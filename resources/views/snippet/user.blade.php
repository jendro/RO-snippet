@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container user-container" >
    <div class="snippet-image row"> 
      <div class="col-md-1">
        <img class="user-image" src="{{ $contributor->avatar }}" alt=""> 
      </div>
      <div class="col-md-11">
        <h2 class="title"">
          {{ $contributor->name }}
        </h2> 
        <div class="user-statistik">
          <a class="user-github" href="">
            <i class="fa fa-github"></i>
            Github
          </a>
          <i class="fa fa-eye"></i> 0
          {{-- <i class="fa fa-copy"></i> 0 --}}
          <i class="fa fa-star"></i> 0
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
        @foreach($snippet_r as $snippet)
          @include('snippet.component.snippet-whithout-user')
        @endforeach
      </div>

      <div class="text-center">
        {{ $snippet_r->links() }}
      </div>

    </div>

  </div>
</div>

@endsection