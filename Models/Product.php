<?php

class Product{
    protected $code;
    protected $name;
    protected $genre;
    protected $price;
    protected $description;
    protected $sales;
    protected $avaible_sales;
    protected $image;
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
}