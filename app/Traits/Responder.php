<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

trait Responder
{
    /**
     * @param  $data
     * @param int $code
     * @param string|null $message
     * @return JsonResponse
     */
    protected function successMessage($data, string $message = null, int $code = ResponseAlias::HTTP_OK): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message ?? trans('messages.operationCompleted'),
            'data' => $data
        ], $code);
    }

    /**
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    protected function errorMessage(string $message, int $code): JsonResponse
    {
        return response()->json([
            'success' => false,
            'error' => $message,
            'code' => $code
        ], $code);
    }
}
