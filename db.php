<?php
require_once __DIR__ . '/models/Product.php';

$img_path = 'https://picsum.photos/400/200';
$is_user = $_GET["word"];
$has_sconto;

if($is_user == 'yes'){
    $has_sconto = true;
}else{
    $has_sconto = false;
}

$products = [
    new Product(10, 'Crocchette Monge per cani di taglia piccola', $img_path, 'cibo per animali', $has_sconto),
    new Product(20, 'Crocchette Monge per cani di taglia piccola', $img_path, 'cibo per animali', $has_sconto),
    new Product(15, 'Crocchette Monge per cani di taglia piccola', $img_path, 'cibo per animali', $has_sconto),
    new Product(12, 'Crocchette Monge per cani di taglia piccola', $img_path, 'cibo per animali', $has_sconto)
];

foreach($products as $product){
    $product->setUserPrice($has_sconto);
    var_dump($product);
}

// var_dump($products);
?>