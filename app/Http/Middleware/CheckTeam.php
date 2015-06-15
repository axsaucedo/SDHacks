<?php namespace App\Http\Middleware;

use Closure;

class CheckTeam {

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
		    return $next($request);
        else
            return redirect()->action('TeamsController@create');
	}

}
