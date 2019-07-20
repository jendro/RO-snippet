<?php

namespace App\Http\Controllers\Snippet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

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
    
    public function detail($id)
    {
        return view('snippet.detail');
    }

}
