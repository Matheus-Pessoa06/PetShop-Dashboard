<?php 

namespace App\Services;
use App\Repositories\ClientRepository;
use App\Services\AdressService;


Class ClientService{

    protected $clientRepository;
    protected $adressService;

    public function __construct(ClientRepository $client, AdressService $adress){
        $this->clientRepository = $client;
        $this->adressService = $adress;
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