<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class ApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $auth = $request->header('Authorization');
        if($auth){
            $token = str_replace('Bearer ','',$auth);
            if(!$token){
                return response()->json(['message' => 'User invalid.'],401);
            }

            $user = User::where('api_token',$token)->first();
            if(!$user){
                return response()->json(['message' => 'User not found.'],401);
            }
            auth()->setUser($user);
            return $next($request);
        }
        return response()->json(['message' => 'Token başarısız'],401);
    }
}
