<?php 

namespace App\Repositories;
use App\Models\Pet;



Class PetRepository{

    protected $petModel;

    public function __construct(Pet $pet){
        $this->petModel = $pet;
    }

    public function createPet($data){
        return $this->petModel->create([
            "type" => $data['type'],
            "name" => $data['name'],
            "photo" => $data['photo'],
            "description" => $data['description'],
            //"servicestype" => $data['servicestype'],
            "client_id" => $data['client_id']
        ]);
    }

    public function showPets(){
        return $this->petModel->getAll();
    }

    public function updatePet($id, $data){
        $pet = $this->petModel->findorFail($id);

        return $pet->update($data);
    }
}








?>