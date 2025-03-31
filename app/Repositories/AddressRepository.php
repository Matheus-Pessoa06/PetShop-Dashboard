<?php 

namespace App\Repositories;
use App\Models\Address;



Class AddressRepository{


    protected $addressModel;


    public function __construct(Address $addresses){
        $this->addressModel = $addresses;
    }

    public function createAddress($data){
        
        return $this->addressModel->create([
            "cep" => $data['cep'],
            "city" => $data['city'],
            "district" => $data['district'],
            "number" => $data['number'],
            "client_id" => $data['client_id']
        ]);
    }


}

?>