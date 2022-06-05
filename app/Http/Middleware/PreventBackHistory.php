<?php



namespace AppHttpMiddleware;



use Closure;



class PreventBackHistory

{

    /**

     * Handle an incoming request.

     *

     * @param  IlluminateHttpRequest  $request

     * @param  Closure  $next

     * @return mixed

     */

    public function handle($request, Closure $next)

    {

        $response = $next($request);

        return $response->header('Cache-Control', 'nocache, no-store, max-age=0, must-revalidate')

            ->header('Pragma', 'no-cache')

            ->header('Expires', 'Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
