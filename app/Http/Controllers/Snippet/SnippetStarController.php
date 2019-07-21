<?php

namespace App\Http\Controllers\Snippet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Model\Snippet;
use App\Model\SnippetStar;

class SnippetStarController extends Controller
{

    public function __constructor()
    {
        $this->middleware('auth');
    }

    public function __invoke(Snippet $snippet)
    {
        $data = SnippetStar::firstOrCreate([
            'contributor_id'=>Auth::user()->id,
            'snippet_id'=>$snippet->id
        ]);
    }

}
