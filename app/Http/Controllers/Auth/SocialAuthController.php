<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    /**
     * Obtain the user information from provider.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            $userSocial = Socialite::driver($provider)->user();
            $user = User::where($provider.'_id', $userSocial->id)->first();
            if ($user) {
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {

                $user = User::create([
                    'name' => $userSocial->name,
                    'email' => $userSocial->email,
                    'password' => encrypt('secret_key'),
                    'google_id' => $userSocial->id,
                    'avatar' => $userSocial->avatar
                ]);
                Auth::login($user);
                return redirect()->route('dashboard');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }


    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */

}
