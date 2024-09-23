<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialMedia extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }
    public function callback()
    {
        $githubUser = Socialite::driver('github')->stateless()->user(); //stateless is not erroring
//dd($githubUser);

        $user = User::updateOrCreate([
            'github_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name ?? $githubUser->nickname,
            'email' => $githubUser->email,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
            'password' => Hash::make(Str::password(30)),
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
