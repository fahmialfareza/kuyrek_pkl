<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App;
use Config;

class Language
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
      if (Session::has('locale')) {
        $locale = Session::get('locale', Config::get('app.locale'));
      } else {
        $locale = 'id';
      }

      App::setlocale($locale);

      return $next($request);
    }
}
