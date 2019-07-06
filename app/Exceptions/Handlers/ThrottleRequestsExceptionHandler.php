<?php

namespace App\Exceptions\Handlers;

use Exception;
use Illuminate\Http\Exceptions\ThrottleRequestsException;

/**
 * Class ThrottleRequestsExceptionHandler
 * @package App\Exceptions\Handlers
 */
class ThrottleRequestsExceptionHandler extends Exception
{
    /**
     * @param ThrottleRequestsException $exception
     * @return \Illuminate\Http\JsonResponse
     */
    public static function handle(ThrottleRequestsException $exception)
    {
        return fail($exception->getMessage());
    }
}
