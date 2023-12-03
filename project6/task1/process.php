<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $logn = $_POST["login"];
    $pass = $_POST["pass"];
    
    setcookie("login", $logn, time() + 3600, "/");
    setcookie("pass", $pass, time() + 3600, "/");
    
    $conn = new mysqli('localhost', 'root', '', 'task1');

    if ($conn->connect_error) {
        echo ("Ошибка подключения: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (logn, pass) VALUES ('$logn', '$pass')";

    if ($conn->query($sql) === TRUE) {
        header("Location: welcome.php");
    } else {
        echo "ошибка: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
