<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $answers = [
        "q1" => ["b"],
        "q2" => ["c"],
        "q3" => ["c"]
    ];

    $score = 0;

    foreach ($answers as $question => $correct_answers) {
        if (isset($_POST[$question])) {
            $user_answers = $_POST[$question];
            if (array_diff($user_answers, $correct_answers) === array_diff($correct_answers, $user_answers)) {
                $score++;
            }
        }
    }

    echo "<p>Вы набрали $score из " . count($answers) . " баллов.</p>";

    if ($score == count($answers)) {
        echo "<p>Ты умничка</p>";
    } elseif ($score > 1) {
        echo "<p>Хороший результат!</p>";
    } else {
        echo "<p>Попробуйте еще раз.</p>";
    }
    ?>

</body>

</html>