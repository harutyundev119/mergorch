<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Support\Arr;

class Locale
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
        if($request->method() == 'GET') {
            $segment = $request->segment(1);
            $languages = Language::all()->pluck('prefix')->toArray();
            if (!in_array($segment,$languages)) {
                $segments = $request->segments();
                $default = config('app.locale');
                $segments = Arr::prepend($segments, $default);
                return redirect()->to(implode('/', $segments));
            }

            app()->setLocale($segment);
        }
        return $next($request);
    }
}
