<ul class="nav navbar-nav navbar-right">
    <li>
        
    </li>
    <li><a href="{{ route('about') }}" class="default">About</a></li>
    <li><a href="{{ route('user.admin',['user'=>'nama_user']) }}" class="default">Username Panjang</a></li>
    <li>
        <a href="{{ route('snippet.add') }}" class="btn btn-block btn-social btn-tambah">
            <i class="fa fa-plus"></i> Create Snippet
        </a>
    </li>
    {{-- <li>
        <a href="{{route('auth.github') }}" class="btn btn-block btn-social btn-github">
            <i class="fa fa-github"></i> Sign in with Github
        </a>
    </li> --}}
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