<?php

class Product{
    public $code;
    public $name;
    public $genre;
    public $price;
    public $description;
    public $sales;
    public $avaible_sales;
    public $image;
    public function __construct(Int $code,String $name, String $genre,Int $price,String $description,Int $sales,Bool $avaible_sales,String $image) {
        $this->code = $code;
        $this->name = $name;
        $this->genre = $genre;
        $this->price = $price;
        $this->description = $description;
        $this->sales = $sales;
        $this->avaible_sales = $avaible_sales;
        $this->image = $image;
    }
    public function setSales(User $user)
    {
        if($user->is_registered){
            $this->sales = $this->price * 0.2;
        } else {
            $this->sales = 0;
        }
    }
}