<?php
namespace App\DTOS;


class UserDTO{
    public $name;
    public $age;
    public $year;
    public $image;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->age = $data['age'];
        $this->year = $data['year'];
        $this->image = $data['image'];
    }

    public function setImagePath($name){
        $this->image = $name;
    }

    public function toArray(){
        return [
            'name'=>$this->name,
            'age'=>$this->age,
            'year'=>$this->year,
            'image'=>$this->image
        ];
    }
}


?>
