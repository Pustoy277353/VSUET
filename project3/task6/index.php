<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="post" enctype="multipart/form-data">
            Выберите файл: <input type="file" name="filename" size="10" /><br /><br />
            <input type="submit" value="Загрузить" />
        </form>

        <?php

        if ($_FILES && $_FILES["filename"]["error"] == UPLOAD_ERR_OK) {
            
            getFilesSize('.\uploads');

            $i = getFilesSize('.\uploads');

            if ($i < 1000000) {
            $name = $_FILES["filename"]["name"];
            move_uploaded_file($_FILES["filename"]["tmp_name"], './uploads/' . $name);
            echo "Файл загружен";
            } else {
                echo 'хранилище перегружено';
            }
        }

        function getFilesSize($path)
        {
            $fileSize = 0;
            $dir = scandir($path);

            foreach ($dir as $file) {
                if (($file != '.') && ($file != '..'))
                    if (is_dir($path . '/' . $file))
                        $fileSize += getFilesSize($path . '/' . $file);
                    else
                        $fileSize += filesize($path . '/' . $file);
            }

            return $fileSize;
        }

        ?>

    </div>
</body>

</html>