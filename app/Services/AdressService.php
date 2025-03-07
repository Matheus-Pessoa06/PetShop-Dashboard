<?php

namespace App\Services;

use App\Repositories\AdressRepository;



Class AdressService{

    protected $adressRepository;

    public function __construct(AdressRepository $adress){
        $this->adressRepository = $adress;
    }

    public function createdAdress($data){
        return $this->adressRepository->createAdress($data);
    }
}

?>