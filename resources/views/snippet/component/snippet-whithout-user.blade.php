<div class="col-md-4 snippet">
    <div class="snippet-content">
        <div class="row snippet-header">
            <div>
            <p class="snippet-user">
                {{ $snippet->contributor->name }}
            </p>
            <h3 class="snippet-title">
                <a href="{{ route('snippet.detail',['user'=>$snippet->contributor_id,'snippet'=>$snippet->id]) }}">
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
                    <img src="{{ asset('images/frameworks/'.$snippet->framework->icon) }}" alt="">
                    {{ $snippet->framework->framework }}
                </a>
            </span>
            {{-- <span class="snippet-tag"><a href="{{ route('snippet.tag',['tag'=>'tag']) }}">View</a></span> --}}
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