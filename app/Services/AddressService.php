<?php

namespace App\Services;

use App\Repositories\AddressRepository;



Class AddressService{

    protected $addressRepository;

    public function __construct(AddressRepository $address){
        $this->addressRepository = $address;
    }

    public function createdAddress($data){
        return $this->addressRepository->createAddress($data);
    }
}

?>