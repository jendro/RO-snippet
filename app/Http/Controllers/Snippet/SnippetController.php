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
        return view('snippet.home');
    }
    
    public function detail(Contributor $contributor,Snippet $snippet)
    {
        return view('snippet.detail',[
            'snippet'=>$snippet
        ]);
    }

}
