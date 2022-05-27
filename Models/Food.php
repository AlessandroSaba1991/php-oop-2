<?php
class Food extends Product
{
    public $kind_animal;
    public $weight;
    public $size_animal;
    public $type;
    public $expire;
    public function __construct(Int $code, String $name, String $genre, Int $price, String $description, String $image, String $kind_animal, Int $weight, String $size_animal, String $type,String $expire)
    {
        parent::__construct($code, $name,  $genre, $price, $description,$image);
        $this->kind_animal = $kind_animal;
        $this->weight = $weight;
        $this->size_animal = $size_animal;
        $this->type = $type;
        $this->expire = $expire;

    }
}