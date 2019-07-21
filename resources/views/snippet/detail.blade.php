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
                        Replace Default View Login in Laravel
                    </h3>
                    <span class="snippet-timeago">{{ $snippet->created_at->diffForHumans() }}, in :</span>
                    <span class="snippet-tag {{ $snippet->framework->class }}">
                        <a class="framework-icon" title="laravel" href="{{ route('snippet.framework',['framewkro'=>$snippet->framework->framework]) }}">
                            <img src="{{ asset('images/frameworks/'.$snippet->framework->icon) }}" alt="">
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
                    <i class="fa fa-copy"></i> {{ $snippet->copied }}
                    @if(Auth::user()->id != $snippet->contributor_id)
                      <a href="#" class="action-star">
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
                <div class="pull-right action-snippet">
                  <a href="#">
                    <i class="fa fa-copy"></i>
                  </a>
                </div>
                <h4>Code </h4>
<pre><code class="{{ $snippet->framework->syntax }}">{{ $snippet->code }}</code></pre>  
              </div>

              <div class="row snippet-description">
                <h4>Komentar</h4>
                
                @php($no = 0)
                @foreach($snippet->komentar as $komentar)
                  <div class="komentar clearfix {{ ($no++%2==1)?'odd':'' }}">
                    <div> 
                      <img src="{{ $komentar->contributor->avatar }}" alt=""> 
                    </div>
                    <div class="detail-komentar">
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
                      <textarea name="" id="" class="form-control" placeholder="tulis komentar ... "></textarea>
                      <input type="submit" value="komentar" class="btn btn-success">
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
              <div class="list-other-trick">
                <div class="round-image"> 
                    <img src="{{ asset('images/frameworks/laravel2.png') }}" alt=""> 
                </div>
                <div>
                  <p class="snippet-user">
                      <a href="{{ route('snippet.user',['user'=>'nama_user']) }}">
                      Nama User
                      </a>
                  </p>
                  <h3 class="snippet-title">
                      <a href="{{ route('snippet.detail',['contributor'=>1,'snippet'=>'id']) }}">
                          Replace Default View Login in Laravel
                      </a>
                  </h3>
                </div>
              </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>

<script>
  hljs.initHighlightingOnLoad();
</script>

@endsection