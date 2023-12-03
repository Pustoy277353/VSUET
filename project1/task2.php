<?php

$product1 = "чайник";
$product2 = "кофейник";
$product3 = "кипятильник";

$price1 = 300;
$price2 = 150;
$price3 = 260;

$maxPrice;
$maxPriceProduct;
$minPrice;
$minPriceProduct;

if ($price1>$price2 && $price1>$price3) {
    $maxPriceProduct = $product1;
    $maxPrice = $price1;
} else if ($price2>$price1 && $price2>$price3) {
    $maxPriceProduct = $product2;
    $maxPrice = $price2;
} else {
    $maxPriceProduct = $product3;
    $maxPrice = $price3;
}

if ($price1<$price2 && $price1<$price3) {
    $minPriceProduct = $product1;
    $minPrice = $price1;
} else if ($price2<$price1 && $price2<$price3) {
    $minPriceProduct = $product2;
    $minPrice = $price2;
} else {
    $minPriceProduct = $product3;
    $minPrice = $price3;
}

echo "самый дорогой $maxPriceProduct (он стоит $maxPrice руб)<br>";
echo "самый дешёвый $minPriceProduct (он стоит $minPrice руб)";

?>