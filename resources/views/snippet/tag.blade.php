@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px">
    
    <h2 class="title">Snippet & Trick in Tag "{{ $tag }}"</h2>
    
    <div class="list-snippet clearfix masonry">
      <div class="row">
        @foreach($snippettags as $snippetTag)
          @php($snippet = $snippetTag->snippet)
          @include('snippet.component.snippet')
        @endforeach
      </div>      
    </div>

    <div class="text-center">
      {{ $snippettags->links() }}
    </div>

  </div>
</div>

@endsection