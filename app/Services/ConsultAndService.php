<?php 

namespace App\Services;
use App\Repositories\ConsultandServicesRepository;
use App\Repositories\ServiceTypeRepository;



class ConsultAndService{

    protected $consultandServiceRepository;
    protected $serviceTypeRepository;

    public function __construct(ConsultandServicesRepository $consultandServices, ServiceTypeRepository $serviceType){
        $this->consultandServiceRepository = $consultandServices;
        $this->serviceTypeRepository = $serviceType;
    }
    public function createConsult($data) {

        $consultAndServiceData = [
            "type" => $data['type'], 
            "price" => $data['price'],
            "date" => $data['date'],
            "description" => $data['description'],
            "pet_id" => 1
        ];
    
        $consultAndService = $this->consultandServiceRepository->create($consultAndServiceData);
    
        $serviceType = [
            "typeService" => $data['serviceType']['typeService'],
            "name" => $data['serviceType']['name'],
            "service_id" => $consultAndService->id
        ];
      
    
        $this->serviceTypeRepository->createService($serviceType);
    
        return $consultAndService;
    }    

    public function getAllConsults(){
        $this->consultandServiceRepository->show();
    }
}
?>