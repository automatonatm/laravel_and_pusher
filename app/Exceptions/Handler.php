<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

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
        if($exception instanceof  TokenBlacklistedException  ) {
            return response()->json(['token_absent' => 'This token cannot be used again']);
        }else if($exception instanceof  TokenInvalidException) {
            return response()->json(['error' => 'Token is invalid'], 400);
        } else if($exception instanceof  TokenExpiredException ) {
            return response()->json(['token_expired' => 'Token is Expired'], 400);
        }
        else if($exception instanceof  JWTException  ) {
            return response()->json(['token_absent' => 'There was a problem with your token']);
        }


        return parent::render($request, $exception);
    }
}
