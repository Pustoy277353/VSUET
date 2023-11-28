<?php

$SQL = new SQL();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];

    switch ($action) {
        case "add":
            $SQL->addContact();
            break;
        case "show":
            $SQL->showContacts();
            break;
        case "create":
            $SQL->createTable();
            break;
        case "drop":
            $SQL->dropTable();
            break;
    }
}
class SQL
{

    function createTable()
    {
        $conn = new mysqli('localhost', 'root', '', 'task2');

        if ($conn->connect_error) {
            die("Не удалось подключиться: " . $conn->connect_error . "<br>");
        }

        $sql = "CREATE TABLE telephones (
        id INT AUTO_INCREMENT PRIMARY KEY,
        surname VARCHAR(20),
        email VARCHAR(20),
        tel VARCHAR(20)
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

        $sql = "DROP TABLE IF EXISTS telephones";

        if ($conn->query($sql) === TRUE) {
            echo "Таблица удалена<br>";
        } else {
            echo "Ошибка удаления таблицы: " . $conn->error . "<br>";
        }

        $conn->close();
    }

    function addContact()
    {
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];

        $conn = new mysqli('localhost', 'root', '', 'task2');
        $conn->set_charset("utf8mb4");

        if ($conn->connect_error) {
            echo ("Ошибка подключения: " . $conn->connect_error);
        }

        $sql = "INSERT INTO telephones (surname, email, tel) VALUES ('$surname', '$email', '$tel')";

        if ($conn->query($sql) === TRUE) {
            echo "Контакт добавлен<br>";
        } else {
            echo "ошибка: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    function showContacts()
    {
        $conn = new mysqli('localhost', 'root', '', 'task2');
        $conn->set_charset("utf8mb4");

        if ($conn->connect_error) {
            echo ("Ошибка подключения: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM telephones";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Фамилия</th><th>Почта</th><th>Телефон</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["surname"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["tel"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 результатов";
        }

        $conn->close();
    }
}
