<?php

namespace Elison\Ozone\Http\Middleware;

use Closure;
use Elison\Ozone\Models\AllowedIp;
use Elison\Ozone\Models\UnauthorizedIpLog;
use \Request;

class OzoneMiddleware
{
    public function handle($request, Closure $next)
    {
        $allowedIps = AllowedIp::pluck('ip')->toArray();

        $currentIp = Request::getClientIp();

        if (! in_array($currentIp, $allowedIps)) {
            UnauthorizedIpLog::create([
                'ip' => $currentIp
            ]);

            abort(403);
        }

        return $next($request);
    }
}
