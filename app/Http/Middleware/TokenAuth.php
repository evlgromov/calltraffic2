<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class TokenAuth
{
    public function handle($request, Closure $next): Closure|JsonResponse
    {
        $auth_token = $request->header('Authorization', null);
        $user = User::where('token', $auth_token)->first();

        abort_if(!$auth_token || !$user, 401);

        Auth::login($user);

        return $next($request);
    }
}
