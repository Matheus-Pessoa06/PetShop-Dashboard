<?php

namespace App\Repositories;
use App\Models\ConsultAndService;



class ConsultandServicesRepository{

    protected $consultAndServiceModel;

    public function __construct(ConsultAndService $consultAndService){
        $this->consultAndServiceModel = $consultAndService;
    }

    public function create($data){
        $this->consultAndServiceModel->create($data);
    }

    public function show(){
        $this->consultAndServiceModel->getAll();
    }
}




?>