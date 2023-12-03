<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="php.php" method="POST">
        <div>
            <h2>Добавьте продукт</h2>
            Название товара:
            <input id="name" name="nameProduct" type="text"><br>
            Цена:
            <input id="price" name="priceProduct" type="text"><br>
            Описание:
            <input id="info" name="infoProduct" type="text"><br>
            Страна изготовитель:
            <select name="country" id="country">
                <option value="1">Россия</option>
                <option value="2">Китай</option>
                <option value="3">Корея</option>
            </select><br>
            <button>Отправить</button>
        </div>
    </form>
</body>

</html>