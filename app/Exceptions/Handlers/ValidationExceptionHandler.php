<?php

namespace App\Exceptions\Handlers;

use Exception;
use Illuminate\Validation\ValidationException;

/**
 * Class ValidationExceptionHandler
 * @package App\Exceptions\Handlers
 */
class ValidationExceptionHandler extends Exception
{
    /**
     * @param ValidationException $exception
     * @return \Illuminate\Http\JsonResponse
     */
    public static function handle(ValidationException $exception)
    {
        return fail($exception->getMessage(), 5000, $exception->errors());
    }
}
