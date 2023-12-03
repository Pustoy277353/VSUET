<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = new mysqli('localhost', 'root', '', 'task3');
    $conn->set_charset("utf8mb4");

    $nameProduct = $_POST["nameProduct"];
    $priceProduct = $_POST["priceProduct"];
    $infoProduct = $_POST["infoProduct"];
    $county = $_POST["country"];

    $sql = "INSERT INTO products (nameProduct, price, info, id_country) VALUES('$nameProduct', '$priceProduct', '$infoProduct', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "Запись добавлена <br>";
    } else {
        echo "ошибка: " . $sql . "<br>" . $conn->error;
    }
}
?>