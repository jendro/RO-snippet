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
                    <img src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
                  </div>
                  <div>
                    <p class="snippet-user">
                        <a href="{{ route('snippet.user',['user'=>'nama_user']) }}">
                        Nama User
                        </a>
                    </p>
                    <h3 class="snippet-title">
                        Replace Default View Login in Laravel
                    </h3>
                    <span class="snippet-timeago">4 mount ago, in :</span>
                    <span class="snippet-tag tag-laravel">
                        <a class="framework-icon" title="laravel" href="{{ route('snippet.framework',['framewkro'=>'framework']) }}">
                            <img src="{{ asset('images/frameworks/laravel.png') }}" alt="">
                            Laravel
                        </a>
                    </span>
                    <span class="snippet-tag"><a href="{{ route('snippet.tag',['tag'=>'tag']) }}">View</a></span>
                    <span class="snippet-tag"><a href="{{ route('snippet.tag',['tag'=>'tag']) }}">Controller</a></span>
                  </div>
              </div>

              <div class="row snippet-statistic detail">
                  <i class="fa fa-caret-up"></i> 10
                  <i class="fa fa-caret-down"></i> 10
                  <div class="pull-right">
                  <i class="fa fa-eye"></i> 10
                  <i class="fa fa-copy"></i> 10
                  <a href="#" class="action-star">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star"></i> 10
                  </a>
                  </div>
              </div>

              <div class="row snippet-description">
                <h4>Description</h4>
                <p class="detail">Cara mengganti tampilan default login dari php artisan make:auth Cara mengganti tampilan default login dari php artisan make:auth Cara mengganti tampilan default login dari php artisan make:auth Cara mengganti tampilan default login dari php artisan make:auth</p>
              </div>

              <div class="row snippet-description">
                <div class="pull-right action-snippet">
                  <a href="#">
                    <i class="fa fa-copy"></i>
                  </a>
                </div>
                <h4>Code </h4>
<pre><code class="php">use Illuminate\Support\Facades\Validator;
protected function validator(array $data)
{
  return Validator::make($data, [
    'username' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'email', 'max:255']
  ]);
}
</code></pre>
                
              </div>
              <div class="row snippet-description">
                <h4>Komentar</h4>
                <div class="komentar clearfix">
                  <div> 
                    <img src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
                  </div>
                  <div class="detail-komentar">
                    ini adalah komentar saya
                  </div>
                </div>
                <div class="komentar clearfix odd">
                  <div> 
                    <img src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
                  </div>
                  <div class="detail-komentar">
                    ini adalah komentar saya
                  </div>
                </div>
                <hr class="hr-komentar">
                <div class="komentar clearfix form">
                  <div class="col-md-1"> 
                    <img src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
                  </div>
                  <div class="col-md-11">
                    <textarea name="" id="" class="form-control" placeholder="tulis komentar ... "></textarea>
                    <input type="submit" value="komentar" class="btn btn-success">
                  </div>
                </div>
                <div class="clearfix">
                  <div class="com-md-12"> 
                    <p class="login-warning">*Login untuk komentar</p> 
                  </div>
                </div>
              </div>
              
          </div>
        </div>

        <div class="col-md-4 snippet">
          <div class="snippet-content pb20">
              <h4 class="other-trick-title">Other Trick</h4>
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
                      <a href="{{ route('snippet.detail',['snippet'=>'id']) }}">
                          Replace Default View Login in Laravel
                      </a>
                  </h3>
                </div>
              </div>          
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
                      <a href="{{ route('snippet.detail',['snippet'=>'id']) }}">
                          Replace Default View Login in Laravel
                      </a>
                  </h3>
                </div>
              </div> 
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
                      <a href="{{ route('snippet.detail',['snippet'=>'id']) }}">
                          Replace Default View Login in Laravel
                      </a>
                  </h3>
                </div>
              </div> 
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
                      <a href="{{ route('snippet.detail',['snippet'=>'id']) }}">
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