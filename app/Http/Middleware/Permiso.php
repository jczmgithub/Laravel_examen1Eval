<?php

namespace App\Http\Middleware;

use Closure;
use App\UsuPermitido;

class Permiso
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


        if (UsuPermitido::where('nombreUsu',$request->input('usuario'))->first()->hasPermiso()) {
            return $next($request);
        }


        return redirect('/denegado');
    }
}
