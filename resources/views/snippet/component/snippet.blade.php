<div class="col-md-4 snippet">
    <div class="snippet-content">
        <div class="row snippet-header">
            <div class="round-image"> 
                <img src="{{ $snippet->contributor->avatar }}" alt=""> 
            </div>
            <div>
            <p class="snippet-user">
                <a href="{{ route('snippet.user',['user'=>$snippet->contributor->login]) }}">
                    {{ $snippet->contributor->name }}
                </a>
            </p>
            <h3 class="snippet-title">
                <a href="{{ route('snippet.detail',['user'=>$snippet->contributor->login,'snippet'=>$snippet->id]) }}">
                    {{ $snippet->title }}
                </a>
            </h3>
            </div>
        </div>
        <div class="row snippet-description">
            <p>{{ $snippet->description }}</p>
            <span class="snippet-timeago">{{ $snippet->created_at->diffForHumans() }} in :</span>
            <span class="snippet-tag {{ $snippet->framework->class }}">
                <a class="framework-icon" title="{{ $snippet->framework->framework }}" href="{{ route('snippet.framework',['framewkro'=>$snippet->framework_id]) }}">
                    <img src="{{ asset($snippet->framework->icon) }}" alt="">
                    {{ $snippet->framework->framework }}
                </a>
            </span>
            @foreach($snippet->tags as $tag)
                <span class="snippet-tag"><a href="{{ route('snippet.tag',['tag'=>$tag->tag->id]) }}">{{ $tag->tag->tag }}</a></span>
            @endforeach
        </div>
        <div class="snippet-statistic">
            <i class="fa fa-caret-up"></i> {{ $snippet->up }}
            <i class="fa fa-caret-down"></i> {{ $snippet->down }}
            <div class="pull-right">
                <i class="fa fa-eye"></i> {{ $snippet->view }}
                {{-- <i class="fa fa-copy"></i> {{ $snippet->copied }} --}}
                <i class="fa fa-star"></i> {{ $snippet->star }}
            </div>
        </div>
    </div>
</div>