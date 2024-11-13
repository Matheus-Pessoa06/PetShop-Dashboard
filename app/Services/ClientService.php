<?php 

namespace App\Services;
use App\Repositories\ClientRepository;


Class ClientService{

    protected $clientRepository;

    public function __construct(ClientRepository $client){
        $this->clientRepository = $client;
    }
    
    public function createdUser($data){
        $this->clientRepository->create($data);
    }

    public function getAllClients(){
        $this->clientRepository->showClients();
    }

    public function updateClient($id, $data){
        $this->updateClient($id, $data);
    }

    public function getOne($id){
        $this->clientRepository->getById($id);
    }
}





?>