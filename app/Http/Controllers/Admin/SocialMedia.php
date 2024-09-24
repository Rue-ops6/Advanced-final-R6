<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialMedia extends Controller
{
#redirects go to my socialAcc
    public function Googleredirect()
    { //driver= from config
        return Socialite::driver('google')->redirect();
    }
    public function Gitredirect()
    {
        return Socialite::driver('github')->redirect();
    }
    public function Linkedredirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }

#callbacks return with my data
    public function Googlecallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user(); //stateless is to give a statment of this being an outsider from internet not a laravel code. it is not erroring tho, it belongs to Socialite
//dd($googleUser);

//update if a user from my DB wants to ligin with a social account, through github id we put in migrate && model!!!!!!!!!!!!
        $user = User::updateOrCreate([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->UserName ?? $googleUser->nickname, //if u didnot find name/UserName verify the nickname coming from social media
            'email' => $googleUser->email,
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
            'password' => Hash::make(Str::random(30)), //put in random password as it's not used from login with socialmedia but it's required in my DB
        ]);

        Auth::login($user);
        return redirect('/home');
    }

    public function Gitcallback()
    {
        $githubUser = Socialite::driver('github')->stateless()->user();
// dd($githubUser);
        $user = User::updateOrCreate([
            'github_id' => $githubUser->id,
        ], [
            'name' => $githubUser->UserName ?? $githubUser->nickname,
            'email' => $githubUser->email,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
            'password' => Hash::make(Str::password(30)),
        ]);
        Auth::login($user);
        return redirect('/home');
    }

    public function Linkedcallback()
    {
        $linkedinUser = Socialite::driver('linkedin')->stateless()->user();

        $user = User::updateOrCreate([
            'linkedin_id' => $linkedinUser->id,
        ], [
            'name' => $linkedinUser->UserName ?? $linkedinUser->nickname,
            'email' => $linkedinUser->email,
            'linkedin_token' => $linkedinUser->token,
            'linkedin_refresh_token' => $linkedinUser->refreshToken,
            'password' => Hash::make(Str::random(30)),
        ]);

        Auth::login($user);
        return redirect('/home');
    }
}
