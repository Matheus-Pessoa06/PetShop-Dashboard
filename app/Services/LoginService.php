<?php 

namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;



Class LoginService{

    protected $userRepository;

    public function __construct(UserRepository $user){
        $this->userRepository = $user;
    }

    public function authenticate($credentials)
    {
        $user = $this->userRepository->findByEmail($credentials);

        if (!Hash::check($credentials['password'], $user->password)) {
            return ['error' => 'Invalid credentials', 'status' => 401];
        }

        $token = JWTAuth::fromUser($user);

        return ['token' => $token, 'status' => 200];
    }

}


?>