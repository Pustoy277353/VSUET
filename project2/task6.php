<?php
$name = $_POST["name"];
$birthdate = $_POST["birthdate"];
$programmingLanguages = $_POST["programming_languages"];

$age = calculateAge($birthdate);
$languagesCount = countLanguages($programmingLanguages);

echo "Имя: $name<br>";
echo "Дата рождения: $birthdate<br>";
echo "Возраст: $age лет<br>";
echo "Количество языков программирования: $languagesCount<br>";

function calculateAge($birthdate) {
    $today = new DateTime();
    $dob = new DateTime($birthdate);
    $age = $today->diff($dob)->y;
    return $age;
}

function countLanguages($programmingLanguages) {
    $languages = explode(',', $programmingLanguages);
    $languagesCount = count($languages);
    return $languagesCount;
}
?>