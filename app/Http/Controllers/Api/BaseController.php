<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthManager;

class BaseController extends Controller
{
    public function __construct()
    {
        /** @var AuthManager $auth */
        $auth = auth();
        $auth->setDefaultDriver('api');
    }

    protected function respondWithSuccess($message, $data, $http_code = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], $http_code);
    }

    protected function respondWithError($message, $data = [], $http_code = 400)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'data' => $data,
        ], $http_code);
    }
}
