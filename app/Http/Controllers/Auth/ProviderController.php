<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        $SocialUser = Socialite::driver($provider)->user();
        //dd($SocialUser);
        $user = User::updateOrCreate([
            'provider_id' => $SocialUser->id,
            'provider' => $provider,
        ], [
            'name' => $SocialUser->name,
            'email' => $SocialUser->email,
            'provider_token' => $SocialUser->token
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
