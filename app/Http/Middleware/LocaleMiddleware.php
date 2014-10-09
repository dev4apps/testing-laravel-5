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
		$this->detectLocale(app()->router->getCurrentRoute());
		return $next($request);
    }

	public function detectLocale(\Illuminate\Routing\Route $route)
	{
		// gets the locale from parameter
		$locale = $route->getParameter('locale');
		// set the current request app locale
		app()->setLocale($locale);
		// remove the locale parameter from the current route
		$route->forgetParameter('locale');
	}

}
