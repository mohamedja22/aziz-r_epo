<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Handler 
{
    // Handle unauthenticated requests
    protected function unauthenticated(
        Request $request,
        AuthenticationException $exception
    ): Response {
        return response()->json([
            'message' => 'Unauthorized. Token missing or invalid.',
        ], 401);
    }
}