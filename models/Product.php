<?php

class Product 
{
    public $price;
    public $name;
    public $img_path;
    public $sconto;
    public $type_of_article;

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
    use Article_Id;
    public $article_type = 'cibo';
    public $weight;
    public $expiration_date;

    function __construct(Int $price, String $name, String $img_path, Bool $sconto, Int $weight, String $expiration_date){
        parent::__construct($price, $name, $img_path, $sconto);
        $this->type_of_article = 'cibo';
        $this->weight = $weight;
        $this->expiration_date = $expiration_date;
    }
}

class Cuccia extends Product 
{
    use Article_id;
    public $dimensions;
    public $size;

    function __construct(Int $price, String $name, String $img_path, Bool $sconto, String $dimensions, String $size){
        parent::__construct($price, $name, $img_path, $sconto);
        $this->type_of_article = 'essenziali';
        $this->dimensions = $dimensions;
        $this->size = $size;
    }
}

trait Article_id {
    public $id;

    public function getId() {
        $this->id = rand(100,999);
        if($this->id < 500){
            // throw new Exception('id not valid');
        }
    }
}
?>