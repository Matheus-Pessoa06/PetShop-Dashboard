<?php

namespace App\Http\Controllers;

use App\Services\PetService;
use Illuminate\Http\Request;

class PetController extends Controller
{

    protected $pet;

    public function __construct(PetService $pet){
        $this->pet = $pet;
    }

    public function store(PetRequest $request)
}
