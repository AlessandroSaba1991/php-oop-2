<?php
include __DIR__ . '/treat.php';
class Product{
    use Quantity;
    public $code;
    public $name;
    public $genre;
    public $price;
    public $description;
    public $price_sales = 0;
    public $image;
    public $quantity = 10;
    public function __construct(Int $code,String $name, String $genre,Int $price,String $description,String $image) {
        $this->code = $code;
        $this->name = $name;
        $this->genre = $genre;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
    }
    public function setSales($user)
    {
        if (!is_object($user)) {
            throw new Exception('Is not an Object');
            }
        if($user->is_registered){
            $this->price_sales = $this->price * 0.2;
        } else {
            $this->price_sales = 0;
        }
        return $this->price = $this->price - $this->price_sales;        
    }
}