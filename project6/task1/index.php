<?
if (isset($_COOKIE["login"]) && isset($_COOKIE["pass"])){
    header("Location: welcome.php");
} else { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="process.php" method="post">
            <label for="login">логни:</label>
            <input type="text" name="login" required>

            <label for="pass">пароль:</label>
            <input type="text" name="pass" required>

            <button type="submit">зарегистрироваться</button>
        </form>
    </div>
</body>

</html><?

}
?>
