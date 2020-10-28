<?php

namespace App\Http\Controllers\Auth;

trait RedirectToPosts
{
    public function redirectTo()
    {
        return 'posts';
    }
}
