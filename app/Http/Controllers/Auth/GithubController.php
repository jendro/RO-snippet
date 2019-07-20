<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Model\Contributor;

use Socialite;

class GithubController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
            $authUser = $this->getOrCreateUser($user);
            $this->authenticateUser($authUser);
            return redirect()->route('home');
        } catch (\InvalidArgumentException $e) {
            return redirect()->route('auth.github');
        }
    }

    private function getOrCreateUser($user)
    {
        return Contributor::firstOrCreate(
            [
                'id'=>$user->id,
                'email'=>$user->email
            ],
            [
                'nickname'=>$user->nickname,
                'name'=>$user->name,
                'avatar'=>$user->avatar,
                'company'=>$user->user['company'],
                'blog'=>$user->user['blog'],
                'location'=>$user->user['location'],
                'bio'=>$user->user['bio']
            ]
        );
    }

    private function authenticateUser($user)
    {
        Auth::login($user);
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
