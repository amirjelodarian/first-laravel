<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class MustBeAdministratorUserMiddleware
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
        if (auth()->check()){
            $userId = $request->user();
            $user = User::whereUserMode('administrator')->whereId($userId->id)->exists();
            if (!$user){
                flash('سطح دسترسی حساب شما مدیر نیست و دسترسی ندارید !','alert-danger');
                return back();
            }
        }
        return $next($request);
    }
}
