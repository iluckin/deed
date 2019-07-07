<?php

namespace App\Exceptions;

use App\Exceptions\Handlers\ThrottleRequestsExceptionHandler;
use App\Exceptions\Handlers\TooManyRequestsHttpExceptionHandler;
use App\Exceptions\Handlers\ValidationExceptionHandler;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the exception types that are custom handled.
     *
     * @var array
     */
    protected $handlers = [
        ThrottleRequestsException::class => ThrottleRequestsExceptionHandler::class,
        ValidationException::class => ValidationExceptionHandler::class,
        TooManyRequestsHttpException::class => TooManyRequestsHttpExceptionHandler::class
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($request->expectsJson() && array_key_exists($handler = get_class($exception), $this->handlers)) {
            return $this->handlers[$handler]::handle($exception);
        }

        return parent::render($request, $exception);
    }
}
