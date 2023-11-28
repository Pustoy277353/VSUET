<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="to">Кому:</label>
        <input type="text" name="to" required><br>

        <label for="subject">Тема:</label>
        <input type="text" name="subject" required><br>

        <label for="message">Сообщение:</label>
        <textarea name="message" required></textarea><br>

        <input type="submit" name="mail_ok" value="Отправить">
    </form>
    <?php
    if (isset($_POST['mail_ok'])) {
        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mail = mail($to, $subject, $message);

        if ($mail) {
            echo 'Письмо отправлено';
        } else {
            echo 'Не удалось отправить';
        }
    }
    ?>
</body>

</html>