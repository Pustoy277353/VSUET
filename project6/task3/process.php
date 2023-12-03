<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $background = $_POST["background"];
    
    setcookie("user_name", $name, time() + 3600, "/");
    setcookie("background", $background, time() + 3600, "/");
    
    header("Location: welcome.php");
    exit();
}
?>
