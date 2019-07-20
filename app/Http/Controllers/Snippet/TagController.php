<?php

namespace App\Http\Controllers\Snippet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    
    public function __invoke(Request $request,$tag)
    {
        return view('snippet.tag',[
            'tag'=>$tag
        ]);
    }
}
