<?php
$n = 1000;
$sum = 0;
while ($sum <= $n) {
    if ($sum <= $n) {
        $x = rand(0, 100);
        echo "$x<br>";
        $sum += $x;
    }
}
echo "Сумма превысила 1000";
?>