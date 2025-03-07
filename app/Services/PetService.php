<?php 

namespace App\Services;

use App\Repositories\PetRepository;


Class PetService{

    protected $petRepository;

    public function __construct(PetRepository $pet){
        $this->petRepository = $pet;
    }

    public function createdPet($data){
        $this->petRepository->createPet($data);
    }

    public function updatedPet($id, $data){
        $this->petRepository->updatePet($id, $data);
    }
}






?>