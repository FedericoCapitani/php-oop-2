<?php
require_once __DIR__ . '/models/Product.php';

$img_path = 'https://picsum.photos/400/200';
$is_user = $_GET["word"];
$expiration_year = $_GET["expire_year"];
$current_year = 2022;
$can_buy;

if(filter_var($expiration_year, FILTER_VALIDATE_INT) >= $current_year){
    $can_buy = true;
}else{
    $can_buy = false;
}

$has_sconto;

if($is_user == 'yes'){
    $has_sconto = true;
}else{
    $has_sconto = false;
}

$products = [
    new Product(10, 'Crocchette Monge per cani di taglia piccola', $img_path, $has_sconto),
    new Product(20, 'Crocchette Monge per cani di taglia piccola', $img_path, $has_sconto),
    new Product(15, 'Crocchette Monge per cani di taglia piccola', $img_path, $has_sconto),
    new Product(12, 'Crocchette Monge per cani di taglia piccola', $img_path, $has_sconto)
];

foreach($products as $product){
    $product->setUserPrice($has_sconto);
}

// var_dump($products);
?>