<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SnippetController extends Controller
{
    
    public function add(Request $request)
    {
        return view('user.snippet.form');
    }

}
