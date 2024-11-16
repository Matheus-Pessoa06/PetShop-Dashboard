<?php 

namespace App\Services;
use App\Repositories\ClientRepository;


Class ClientService{

    protected $clientRepository;

    public function __construct(ClientRepository $client){
        $this->clientRepository = $client;
    }
   
    public function createdUser($data){
        $data['user_id'] = auth()->id(); 
            return $this->clientRepository->createClient([
                'name' => $data['name'],
                'phoneNumber'=> $data['phoneNumber'],
                'photo' => $data['photo'] ?? null,
                'user_id' => $data['user_id'] ?? auth()->id(), 
            ]);
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