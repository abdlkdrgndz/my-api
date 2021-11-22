<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Str;
use App\Models\Device;

trait DevicePlatform
{
    /**
     * @var Agent
     */
    private $agent;

    public function __construct(Agent $agent)
    {
        $this->agent = $agent;
    }

    /**
     * @return array
     */
    protected function setDevicePlatform(): array
    {
        return Device::updateOrCreate([
            'id_user' => Auth::id()
        ],
            [
                'id_user' => Auth::id(),
                'uid' => Hash::make(Str::random(12)),
                'appId' => Hash::make(Str::random(8)),
                'device' => $this->agent->device(),
                'os' => $this->agent->platform(),
                'language' => $this->agent->languages(),
                'device_type' => $this->agent->deviceType(),
                'os_version' => $this->agent->version($this->agent->platform())
            ]);
    }
}

