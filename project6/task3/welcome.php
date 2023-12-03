<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('<?php echo $_COOKIE["background"];?>');">
    <div class="container">
        <h1 style = "color: #FFF" >Привет, <?php echo $_COOKIE["user_name"];?>!</h1>
    </div>
</body>
</html>
