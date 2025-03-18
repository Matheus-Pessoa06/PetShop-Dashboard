<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;


    public function __construct(UserService $user){
        $this->userService = $user;
    }

    public function store(UserRequest $request){
                
        $user = $this->userService->createUser($request->all());

        return response()->json($user, 201);
    }

    public function show(){
        
        $user = $this->userService->getAllUsers();

        return response()->json($user);
    }

    public function edit(UserRequest $request){

        $user = $this->userService->update($request->id, $request->all());

        return response()->json($user, 201);
    }

    public function destroy($id){

        if($this->userService->delete($id)){
            return response()->json(['message' => 'Delete successfully'], 200);
        }

        return response()->json(['message' => 'User not found'], 404);

    }
}
