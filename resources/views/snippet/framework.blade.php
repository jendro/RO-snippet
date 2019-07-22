@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px">
    
    <h2 class="title">Snippet & Trick {{ $framework }}</h2>
    
    <div class="list-snippet masonry clearfix">
      
        @foreach($snippet_r as $snippet)
          @include('snippet.component.snippet')
        @endforeach
      
    </div>

    <div class="text-center">
      {{ $snippet_r->links() }}
    </div>

  </div>
</div>

@endsection