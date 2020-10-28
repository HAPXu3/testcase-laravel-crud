<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginGoogleController extends Controller
{
    public function login()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('login');
        }

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $newUser = new User([
                'email' => $user->email,
                'name' => $user->name,
                'password' => Str::random(),
            ]);
            $newUser->save();

            auth()->login($newUser, true);
        }

        return redirect('posts');
    }
}
