<?php

namespace App\Services;

use App\Repositories\AddressRepository;



Class AddressService{

    protected $adressRepository;

    public function __construct(AddressRepository $adress){
        $this->adressRepository = $adress;
    }

    public function createdAdress($data){
        return $this->adressRepository->createAdress($data);
    }
}

?>