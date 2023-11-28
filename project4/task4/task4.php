<?php
$conn = new mysqli('localhost', 'root', '', 'task4');
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$message = $_POST['message'];
$datetime = date("Y-m-d H:i:s");

$sql = "INSERT INTO forms (email, message, datetime) VALUES ('$email', '$message', '$datetime')";

if ($conn->query($sql) === TRUE) {
    echo "Данные успешно добавлены в базу данных";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>