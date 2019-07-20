<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function index(Request $request)
    {
        return view('user.admin');
    }

    public function edit(Request $request)
    {
        return view('user.form-profil');
    }



}
