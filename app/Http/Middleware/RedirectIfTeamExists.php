<?php namespace App\Http\Middleware;

use Closure;

class RedirectIfTeamExists {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if (\Auth::user()->team_id)
            return redirect()->action('TeamsController@show');

        return $next($request);
	}

}
