<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    session_start();
    if (isset($_POST['post'])) {
        $_SESSION["nick"] = $_POST['nick'];
        $_SESSION["theme"] = $_POST['theme'];
    }
    echo "<body style = 'background-color: #".$_SESSION["theme"].";'>"
?>
    <form method="post">
        <label for="nick">Ник:</label>
        <input type="text" name="nick"><br>
        <label for="nick">Тема:</label>
        <select name="theme">
            <option value="fff">Светлая</option>
            <option value="808080">Тёмная</option>
        </select><br>
        <input type="submit" name="post" value="Отправить">
    </form>

    <?php
    echo "Привет ". $_SESSION["nick"];
    ?>
</body>

</html>