<?php

namespace App\Actions\Auth;

use App\Http\Resources\ProductResource;
use App\Http\Resources\UserResource;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Auth;

class RespondWithTokenAction
{
    public function execute($token)
    {
        $user = $this->guard()->user();

        return [
            'user' => UserResource::make($user),
            'access_token' => $token,
        ];
    }

    private function guard(): Guard|StatefulGuard
    {
        return Auth::guard();
    }
}
