<?php 

namespace App\Repositories;
use App\Models\User;


Class UserRepository{

    protected $userModel;

    public function __construct(User $user){
        $this->userModel = $user;
    }

    public function createUser($data){

        return $this->userModel->create($data);
    }

    public function getAll(){
        return $this->userModel->all();
    }

    public function getById($id){
        return $this->userModel->find($id);
    }

    public function findByEmail($email){
        return $this->userModel->where('email', $email)->first();
    }

    public function updateUser($id, $data){

        $user = $this->userModel->findorfail($id);
        $user->update($data);

        return $user;
    }

    public function deleteUser($id){

        $user = $this->userModel->findorfail($id);
        $user->delete();
        
        return $user;
    }

}

?>