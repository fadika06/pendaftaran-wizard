<?php

namespace Bantenprov\PendaftaranWizard\Http\Middleware;

use Closure;

/**
 * The PendaftaranWizardMiddleware class.
 *
 * @package Bantenprov\PendaftaranWizard
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PendaftaranWizardMiddleware
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
        return $next($request);
    }
}
