<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrganizerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
public function handle(Request $request, Closure $next): Response
{
    if (!auth()->check()) {
        return redirect('/login');
    }

    if (auth()->user()->role !== 'organizer') {
        abort(403);
    }

    return $next($request);
}
}
