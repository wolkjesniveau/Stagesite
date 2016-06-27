<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin
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
        if(auth()->check() && auth()->user()->IsNotAdmin()) {
            return redirect()->back()->with('error', 'Je hebt geen rechten om deze pagina te kunnen bezoeken');
        }

        return $next($request);



    }
}
