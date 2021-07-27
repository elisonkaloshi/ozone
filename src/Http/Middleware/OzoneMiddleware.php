<?php

namespace Elison\Ozone\Http\Middleware;

use Closure;
use Elison\Ozone\Models\AllowIp;
use Elison\Ozone\Models\Log;
use \Request;

class OzoneMiddleware
{
    public function handle($request, Closure $next)
    {
        $allowedIps = AllowIp::pluck('ip')->toArray();

        $currentIp = Request::getClientIp();

        if (! in_array($currentIp, $allowedIps)) {
            Log::create([
                'ip' => $currentIp
            ]);

            abort(403);
        }

        return $next($request);
    }
}
