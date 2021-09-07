<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class EnsureUserNotVerified
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
        if ($user){
            flash('حساب شما تایید شده است.','alert-success');
            return redirect()->route('home');
        }
        return $next($request);
    }
}
