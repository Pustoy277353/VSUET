<?php

function max_price($price1,$price2,$price3,$product1,$product2,$product3){
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
    echo "самый дорогой $maxPriceProduct (он стоит $maxPrice руб)<br>";
}

function min_price($price1,$price2,$price3,$product1,$product2,$product3){
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
    echo "самый дешёвый $minPriceProduct (он стоит $minPrice руб)<br>";
}

max_price(100,200,150,'чайник','кофейник','кипятильник');
max_price(150,200,300,'ложка','вилка','нож');
max_price(120,80,150,'кукла','машинка','вертолётик');

min_price(100,200,150,'чайник','кофейник','кипятильник');
min_price(150,200,300,'ложка','вилка','нож');
min_price(120,80,150,'кукла','машинка','вертолётик');

?>