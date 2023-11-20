<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="num1">Число1:</label>
        <input type="text" name="num1" required>
        <br>

        <label for="operator">Оператор:</label>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>

        <label for="num2">Число2:</label>
        <input type="text" name="num2" required>
        <br>

        <input type="submit" name="calculate" value="Посчитать">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                echo "<br>Результат: $result";
                break;
            case '-':
                $result = $num1 - $num2;
                echo "<br>Результат: $result";
                break;
            case '*':
                $result = $num1 * $num2;
                echo "<br>Результат: $result";
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<br>Нельзя делить на 0";
                    break;
                }
                break;
        }
    }
    ?>

</body>

</html>