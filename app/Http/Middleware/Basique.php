<?php

namespace App\Http\Middleware;

use App\Models\Personne;
use Closure;
use Illuminate\Support\Facades\Auth;

class Basique
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
        dd(Auth::user()->personne->id);

        /*if($personne->structure_id != 0){
            return redirect('/login');
        }

        return $next($request);*/
    }
}
