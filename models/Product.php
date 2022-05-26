<?php

class Product 
{
    public $price;
    public $name;
    public $img_path;
    public $sconto;

    function __construct(Int $price, String $name, String $img_path, Bool $sconto){
        $this->price = $price;
        $this->name = $name;
        $this->img_path = $img_path;
        $this->sconto = $sconto;
    }

    function setUserPrice($sconto){
        if($sconto == true){
            $this->price = $this->price / 5 * 4;
        }else{
            $this->price;
        }
    }
}

class Cibo extends Product 
{
    public $article_type = 'cibo';
    public $weight;
    public $expiration_date;

    function __construct(Int $weight, String $expiration_date){
        parent::__construct();
        $this->weight = $weight;
        $this->expiration_date = $expiration_date;
    }
}
?>