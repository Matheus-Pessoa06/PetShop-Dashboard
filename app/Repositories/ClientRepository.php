<?php 


namespace App\Repositories;
use App\Models\Client;


Class ClientRepository{

    protected $clientModel;

    public function __construct(Client $client){
        $this->clientModel = $client;
    }

    public function createClient($data){
        return $this->clientModel->create($data);
    }

    public function showClients(){
        return $this->clientModel->with('adress')->get();
    }

    public function updateClient($id, $data, $adress){
        
        $client = $this->clientModel->findOrFail($id);

        return $client->update($data,  $adress);

    }

    public function getById($id){
        
        return $this->clientModel->find($id);
    }

}





?>