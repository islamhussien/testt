<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
class globals
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user=User::find(Auth::id());
        view::share('Type',$user->userType);
        view::share('lang',$user->lang);
        if($user->lang=='ar') {
            app('translator')->setLocale('ar');
        }else{
            app('translator')->setLocale('en');
        }
        return $next($request);
    }
}
