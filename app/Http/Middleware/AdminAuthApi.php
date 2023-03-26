<?php

namespace App\Http\Middleware;

use App\Constants\UserTyps;
use Closure;
use Illuminate\Http\Request;

class AdminAuthApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guard('api')->check() && auth()->guard('api')->user()->status == UserTyps::ADMIN['code']) {
            return $next($request);
        } else {
            $data['status'] = false;
            $data['message'] = "plz_login";
            return response($data, 401);
        }
    }
}
