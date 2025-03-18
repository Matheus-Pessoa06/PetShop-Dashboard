<?php 

namespace App\Services;
use App\Repositories\ClientRepository;
use App\Services\AdressService;
use App\Services\PetService;


Class ClientService{

    protected $clientRepository;
    protected $adressService;
    
    protected $petService;

    public function __construct(ClientRepository $client, AdressService $adress, PetService $pet){
        $this->clientRepository = $client;
        $this->adressService = $adress;
        $this->petService = $pet;
    }
   
    public function createdUser($data){
            
        $data['user_id'] = auth()->id(); 

        $clientData = [
            'name' => $data['name'],
            'phoneNumber' => $data['phoneNumber'],
            'photo' => $data['photo'] ?? null,
            'user_id' => $data['user_id'] ?? auth()->id()
        ];
    
        $client = $this->clientRepository->createClient($clientData);
            
        if(isset($data['adress'])){
            $adressData = [
                'cep' => $data['adress']['cep'],
                'city' => $data['adress']['city'],
                'district' => $data['adress']['district'],
                'number' => $data['adress']['number'],
                'client_id' => $client->id
            ];

            $this->adressService->createdAdress($adressData);
        }

        $petData = [
            'type' => $data['pet']['type'],
            'name' => $data['pet']['name'],
            'photo' => $data['pet']['photo'],
            'description' => $data['pet']['description'],
            'client_id' => $client->id
        ];
            $this->petService->createdPet($petData);

        return $client;
    
    }

    public function getAllClients(){
        return $this->clientRepository->showClients();
    }

    public function updatedClient($id, $data){

        $adress = $data['adress'];
        return $this->clientRepository->updateClient($id, $data, $adress);
    }

    public function getOne($id){
        return $this->clientRepository->getById($id);
    }
}

?>