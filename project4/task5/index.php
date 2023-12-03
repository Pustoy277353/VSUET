<?php
$conn = new mysqli('localhost', 'root', '', 'task5');
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    echo ("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT
        B.title AS book_title,
        COUNT(C.author_id) AS coauthors_count
    FROM
        books B
    JOIN
        collaborations C ON B.book_id = C.book_id
    GROUP BY
        B.title
    HAVING
        coauthors_count = 3;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Книга</th>
                <th>Количество соавторов</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["book_title"] . "</td>
                <td>" . $row["coauthors_count"] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "Нет данных";
}

$conn->close();
