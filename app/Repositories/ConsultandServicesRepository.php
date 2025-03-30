<?php

namespace App\Repositories;
use App\Models\ConsultAndService;



class ConsultandServicesRepository{

    protected $consultAndServiceModel;

    public function __construct(ConsultAndService $consultAndService){
        $this->consultAndServiceModel = $consultAndService;
    }

    public function create($data){
        
        $consult = $this->consultAndServiceModel->create($data);

        return $consult;
    }

    public function show(){
        $this->consultAndServiceModel->getAll();
    }
}




?>