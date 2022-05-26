<?php
class Clothing extends Product
{
    public $kind_animal;
    public $material;
    public $size;
    public $type;
    public $period_avaible_start;
    public $period_avaible_end;
    public $avaible;
    public $color;

    public function __construct(Int $code, String $name, String $genre, Int $price, String $description, Int $sales, Bool $avaible_sales, String $image, String $kind_animal, String $material, String $size, String $type,String $period_avaible_start,String $period_avaible_end, String $color)
    {
        parent::__construct($code, $name,  $genre, $price, $description, $sales, $avaible_sales, $image);
        $this->kind_animal = $kind_animal;
        $this->material = $material;
        $this->size = $size;
        $this->type = $type;
        $this->period_avaible_start = $period_avaible_start;
        $this->period_avaible_end = $period_avaible_end;
        $this->color = $color;
    }
    public function setAvaible()
    {
        $today = strtotime("now");
        $start = strtotime("01 $this->period_avaible_start 2022");
        $expire = strtotime("31 $this->period_avaible_end 2022");
        if($start<$today && $today<$expire){
            $this->avaible=true;
            echo "Valid Period";
        } else {
            $this->avaible=false;
            echo "Period NO Valid";
        }
    }
}