@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px">
    
    <h2 class="title">Pencarian dengan kata kunci "{{ $q }}"</h2>
    
    <div class="list-snippet clearfix masonry">  
      <div class="row">
        @foreach($snippet_r as $snippet)
          @include('snippet.component.snippet')
        @endforeach
      </div>  
    </div>

    <div class="text-center">
      {{ $snippet_r->links() }}
    </div>

  </div>
</div>

@endsection