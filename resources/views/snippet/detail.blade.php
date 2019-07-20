@extends('layouts.main')

@section('content')

<div class="first-content content">
  <div class="container" style="min-height:600px">
    
    <div class="list-snippet">
      
      <div class="row">
        
        <div class="col-md-8 snippet">
          <div class="snippet-content">
              <div class="row snippet-header">
                  <div class="snippet-image"> 
                    <img src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
                  </div>
                  <div>
                  <p class="snippet-user">
                      <a href="{{ route('snippet.user',['user'=>'nama_user']) }}">
                      Nama User
                      </a>
                  </p>
                  <h3 class="snippet-title" style="margin-bottom:3px">
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
              <div class="row snippet-statistic" style="padding:0 10px 10px;border-bottom:1px solid #eee">
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
              <div class="row snippet-short-description">
                <h4>Description</h4>
                <p style="height:auto">Cara mengganti tampilan default login dari php artisan make:auth Cara mengganti tampilan default login dari php artisan make:auth Cara mengganti tampilan default login dari php artisan make:auth Cara mengganti tampilan default login dari php artisan make:auth</p>
              </div>
              <div class="row snippet-short-description">
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
              <div class="row snippet-short-description">
                <h4>Komentar</h4>
                <div class="komentar clearfix">
                  <div class="snippet-image"> 
                    <img src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
                  </div>
                  <div class="detail-komentar">
                    ini adalah komentar saya
                  </div>
                </div>
                <div class="komentar clearfix odd">
                  <div class="snippet-image"> 
                    <img src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
                  </div>
                  <div class="detail-komentar">
                    ini adalah komentar saya
                  </div>
                </div>
                <hr class="hr-komentar">
                <div class="komentar clearfix form">
                  <div class="col-md-1"> 
                    <img  style="border-radius:100%" src="{{ asset('img/testimonials/05.jpg') }}" alt=""> 
                  </div>
                  <div class="col-md-11">
                    <textarea name="" id="" class="form-control" placeholder="tulis komentar ... "></textarea>
                    <input type="submit" value="komentar" class="btn btn-success" style="float:right;margin-top:10px">
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
          <div class="snippet-content" style="padding-bottom:20px">
              <h4 style="margin-bottom:10px;border-bottom:1px solid #eee;padding-bottom:10px;">Other Trick</h4>
              <div class="list-trick">
                <div class="snippet-image"> 
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
              <div class="list-trick">
                <div class="snippet-image"> 
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
              <div class="list-trick">
                <div class="snippet-image"> 
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
              <div class="list-trick">
                <div class="snippet-image"> 
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
<style>
.list-trick:first-child{
  margin-top:30px;
}
.list-trick{
  border-bottom:1px solid #eee;
  padding-bottom:20px;
  margin-bottom:20px;
}
.komentar{
  padding:15px;
  background: #efefef;
  border-radius:15px;
  clear: both;
  margin-bottom:10px;
}
.komentar.odd{
  background: #fafafa;
}
.komentar .snippet-image{
  width:50px;
  height:50px;
}
.komentar img{
  width:50px;
  height:50px;
}
.detail-komentar{
  margin-top:5px;
  color:#555;
}
.komentar.form{
  background: #DCE9F5;
  margin-top:10px;
}
.komentar.form textarea{
  font-size:0.9em;
  height:80px;
}
.hr-komentar{
  width:100%;
  height: 1px;
  background: #ccc;
  margin:0;
}
p.login-warning{
  font-style: italic;
  font-size:0.9em!important;
}
.action-snippet{
  padding:5px;
  float:right;
  font-size:1.3em;
}
.action-star .fa-star{
  color:yellow!important;
}
.action-star:hover .fa-star-o{
  color:yellow;
}
</style>
<script>
hljs.initHighlightingOnLoad();
</script>
@endsection