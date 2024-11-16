<?php 

namespace App\Repositories;
use App\Models\Adress;



Class AdressRepository{


    protected $adressModel;


    public function __construct(Adress $adresses){
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