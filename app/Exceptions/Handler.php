<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {

        $this->renderable(function (Throwable $e, Request $request) {
            return response()->json([
                'message' => $e->getMessage(),
                'status' => $e->getCode() == 0 ? 403 : $e->getCode(),
            ], $e->getCode() == 0 ? 403 : $e->getCode());
        });
    }
}
