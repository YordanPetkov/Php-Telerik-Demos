<?php
namespace CoolBlog\Http\Middleware;

use Closure;

class TestMiddleware
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
        /* if ($request->age <= 200) {
            return redirect('home');
        } */
        /* if($request->age < 18) {
            return redirect('/');
        } */

        echo 'Before middleware.';

        return $next($request);
    }
}