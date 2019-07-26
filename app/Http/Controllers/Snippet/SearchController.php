<?php

namespace App\Http\Controllers\Snippet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Snippet;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $query = $request->q;
        return view('snippet.search',[
            'q'=>$query,
            'title'=>'Snippet in: '.$query,
            'snippet_r'=>Snippet::with([
                    'tags.tag',
                    'framework',
                    'contributor'
                ])    
                ->where('title', 'LIKE', "%$query%")
                ->paginate(21)
        ]);
    }
}
