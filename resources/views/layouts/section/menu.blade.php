<ul class="nav navbar-nav navbar-right">
    <li>
        
    </li>
    <li><a href="{{ route('about') }}" class="default">About</a></li>
    @if(Auth::user())
        <li class="dropdown">
            <a class="default dropdown-toggle" type="button" data-toggle="dropdown">
                {{ Auth::user()->name }}
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('user.admin',['user'=>'nama_user']) }}">Profil</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('snippet.add') }}" class="btn btn-block btn-social btn-tambah">
                <i class="fa fa-plus"></i> Create Snippet
            </a>
        </li>
    @else
        <li>
            <a href="{{route('auth.github') }}" class="btn btn-block btn-social btn-github">
                <i class="fa fa-github"></i> Sign in with Github
            </a>
        </li>
    @endif
</ul>

<style>
.btn-tambah{
    background: green;
    border-radius:10px!important;
}
.btn-tambah:hover{
    background:green!important;
    opacity: 0.8;
}
</style>