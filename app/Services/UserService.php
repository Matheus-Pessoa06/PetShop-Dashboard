<?php 

namespace App\Services;
use App\Repositories\UserRepository;


Class UserService{

    protected $userRepository;


    public function __construct(UserRepository $user){
        $this->userRepository = $user;
    }

    public function createUser($data){
    
       return $this->userRepository->createUser($data);

    }

    public function getAllUsers(){

        return $this->userRepository->getAll();

    }

    public function update($id, $data){
        
        return $this->userRepository->updateUser($id, $data);
    }

    public function delete($id){

        return $this->userRepository->deleteUser($id);
    }

    public function getOne($id){

        return $this->userRepository->getById($id);
    }
}



?>