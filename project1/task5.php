<?php

$tovarList = array("молоко", "хлеб", "соль", "мука", "макароны");

$tovarList[] = "масло";
$tovarList[] = "курица";

$count = count($tovarList);

echo "Массив:<br>";
for ($i = 0; $i < $count; $i++) {
    echo $tovarList[$i] . "<br>";
}

sort($tovarList);
echo "<br>Отсортированный массив:<br>";
for ($i = 0; $i < $count; $i++) {
    echo $tovarList[$i] . "<br>";
}

?>
