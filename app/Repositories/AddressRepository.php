<?php 

namespace App\Repositories;
use App\Models\Address;



Class AddressRepository{


    protected $adressModel;


    public function __construct(Address $adresses){
        $this->adressModel = $adresses;
    }

    public function createAdress($data){
        
        return $this->adressModel->create([
            "cep" => $data['cep'],
            "city" => $data['city'],
            "district" => $data['district'],
            "number" => $data['number'],
            "client_id" => $data['client_id']
        ]);
    }


}

?>