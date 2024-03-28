<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckDemoExpiration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $expirationDate = Carbon::parse('2024-03-29'); // Set your expiration date
        $today = Carbon::now();

        if ($today->gt($expirationDate)) {
            // If today is greater than the expiration date, abort or redirect
            return abort(403, 'This demo has expired.');
        }

        return $next($request);
    }
}
