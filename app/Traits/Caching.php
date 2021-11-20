<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait Caching
{
    use Responder;

    /**
     * Cache set data
     * @param string $key
     * @param array $value
     * @param string $store
     * @param integer $time
     * @return bool
     */
    protected function setData(string $key, array $value, string $store, int $time): bool
    {
        /**
         * Use default .env file cache
         */
        if (!$store) {
            return Cache::put($key, $value, $time);
        }

        return Cache::store($store)->put($key, $value, $time);
    }

    /**
     * Cache get data
     * @param string $key
     * @return mixed
     */
    protected function getData(string $key): bool
    {
        if (!Cache::has($key)) {
            return $this->errorMessage(trans('messages.notFound'), 401);
        }
        return Cache::get($key);
    }

    /**
     * @param string $key
     * @param array|null $value
     * @param int|null $time
     * @return mixed
     */
    protected function setOrGetData(string $key, ?array $value, ?int $time)
    {
        if (!Cache::has($key)) {
            return $this->setData($key, $value, env('CACHE_DRIVER'), $time);
        }
        return Cache::get($key);
    }
}
