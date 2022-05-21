<?php

namespace App\Http\Controllers\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SocialiteloginController extends Controller
{

    function GithubCallBack(Request $request){
    //    $user= Socialite::driver('github')->stateless()->user();
    //    $token= $user->token;
    //    $user->getId();
    //    $user->getName();
    //    $user->getNickname();
    //    $user->getAvatar();

    //     dd( $user->getName());
    $githubUser = Socialite::driver('github')->user();

    $user = User::where('id', $githubUser->id)->first();

    if ($user) {
        $user->update([
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);
    } else {
        $user = User::create([
            
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'github_id' => $githubUser->id,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);
    }

    Auth::login($user);

    return redirect('/');
    }
    function CallGitHub(){
        $callGithubloginService =Socialite::driver('github')->redirect();
        return $callGithubloginService;
    }

    function onRegistration(){
        DB::table('users')->insert([
            'name'=>'',
            'email'=>'',
            'user_id'=>'',
            'nick_name'=>'',
        ]);
    }
}
