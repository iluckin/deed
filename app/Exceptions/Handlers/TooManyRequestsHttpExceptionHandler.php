<?php

namespace App\Exceptions\Handlers;

use Exception;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

class TooManyRequestsHttpExceptionHandler extends Exception
{
    public static function handle(TooManyRequestsHttpException $exception)
    {
        return fail($exception->getMessage());
    }
}
