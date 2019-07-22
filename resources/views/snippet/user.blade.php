@extends('layouts.main')

@section('content')

<div class="first-content content ">
  <div class="container" style="padding-right:27px">

    <div class="user-container" >
      <div class="snippet-image row"> 
        <div class="col-md-1">
          <img class="user-image" src="{{ $contributor->avatar }}" alt=""> 
        </div>
        <div class="col-md-11">
          <h2 class="title"">
            {{ $contributor->name }}
          </h2> 
          <div class="user-statistik">
            <a class="user-github" href="{{ $contributor->url_html }}" target="_blank">
              <i class="fa fa-github"></i>
              Github
            </a>
            <i class="fa fa-eye"></i> {{ $total_view }}
            {{-- <i class="fa fa-copy"></i> 0 --}}
            <i class="fa fa-star"></i> {{ $total_star }}
          </div>
        </div>
        <br>
      </div>
    </div>

  </div>
</div>

<div class="content" style="min-height:600px">
  <div class="container">
    
    <div class="list-snippet clearfix masonry">
        @foreach($snippet_r as $snippet)
          @include('snippet.component.snippet-whithout-user')
        @endforeach
      </div>

  </div>

  <div class="text-center">
    {{ $snippet_r->links() }}
  </div>

</div>

@endsection