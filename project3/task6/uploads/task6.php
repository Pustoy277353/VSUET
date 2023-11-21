<?php

$products = array(
    "Молоко" => 80,
    "Огурцы" => 40,
    "Мясо" => 120,
);

$products["Яйца"] = 70;
$products["Хлеб"] = 20;

echo "Товары и их цены:<br>";
foreach ($products as $product => $price) {
    echo $product . " - " . $price . "<br>";
}

$num_products = count($products);
$total_cost = array_sum($products);

echo "<br>Количество товаров: $num_products<br>";
echo "Суммарная стоимость товаров: $total_cost<br>";

asort($products);

echo "<br>Товары и цены по возрастанию цены:<br>";
foreach ($products as $product => $price) {
    echo $product . " - " . $price . "<br>";
}

arsort($products);

echo "<br>Товары и цены по убыванию цены:<br>";
foreach ($products as $product => $price) {
    echo $product . " - " . $price . "<br>";
}

ksort($products);

echo "<br>Товары и цены по алфавиту:<br>";
foreach ($products as $product => $price) {
    echo $product . " - " . $price . "<br>";
}

?>
