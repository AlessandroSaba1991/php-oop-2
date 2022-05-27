<?php

class Leash extends Product
{
    public $kind_animal;
    public $material;
    public $length;
    public $type;
    public $color;
    public function __construct(Int $code, String $name, String $genre, Int $price, String $description, String $image, String $kind_animal, String $material, String $length, String $type,String $color)
    {
        parent::__construct($code, $name,  $genre, $price, $description,$image);
        $this->kind_animal = $kind_animal;
        $this->material = $material;
        $this->length = $length;
        $this->type = $type;
        $this->color = $color;

    }
}