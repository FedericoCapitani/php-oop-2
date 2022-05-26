<?php

class Product 
{
    public $price;
    public $name;
    public $img_path;
    public $type_of_article;
    public $sconto;
    public $user_price;

    function __construct(Int $price, String $name, String $img_path, String $type_of_article, Bool $sconto){
        $this->price = $price;
        $this->name = $name;
        $this->img_path = $img_path;
        $this->type_of_article = $type_of_article;
        $this->sconto = $sconto;
    }

    function setUserPrice($sconto){
        if($sconto){
            return $this->price / 5 * 4;
        }else{
            return $this->price;
        }
    }
}