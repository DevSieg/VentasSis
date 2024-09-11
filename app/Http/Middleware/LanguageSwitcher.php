<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class LanguageSwitcher
{
    public function handle($request, Closure $next)
    {
        // Verifica si la sesión tiene un valor para 'lang' y cambia el idioma
        if (Session::has('lang')) {
            App::setLocale(Session::get('lang'));
        }

        return $next($request);
    }
}