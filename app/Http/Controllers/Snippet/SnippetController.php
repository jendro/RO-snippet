<?php

namespace App\Http\Controllers\Snippet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Model\Contributor;
use App\Model\Snippet;

class SnippetController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('snippet.home',[
            'title'=>'RO-Snippet, Tips & Trick Seputar Programming',
            'snippet_r'=>Snippet::with([
                'tags.tag',
                'framework',
                'contributor'])
            ->paginate(21)
        ]);
    }
    
    public function detail(Contributor $contributor,Snippet $snippet)
    {
        $snippet->counterView();
        return view('snippet.detail',[
            'snippet'=>$snippet,
            'title'=>$snippet->framework->framework.": ".$snippet->title,
            'other_r'=>Snippet::where('id', '!=', $snippet->id)
                ->where('framework_id',$snippet->framework_id)
                ->orderBy('view')
                ->limit(5)
                ->get()
        ]);
    }

}
