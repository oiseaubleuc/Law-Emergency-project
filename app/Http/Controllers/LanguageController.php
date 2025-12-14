<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    /**
     * Switch the application language.
     *
     * @param string $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLang($lang)
    {
        $availableLocales = config('app.available_locales', []);
        
        if (array_key_exists($lang, $availableLocales)) {
            Session::put('locale', $lang);
            App::setLocale($lang);
        }
        
        return Redirect::back();
    }
}
