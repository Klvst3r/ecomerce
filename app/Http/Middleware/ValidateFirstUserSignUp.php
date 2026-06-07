<?php

namespace App\Http\Middleware;

use Closure;

use App\User; //Para contabilizar usuarios de la bd

use Illuminate\Support\Facades\Auth; //Para redirigir a login si ya hay un usuario registrado

class ValidateFirstUserSignUp
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
        //contamos la cantidad de usuariuos registrados en la base de datos
        $userCount = User::count();

        //Si el coneo es > 0 hay almenos un usuario
        if ($userCount > 0 && !Auth::check()) {
            // Si ya hay usuarios registrados, redirigimos a la página de inicio de sesión
            //return redirect()->route('login')->with('status', 'Ya existe un usuario registrado. Por favor, inicia sesión.');
            // Redirigimos al home para que no pueda ver el registro
            return redirect('/')->with('status', 'Ya existe un usuario registrado. Por favor, inicia sesión.');
        }

        return $next($request);
    }
}
