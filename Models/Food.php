<?php
class Food extends Product
{
    protected $kind_animal;
    protected $weight;
    protected $size_animal;
    protected $type;
    protected $expire;
    public function __construct(Int $code, String $name, String $genre, Int $price, String $description, Int $sales, Bool $avaible_sales, String $image, String $kind_animal, Int $weight, String $size_animal, String $type,String $expire)
    {
        parent::__construct($code, $name,  $genre, $price, $description, $sales, $avaible_sales, $image);
        $this->kind_animal = $kind_animal;
        $this->weight = $weight;
        $this->size_animal = $size_animal;
        $this->type = $type;
        $this->expire = $expire;

    }
}