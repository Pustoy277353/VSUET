<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="fullname">Ф.И.О.:</label>
        <input type="text" name="fullname" required><br>

        <label for="address">Адрес:</label>
        <input type="text" name="address" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="post" value="Отправить">
    </form>
    <?php
    if (isset($_POST['post'])) {
        $fullname = $_POST["fullname"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        echo "<p><strong>Ф.И.О.:</strong> $fullname</p>";
        echo "<p><strong>Адрес:</strong> $address</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Пароль:</strong> $password</p>";
    }
    ?>
</body>

</html>