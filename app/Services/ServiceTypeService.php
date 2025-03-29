<?php

namespace App\Services;
use App\Repositories\ServiceTypeRepository;

class ServiceTypeService{

    protected $serviceTypeRepository;

    public function __construct(ServiceTypeRepository $serviceType){

        $this->serviceTypeRepository = $serviceType;
    }

    public function create($data){
       
        $serviceType = [
            "typeservice" => $data['typeservice'],
            "name" => $data['name']
        ];

        $this->serviceTypeRepository->createService($serviceType);

        return response()->json($serviceType, 201);
    }

}


?>