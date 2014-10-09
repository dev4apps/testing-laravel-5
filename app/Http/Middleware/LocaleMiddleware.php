<?php namespace Hernandev\Sandbox\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;

class LocaleMiddleware implements Middleware
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
        //
    }

}
