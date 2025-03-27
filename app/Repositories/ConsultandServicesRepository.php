<?php

namespace App\Repositories;
use App\Models\ConsultAndService;



Class ConsultAndServiceRepository{

    protected $consultAndServiceModel;

    public function __construct(ConsultAndService $consultAndService){
        $this->consultAndService = $consultAndServiceModel;
    }

    public function create($data){
        $this->consultAndService->create($data);
    }

    public function show(){
        $this->consultAndService->getAll();
    }
}




?>