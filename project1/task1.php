<?php

$product1 = "чайник";
$product2 = "кофейник";
$product3 = "кипятильник";

$price1 = 300;
$price2 = 150;
$price3 = 270;

$price4 = 1503;
$price5 = 1120;
$price6 = 220;

$maxprice;

$av1 = ($price1 + $price2 + $price3)/3;
$av2 = ($price4 + $price5 + $price6)/3;

echo "$product1 => $price1<br>";
echo "$product2 => $price2<br>";
echo "$product3 => $price3<br>";
echo "__________ <br><br>";
echo "средняя цена товаров = $av1<br><br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task1</title>
</head>
<body>
        <table border="1">
             <tr>
                <td>Товар</td> 
                <td>Цена</td> 
            </tr>   
            <tr>
                <td><?php echo $product1 ?></td> 
                <td><?php echo $price4 ?></td> 
            </tr>
            <tr>
                <td><?php echo $product2 ?></td> 
                <td><?php echo $price5 ?></td> 
            </tr>
            <tr>
                <td><?php echo $product3 ?></td> 
                <td><?php echo $price6 ?></td> 
            </tr>
            

        </table>
        <br>
        <?php
echo "средняя цена = ",round($av2,2),"<br>";
?>
</body>
</html>