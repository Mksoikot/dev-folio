<?php
namespace App\Repository;

use App\DTOS\UserDTO;
use App\Models\User;

class UserRepository{

    // public User $user = new User();

    public function insert(UserDTO $userDTO){

        return User::insert($userDTO->toArray()); 
    }
}



?>
