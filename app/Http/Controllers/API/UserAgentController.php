<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;

class UserAgentController extends Controller
{
    public static function set_mobile_infos(Request $request) {

        $agent = new Agent();

        $infos = [
            'uid' => hash(Str::random(16)),
            'appId' => hash(Str::random(16)),
            'device' => $agent->device(),
            'os' => $agent->platform(),
            'language' => $agent->languages(),
            'device_type' => $agent->deviceType(),
            'os_version' => $agent->version($agent->platform()),
            'is_phone' => $agent->isPhone()
        ];
    }
}
