<?php 

namespace App\Services;
use App\Repositories\ConsultandServicesRepository;



class ConsultAndService{

    protected $consultandServiceRepository;

    public function __construct(ConsultandServicesRepository $consultandServices){
        $this->consultandServiceRepository = $consultandServices;
    }

    public function create($data){
        $this->consultandServiceRepository->create($data);
    }

    public function getAllConsults(){
        $this->consultandServiceRepository->show();
    }
}
?>