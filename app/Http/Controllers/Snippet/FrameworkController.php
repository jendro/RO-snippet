<?php

namespace App\Http\Controllers\Snippet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Framework;

class FrameworkController extends Controller
{
    
    public function __invoke(Request $request,Framework $framework)
    {
        return view('snippet.framework',[
            'framework'=>$framework->framework,
            'snippet_r'=>
                $framework->snippet()
                    ->with([
                    'tags.tag',
                    'framework',
                    'contributor'
                    ])    
                    ->paginate()
        ]);
    }
    
}
