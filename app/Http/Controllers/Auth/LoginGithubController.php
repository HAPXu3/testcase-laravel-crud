<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginGithubController extends Controller
{
    use LoginOrRegisterWithSocialite;

    public function login()
    {
        return $this->loginOrRegister('github');
    }
}
