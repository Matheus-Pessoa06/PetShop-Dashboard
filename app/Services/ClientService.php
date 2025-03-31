<?php 

namespace App\Services;
use App\Repositories\ClientRepository;
use App\Services\AddressService;
use App\Services\PetService;
use App\Services\ConsultAndService;

Class ClientService{

    protected $clientRepository;
    protected $addressService;
    protected $consultAndService;
    
    protected $petService;

    public function __construct(ClientRepository $client, AddressService $address, PetService $pet, ConsultAndService $service){
        $this->clientRepository = $client;
        $this->addressService = $address;
        $this->petService = $pet;
        $this->consultAndService = $service;
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
            
        if(isset($data['address'])){
            $addressData = [
                'cep' => $data['address']['cep'],
                'city' => $data['address']['city'],
                'district' => $data['address']['district'],
                'number' => $data['address']['number'],
                'client_id' => $client->id
            ];

            $this->addressService->createdAddress($addressData);
        }

        if(isset($data['pet'])){
            $petData = [
            'type' => $data['pet']['type'],
            'name' => $data['pet']['name'],
            'photo' => $data['pet']['photo'],
            'description' => $data['pet']['description'],
            'client_id' => $client->id
        ];
           $pet = $this->petService->createdPet($petData);
        }

        if (isset($data['serviceType'])) {
            $this->consultAndService->createConsult(array_merge($data['service'], ['pet_id' => $pet->id]));
        }

        return $client;
    
    }

    public function getAllClients(){
        return $this->clientRepository->showClients();
    }

    public function updatedClient($id, $data){

        $address = $data['address'];
        return $this->clientRepository->updateClient($id, $data, $address);
    }

    public function getOne($id){
        return $this->clientRepository->getById($id);
    }
}

?>