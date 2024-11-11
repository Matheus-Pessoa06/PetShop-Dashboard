<?php 

namespace App\Services;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;



Class LoginService{

    protected $userRepository;

    public function __construct(UserRepository $user){
        $this->userRepository = $user;
    }

    public function token($credentials){

        $user = $this->userRepository->findByEmail($credentials);

        if($user && hash::check($credentials['password'], $user->password)){
            return [
                'token' => $user->createToken('auth_token')->plainTextToken
            ];
        }

        return ['erro' => 'Credenciais inválidas'];
        
    }


}


?>