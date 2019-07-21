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
        $snippet = $contributor->snippet();
        return view('snippet.user',[
            'contributor'=>$contributor,
            'snippet_r'=>$snippet->paginate(),
            'total_view'=>$snippet->sum('view'),
            'total_star'=>$snippet->sum('star')
        ]);
    }
}
