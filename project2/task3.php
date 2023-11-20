<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="post" value="Отправить">
    </form>
    <?php
    if (isset($_POST['post'])) {
        $pass = "1111";
        $pssw = $_POST["password"];
        if ($pass == $pssw) {
            header('Location: ./task3.html');
        } else {
            echo 'НЕПРАВИЛЬНО!';
        }
    }
    ?>
</body>

</html>