<?php 

namespace App\Repositories;
use App\Models\ServiceType;



class ServiceTypeRepository{

    protected $serviceTypeModel;

    public function __construct(ServiceType $serviceType){
        $this->serviceTypeModel = $serviceType;
    }

    public function createService($data){
        $service = $this->serviceTypeModel->create($data);

        return $service;
    }

    public function showService(){
        $this->serviceTypeModel->getAll();
    }

    public function deleteService($id){
        
        $service = $this->serviceTypeModel->findorfail($id);

        $service->delete();
    }


}


?>