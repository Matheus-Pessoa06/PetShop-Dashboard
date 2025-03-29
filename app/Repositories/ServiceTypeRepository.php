<?php 

namespace App\Repositories;
use App\Models\ServiceType;



class ServiceTypeRepository{

    protected $serviceTypeModel;

    public function __construct(ServiceType $serviceType){
        $this->serviceTypeModel = $serviceType;
    }

    public function createService($data){
        $this->serviceTypeModel->create($data);
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