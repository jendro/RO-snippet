<?php

namespace App\Http\Controllers\Snippet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrameworkController extends Controller
{
    
    public function __invoke(Request $request, $framework)
    {
        return view('snippet.framework',[
            'framework'=>$framework
        ]);
    }
    
}
