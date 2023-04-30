<?php
namespace App\Service;

use App\DTOS\UserDTO;

class UserService{
    public function insert(UserDTO $userDTO){
        $data = $userDTO->toArray();
    }
}
?>
