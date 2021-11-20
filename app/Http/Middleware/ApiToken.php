<?php

namespace App\Http\Middleware;

use App\Traits\DevicePlatform;
use App\Traits\Responder;
use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class ApiToken
{
    use DevicePlatform;
    use Responder;

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $auth = $request->header('Authorization');
        if ($auth) {
            $token = str_replace('Bearer ', '', $auth);
            if (!$token) {
                return $this->errorMessage(trans('messages.userInvalid'), 401);
            }

            $user = User::where('api_token', $token)->first();
            if (!$user) {
                return $this->errorMessage(trans('messages.userNotFound'), 401);
            }
            /**
             * Set User and device platform information
             */
            auth()->setUser($user);
            $this->setDevicePlatform();
            return $next($request);
        }
        return $this->errorMessage(trans('messages.tokenInvalid'), 403);
    }
}
