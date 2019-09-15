<?php

namespace App\ObServer;

use App\User;
use Str;

class UserObServer
{
    public function creating(User $user)
    {
        $user->activation_token = Str::random(10);
    }
}
