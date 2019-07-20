@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px">
    
    <h2 class="title">Snippet & Trick {{ $framework }}</h2>
    <div class="list-snippet">
      
      <div class="row">
        
        @include('snippet.component.snippet')

      </div>

    </div>

  </div>
</div>

@endsection