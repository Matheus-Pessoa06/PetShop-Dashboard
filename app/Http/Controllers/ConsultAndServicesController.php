<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ConsultAndService;

class ConsultAndServicesController extends Controller
{
    protected $ConsultAndService;

    public function __construct(ConsultAndService $consultAndServices){
        $this->ConsultAndService = $consultAndServices;
    }

    public function store(Request $data){
        
        $consultAndService = $this->ConsultAndService->createConsult($data->all());

        return response()->json($consultAndService, 201);

    }
}
