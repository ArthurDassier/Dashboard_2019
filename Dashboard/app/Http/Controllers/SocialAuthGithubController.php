<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;



class SocialAuthGithubController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }


    public function callback()
    {
        try {


            $githubUser = Socialite::driver('github')->stateless()->user();
            $existUser = User::where('email',$githubUser->email)->first();


            if($existUser) {
                Auth::loginUsingId($existUser->id);
                // auth()->login($existingUser, true);
            }
            else {
                $user = new User;
                $user->name = $githubUser->name;
                $user->email = $githubUser->email;
                // $user->github_id = $githubUser->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/home');
        }
        catch (Exception $e) {
            return 'error' . " " . $e;
        }
    }
}
