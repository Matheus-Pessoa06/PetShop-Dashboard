<?php

namespace App\Http\Controllers;

use App\Services\PetService;
use Illuminate\Http\Request;

class PetController extends Controller
{

    protected $petService;

    public function __construct(PetService $pet){
        $this->petService = $pet;
    }

    public function store(Request $request){
        
        $pet = $this->petService->createdPet($request->all());

        return response()->json($pet, 201);
    }
}
