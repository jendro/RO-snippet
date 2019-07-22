@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px">
    
    <div class="list-snippet">
      
      <div class="row">
        
        <div class="col-md-8 snippet">
          <div class="snippet-content">
              <div class="row snippet-header">
                  <div class="round-image"> 
                    <img src="{{ $snippet->contributor->avatar }}" alt=""> 
                  </div>
                  <div>
                    <p class="snippet-user">
                        <a href="{{ route('snippet.user',['user'=>$snippet->contributor->id]) }}">
                        {{ $snippet->contributor->name }}
                        </a>
                    </p>
                    <h3 class="snippet-title">
                        {{ $snippet->title }}
                    </h3>
                    <span class="snippet-timeago">{{ $snippet->created_at->diffForHumans() }}, in :</span>
                    <span class="snippet-tag {{ $snippet->framework->class }}">
                        <a class="framework-icon" title="laravel" href="{{ route('snippet.framework',['framewkro'=>$snippet->framework_id]) }}">
                            <img src="{{ asset($snippet->framework->icon) }}" alt="">
                            {{ $snippet->framework->framework }}
                        </a>
                    </span>

                    {{-- TODO : TAG --}}
                    {{-- <span class="snippet-tag"><a href="{{ route('snippet.tag',['tag'=>'tag']) }}">View</a></span> --}}

                  </div>
              </div>

              <div class="row snippet-statistic detail">
                  <i class="fa fa-caret-up"></i> {{ $snippet->up }}
                  <i class="fa fa-caret-down"></i> {{ $snippet->down }}
                  
                  <div class="pull-right">
                    <i class="fa fa-eye"></i> {{ $snippet->view }}
                    {{-- <i class="fa fa-copy"></i> {{ $snippet->copied }} --}}
                    @if(Auth::user() && Auth::user()->id != $snippet->contributor_id && !$snippet->checkContributorStarExist(Auth::user()->id))
                      <a href="#" onclick="star()" class="action-star" style="margin-left:5px">
                        <i class="fa fa-star-o"></i>
                      </a>
                    @else
                      <i class="fa fa-star" style="color:yellow"></i> 
                    @endif
                    {{ $snippet->star }}
                  </div>

              </div>

              <div class="row snippet-description">
                <h4>Description</h4>
                <p class="detail">{{ $snippet->description }}</p>
              </div>

              <div class="row snippet-description">
                {{-- <div class="pull-right action-snippet">
                  <a href="#">
                    <i class="fa fa-copy"></i>
                  </a>
                </div> --}}
                <h4>Code </h4>
<pre><code class="{{ $snippet->framework->syntax }}">{{ $snippet->code }}</code></pre>  
              </div>

              <div class="row snippet-description">
                <h4>Komentar</h4>
                
                @php($no = 0)
                @foreach($snippet->komentar as $komentar)
                  <div class="komentar clearfix {{ ($no++%2==1)?'odd':'' }}">
                    @if(Auth::user()->id==$komentar->contributor_id)
                      <a href="#" onclick="hapus('{{ route('komentar.destroy',['snippet'=>$snippet->id,'komentar'=>$komentar->id]) }}')" class="btn btn-round btn-small btn-danger btn-delete" href="">
                        <i class="fa fa-trash"></i>
                      </a>
                    @endif
                    <div> 
                      <img src="{{ $komentar->contributor->avatar }}" alt=""> 
                    </div>
                    <div class="detail-komentar">
                      <h5 class="user-komentar">{{ $komentar->contributor->name }} <span class="timeago"> . {{ $komentar->created_at->diffForHumans() }}<span></h5>
                      {{ $komentar->komentar }}
                    </div>
                  </div>
                @endforeach
                
                <hr class="hr-komentar">
                
                @if(Auth::user())
                  <div class="komentar clearfix form">
                    <div class="col-md-1"> 
                      <img src="{{ Auth::user()->avatar }}" alt=""> 
                    </div>
                    <div class="col-md-11">
                      <form method="post" action="{{ route('komentar.create',['snippet'=>$snippet->id]) }}">
                        @csrf
                        <input type="hidden" name="snippet_id" value="{{ $snippet->id }}">
                        <textarea name="komentar" id="komentar" class="form-control" placeholder="tulis komentar ... "></textarea>
                        <input type="submit" value="komentar" class="btn btn-success">
                      </form>
                    </div>
                  </div>
                @else
                  <div class="clearfix">
                    <div class="com-md-12"> 
                      <p class="login-warning">*Login untuk komentar</p> 
                    </div>
                  </div>
                @endif

              </div>
              
          </div>
        </div>

        <div class="col-md-4 snippet">
          <div class="snippet-content pb20">
              <h4 class="other-trick-title">Other Snippet & Trick</h4>
              @foreach($other_r as $other)
                <div class="list-other-trick clearfix">
                  <div class="round-image"> 
                      <img src="{{ asset($other->framework->bg) }}"> 
                  </div>
                  <div>
                    <p class="snippet-user">
                        <a href="{{ route('snippet.user',['contributor'=>$other->contributor->id]) }}">
                        {{ $other->contributor->name }}
                        </a>
                    </p>
                    <h3 class="snippet-title">
                        <a href="{{ route('snippet.detail',['contributor'=>$other->contributor->id,'snippet'=>$other->id]) }}">
                            {{ $other->title }}
                        </a>
                    </h3>
                  </div>
                </div>
              @endforeach
          </div>
        </div>

      </div>

    </div>

  </div>
</div>

<script>
hljs.initHighlightingOnLoad();

@if(Auth::user() && Auth::user()->id != $snippet->contributor_id)
  function star()
  {
    $.post("{{ route('snippet.star',['snippet'=>$snippet->id]) }}",{
      _method:'POST',
      _token:'{{ csrf_token() }}'
    }).done(function(){
      window.location.href = "{{ route('snippet.detail',['contributor'=>$snippet->contributor_id,'snippet'=>$snippet->id]) }}";
    });
  }
@endif
</script> 
@endsection