<?php

$conn = new mysqli('localhost', 'root', '', 'task2');

if ($conn->connect_error) {
    die("Не удалось подключиться: " . $conn->connect_error . "<br>");
}

createTable();

addProduct("Harley-Davidson Street 750", 7999, "Стильный и мощный круизер для городских приключений. Обладает 749-кубовым двигателем и классическим дизайном Harley-Davidson.");
addProduct("Honda CBR500R", 6699, "Идеальный спортивный мотоцикл для новичков. Отличается легкостью управления и эффективной 471-кубовой моторизацией.");
addProduct("Ducati Monster 821", 11995, "Элегантный и мощный мотоцикл с монстрозным характером. Оснащен 821-кубовым двигателем и стильным дизайном.3");
addProduct("Kawasaki Ninja 650", 7599, "Прекрасный спортивный турер с универсальностью для повседневного использования. Имеет 649-кубовый двигатель и современный внешний вид.");
addProduct("BMW R1250GS Adventure", 20345, "Премиальный приключенческий туристический мотоцикл с мощным 1254-кубовым двигателем и передовой технологией BMW Motorrad.");

$result = $conn->query("SELECT * FROM products");

dropTable();
function addProduct($name, $price, $description)
{
    global $conn;
    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', $price, '$description')";
    $conn->query($sql);
}

function createTable()
{
    $conn = new mysqli('localhost', 'root', '', 'task2');

    if ($conn->connect_error) {
        die("Не удалось подключиться: " . $conn->connect_error . "<br>");
    }

    $sql = "CREATE TABLE products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        description TEXT
    ) CHARACTER SET utf8mb4";

    if ($conn->query($sql) === TRUE) {
        echo "Таблица создана<br>";
    } else {
        echo "Ошибка создания таблицы: " . $conn->error . "<br>";
    }

    $conn->close();
}

function dropTable()
{
    $conn = new mysqli('localhost', 'root', '', 'task2');

    if ($conn->connect_error) {
        die("Не удалось подключиться: " . $conn->connect_error . "<br>");
    }

    $sql = "DROP TABLE IF EXISTS products";

    if ($conn->query($sql) === TRUE) {
        echo "Таблица удалена<br>";
    } else {
        echo "Ошибка удаления таблицы: " . $conn->error . "<br>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documet</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Описание</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['description']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>

</html>

<?php
$conn->close();
?>