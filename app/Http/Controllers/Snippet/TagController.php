<?php

namespace App\Http\Controllers\Snippet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Snippet;
use App\Model\Tag;

class TagController extends Controller
{
    
    public function __invoke(Request $request,Tag $tag)
    {
        return view('snippet.tag',[
            'tag'=>$tag->tag,
            'snippettags'=>$tag->snippetTags()->paginate()
        ]);
    }
}
