<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{

    private $locales = ['ar', 'en', 'fr', 'tu'];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $locale)
    {

        if (isset($locale) && in_array($locale, $this->locales)) {
            App::setLocale($locale);
        } else {
            App::setLocale('ar');
            return redirect('/ar');
        }

        return $next($request);
    }
}
