<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCustomerLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah customer sudah login melalui guard 'customer'
        if (auth()->guard('customer')->check()) {
            // Jika sudah login, redirect ke halaman home atau dashboard
            return redirect()->route('home');
        }

        // Jika belum login, lanjutkan ke route berikutnya (misalnya: login/register)
        return $next($request);
    }
}
