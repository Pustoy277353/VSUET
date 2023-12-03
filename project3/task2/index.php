<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="vote">
        <p>Как вы оцениваете наш магазин?
        <p>
        <form method="post">
            <input type="radio" name="vote" value="5" checked> Отлично<br>
            <input type="radio" name="vote" value="4"> Хорошо<br>
            <input type="radio" name="vote" value="3"> Удовлетворительно<br>
            <input type="radio" name="vote" value="2"> Плохо<br>
            <input type="submit" value="Проголосовать">
        </form>
    </div>

    <div id="voteResult">
        <p>Результаты голосования:</p>
        <?php
        if (@$_POST['vote']) {
            $file = $_POST['vote'] . ".txt";
            // В переменной vote содержится число 2, 3, 4 или 5. Наши файлы имеют такие же
            // названия, значит, мы можем использовать эти значения для выбора файла,
            // сформировав таким образом его имя
            $f = fopen($file, "r");
            // Открываем файл для чтения
            $votes = fread($f, 100);
            // Записываем в переменную $votes старое количество голосов
            fclose($f);
            // Закрываем файл
            $votes++;
            // Увеличиваем на единицу количество голосов
            $f = fopen($file, "w");
            // Открываем файл для записи
            fwrite($f, $votes);
            // Записываем в файл новое количество голосов
            fclose($f);
            // Закрываем файл
        }

        $totalVotes = 0;

        for ($i = 5; $i >= 2; $i--) {
            $file = $i . ".txt";
            $f = fopen($file, "r");
            $votes = fread($f, 100);
            fclose($f);

            for ($i = 2; $i <= 5; $i++) {
                $file = $i . ".txt";
                $f = fopen($file, "r");
                $votes = fread($f, 100);
                fclose($f);

                $totalVotes += $votes;
            }

            for ($i = 5; $i >= 2; $i--) {
                $file = $i . ".txt";
                $f = fopen($file, "r");
                $votes = fread($f, 100);
                fclose($f);

                echo "Оценка $i: $votes голосов<br>";

                $percentage = ($totalVotes > 0) ? ($votes / $totalVotes) * 100 : 0;

                echo '<hr align="left" color="#FF0000" size="20" width="' . $percentage . '%">';
            }
            echo "Общее количество голосов: $totalVotes";
        }
        ?>
    </div>

</body>

</html>