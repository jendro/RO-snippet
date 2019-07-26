<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function index(Request $request)
    {
        $user = Auth::user();
        $snippet = $user->snippet(21);
        return view('user.admin',[
            'user'=>$user,
            'title'=>'Admin Page: '.$user->name,
            'total_view'=>$snippet->sum('view'),
            'total_star'=>$snippet->sum('star')
        ]);
    }

    public function edit(Request $request)
    {
        return view('user.form-profil',[
            'title'=>'Edit Contributor: '.Auth::user()->name,
            'user'=>Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        Auth::user()->update($request->only(
            'nickname',
            'name',
            'bio'
        ));
        Auth::user()->updateAvatar($request->file('avatar'));
        return redirect()->route('user.admin',['user'=>Auth::user()->id]);
    }



}
