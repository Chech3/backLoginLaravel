<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];



    protected function convertValidationExceptionToResponse(ValidationException $e, $request){
        if ($e->response){
            return $e->response;
        }

        return $this->ivalidJson($request, $e);
    }

    protected function ivalidJson ($request, ValidationException $e){
        return response()->json([
            'message' => $e->getMessage(),
            'errors' => $e->errors(),
        ], $e->status);
    }


    


    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
