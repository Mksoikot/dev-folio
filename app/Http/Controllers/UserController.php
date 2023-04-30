<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Service\UserService;
use App\DTOS\UserDTO;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(userRequest $userRequest){
        try{
            $userService = new UserService();

            $userDTO = new UserDTO ($userRequest->all());

           return $userService->insert($userDTO);

        } catch(Exception $e){

        }
    }
}
