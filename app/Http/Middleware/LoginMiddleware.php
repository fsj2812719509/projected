<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        //验证是否登录

        $user = session('userlogin');
        if($user['username']==''){
            echo '请登录';
            return redirect('/');

        }
        return $next($request);
    }
}
