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
    new Product(10, 'Crocchette Monge per cani di taglia piccola', $img_path, 'cibo per animali', $has_sconto)
];
?>