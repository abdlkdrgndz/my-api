<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;

class UserAgentController extends BaseController
{
    /**
     * @return array
     */
    public static function getMobileInfos(): array
    {

        $agent = new Agent();

        return [
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
