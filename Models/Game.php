<?php

class Game extends Product
{
    protected $kind_animal;
    protected $material;
    protected $size;
    protected $type;
    protected $color;
    public function __construct(Int $code, String $name, String $genre, Int $price, String $description, Int $sales, Bool $avaible_sales, String $image, String $kind_animal, String $material, String $size, String $type,String $color)
    {
        parent::__construct($code, $name,  $genre, $price, $description, $sales, $avaible_sales, $image);
        $this->kind_animal = $kind_animal;
        $this->material = $material;
        $this->size = $size;
        $this->type = $type;
        $this->color = $color;

    }
}
