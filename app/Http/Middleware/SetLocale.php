<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if locale is set in session
        if (Session::has('locale')) {
            $locale = Session::get('locale');
            $availableLocales = config('app.available_locales', []);
            
            // Only set locale if it's available
            if (array_key_exists($locale, $availableLocales)) {
                App::setLocale($locale);
            }
        } else {
            // Set default locale from config
            App::setLocale(config('app.locale', 'en'));
        }

        return $next($request);
    }
}
