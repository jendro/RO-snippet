@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px">
    
    <h2 class="title">Snippet & Trick {{ $framework }}</h2>
    <div class="list-snippet">
      
      <div class="row">
        @foreach($snippet_r as $snippet)
          @include('snippet.component.snippet')
        @endforeach
      </div>

    </div>

  </div>
</div>

@endsection