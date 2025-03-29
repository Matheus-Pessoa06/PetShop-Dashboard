<?php 

namespace App\Services;
use App\Repositories\ConsultandServicesRepository;



class ConsultAndService{

    protected $consultandServiceRepository;

    public function __construct(ConsultandServicesRepository $consultandServices){
        $this->consultandServiceRepository = $consultandServices;
    }

    public function createConsult($data) {
        
        $consultAndServiceData = [
            "type" => $data['type'],
            "price" => $data['price'],
            "date" => $data['date'],
            "description" => $data['description'],
            "service_id" => $data['service_id'] ?? 2
        ];

        $this->consultandServiceRepository->create($consultAndServiceData);

        return $consultAndServiceData;
        
    }
    

    public function getAllConsults(){
        $this->consultandServiceRepository->show();
    }
}
?>