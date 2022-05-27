<?php

class Game extends Product
{
    public $kind_animal;
    public $material;
    public $size;
    public $type;
    public $color;
    public function __construct(Int $code, String $name, String $genre, Int $price, String $description, String $image, String $kind_animal, String $material, String $size, String $type,String $color)
    {
        parent::__construct($code, $name,  $genre, $price, $description, $image);
        $this->kind_animal = $kind_animal;
        $this->material = $material;
        $this->size = $size;
        $this->type = $type;
        $this->color = $color;

    }
}
