<?php 

namespace App\Repositories;
use App\Models\User;


Class UserRepository{

    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function createUser($data){

        return $this->user->create($data);
    }

    public function getAll(){
        return $this->user->all();
    }

    public function getById($id){
        return $this->user->find($id);
    }

    public function updateUser($id, $data){

        $user = $this->user->findorfail($id);
        $user->update($data);

        return $user;
    }

    public function deleteUser($id){

        $user = $this->user->findorfail($id);
        $user->delete();
        
        return $user;
    }

}

?>