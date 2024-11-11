<?php

namespace App\Http\Controllers;

use App\Services\LoginService;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $user){
        $this->loginService = $user;
    }

    public function login(LoginRequest $userRequest){

        $token = $this->loginService->token($userRequest);

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(['status' => 'API is working']);
    }
}
