<?php

namespace App\Http\Controllers;

use App\Services\LoginService;
use App\Http\Requests\LoginRequest;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $user){
        $this->loginService = $user;
    }

    public function login(LoginRequest $userRequest){

        $credentials = $userRequest->only('email', 'password');
        
        $response = $this->loginService->authenticate($credentials);

        if(isset($response['error'])) {
            return response()->json(['error' => $response['error']], $response['status']);
        }

        return response()->json(['token' => $response['token']], $response['status']);
    }
}
