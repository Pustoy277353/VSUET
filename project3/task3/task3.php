<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <form method="post">
            <p>Имя</p>
            <input type="text" name="name" required>
            <p>Телефон1</p>
            <input type="tel" name="phone1" required>
            <p>Телефон2(если есть)</p>
            <input type="tel" name="phone2"><br>
            <button type="submit" name="post">Отправить</button>
        </form>

        <?php
        if (isset($_POST['post'])) {
            $file = 'task3.txt';
            $contact = file_get_contents($file);
            $contact = 'Имя:' . $_POST['name'] . "\n" . 'Телефон1:' . $_POST['phone1'] . "\n" . 'Телефон2:' . $_POST['phone2'] . "\n\n";
            file_put_contents($file, $contact, FILE_APPEND);
        }
        ?>
    </div>
</body>

</html>