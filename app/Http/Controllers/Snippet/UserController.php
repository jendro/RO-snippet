<?php

namespace App\Http\Controllers\Snippet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Contributor;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Contributor $contributor)
    {
        $snippet = $contributor->snippet()
            ->with([
                'tags.tag',
                'framework',
                'contributor'
            ]);

        return view('snippet.user',[
            'title'=>'RO-Snippet: '.$contributor->name,
            'contributor'=>$contributor,
            'snippet_r'=>$snippet->paginate(21),
            'total_view'=>$snippet->sum('view'),
            'total_star'=>$snippet->sum('star')
        ]);
    }
}
