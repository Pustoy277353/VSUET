<?php
$price = 100;
$year = 1;
$max_price = 150;
$inflation =0.1;

echo "Год: $year Стоимость:", round($price,2), " руб<br>";

while ($price <= 150) {
    $year++;
    $inflation += 0.035;
    $price += $price*$inflation;

    if ($price > $max_price) {
        echo "В $year году стоимость превысит 150 и сотавит ", round($price,2), " руб<br><br><br>";
        break;
    }

    echo "Год: $year Стоимость:", round($price,2), " руб<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$price = 100;
$year = 1;
$inflation = 0.1;

echo '<table border="1">';
echo '<tr><th>Год</th><th>Цена</th><th>Инфляция</th></tr>';
echo '<tr><td>'.$year.'</td><td>'.$price.'</td><td>'. $inflation*100 .'%</td></tr>';

for ($year = 2; $year != 11; $year++) {
    if ($price < 170) {
        $inflation += 0.035;
        $price += $price*$inflation;
        echo "<tr><td>$year</td><td>",round($price, 2),"</td><td>",$inflation*100,"%</td></tr>";
    } else if ($price > 170) {
        $inflation -= 0.035;
        $price += $price*$inflation;
        echo "<tr><td>$year</td><td>",round($price, 2),"</td><td>",$inflation*100,"%</td></tr>";
    }
}

echo '</table>';
?>

</body>
</html>

