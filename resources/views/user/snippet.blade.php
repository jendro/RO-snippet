<div class="col-md-4 snippet">
    <div class="snippet-content">
        <div class="row snippet-header">
            <p class="snippet-user">
                {{ $snippet->contributor->name }}
            </p>
            <h3 class="snippet-title">
                <a href="{{ route('snippet.detail',[
                    'contributor'=>$snippet->contributor->id,
                    'snippet'=>$snippet->id
                    ]) }}">
                    {{ $snippet->title }}
                </a>
            </h3>
            <div class="snippet-action">
                <a href="#" onclick="hapus('{{ route('snippet.destroy',['snippet'=>$snippet->id]) }}')" class="btn btn-round btn-small btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
                <a href="{{ route('snippet.edit',['snippet'=>$snippet->id]) }}" class="btn btn-round btn-small btn-success">
                    <i class="fa fa-pencil"></i>
                </a>
            </div>
        </div>
        <div class="row snippet-description">
            <p>{{ $snippet->description }}</p>
            <span class="snippet-timeago">{{ $snippet->created_at->diffForHumans() }}, in :</span>
            <span class="snippet-tag tag-laravel">
                <a class="framework-icon" title="laravel" href="{{ route('snippet.framework',['framewkro'=>$snippet->framework->id]) }}">
                    <img src="{{ asset($snippet->framework->icon) }}" alt="">
                    Laravel
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