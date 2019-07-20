<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container"> 
        <div class="navbar-header pull-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="{{ route('home') }}">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
            </a> 
        </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
            @include('layouts.section.menu')
        </div>
        <div class="search">
            <i class="fa fa-search"></i>
            <input type="text" class="form-control" placeholder="pencarian" id="pencarian">
        </div>
    </div>
</nav>

<script>
$(document).ready(function(){
    $("#pencarian").keyup(function(e){
        let query = $(this).val();
        if(e.which == 13){
            if(query!=''){
                pencarian(query);
            }
        }
    });
});

function pencarian(query)
{
    window.location.href = "{{ route('snippet.search') }}?q="+query;
}
</script>