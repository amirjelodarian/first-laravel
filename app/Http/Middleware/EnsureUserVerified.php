<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class EnsureUserVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = $request->user();
        $user = User::whereNotNull('phone_verified_at')->whereId($userId->id)->exists();
        if (!$user){
            flash('باید حساب خود را تایید کنید !','alert-danger');
//            return back();
        }
        return $next($request);
    }
}
