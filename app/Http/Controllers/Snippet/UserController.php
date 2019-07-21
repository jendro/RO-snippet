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
        return view('snippet.user',[
            'contributor'=>$contributor,
            'snippet_r'=>$contributor->snippet()->get()
        ]);
    }
}
