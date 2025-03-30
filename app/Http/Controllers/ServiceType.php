<?php

namespace App\Http\Controllers;

use App\Services\ServiceTypeService;
use Illuminate\Http\Request;

class ServiceType extends Controller
{
    protected $serviceTypeService;

    public function __construct(ServiceTypeService $serviceType){
        $this->serviceTypeService = $serviceType;
    }

    public function store(Request $request){
        
        $service = $this->serviceTypeService->create($request->all());

        return response()->json($service, 201);
    }

    public function show(){
        
        $allService = $this->serviceTypeService->showAll();

        return response()->json($allService);
    }

    public function destroy($id){

        if($this->serviceTypeService->delete($id)){
            return response()->json(['message' => 'Delete successfully'], 200);
        }

        return response()->json(['message' => 'User not found'], 404);
    }
}
