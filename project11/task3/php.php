<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   if (isset($_POST['furniture'])) {
      $furniture = $_POST['furniture'];
      $material = $_POST['Material'];
      $number = $_POST['number'];
   }
   echo "<h2>Ваш заказ принят</h2>";
   echo "Заказано изделие: " . $furniture . "<br>";
   echo "Материал: " . $material . "<br>";
   echo "Количествово: " . $number;
   ?>

</body>

</html>