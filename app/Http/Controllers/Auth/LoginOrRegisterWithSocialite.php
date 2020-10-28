<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

trait LoginOrRegisterWithSocialite
{
    private function loginOrRegister(string $driver)
    {
        try {
            $user = Socialite::driver($driver)->user();
        } catch (\Exception $e) {
            return redirect('login');
        }

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $newUser = new User([
                'email' => $user->email,
                'name' => $user->name ?? $user->nickname ?? $user->email,
                'password' => Str::random(),
            ]);
            $newUser->save();

            auth()->login($newUser, true);
        }

        return redirect('posts');
    }
}
