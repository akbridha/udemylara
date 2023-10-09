<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $country = [
            'us',
            'uk',
            'id',
            'my',
            'in',
            'sg'
        ];

        $userCountry = strtolower($request->country); // Ubah kode negara ke huruf kecil

        if (!in_array($userCountry, $country) && !request()->is('unavailable')) {
            return redirect()->route('unavailable');
        }

        return $next($request);
    }

}
