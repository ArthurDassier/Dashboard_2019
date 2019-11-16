<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;



class SocialAuthLinkedinController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }


    public function callback()
    {
        try {


            $linkedinUser = Socialite::driver('linkedin')->stateless()->user();
            $existUser = User::where('email',$linkedinUser->email)->first();


            if($existUser) {
                Auth::loginUsingId($existUser->id);
                // auth()->login($existingUser, true);
            }
            else {
                $user = new User;
                $user->name = $linkedinUser->name;
                $user->email = $linkedinUser->email;
                // $user->linkedin_id = $linkedinUser->id;
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
