<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Цвет</th>
            <th>HexCode</th>
        </tr>
        <?php
            $intensities = ['00', '33', '66', '99', 'CC', 'FF'];
            $count = 1;

            foreach ($intensities as $red) {
                foreach ($intensities as $green) {
                    foreach ($intensities as $blue) {
                        $hexCode = $red . $green . $blue;
                        echo "<tr>
                                <td style='background-color: #$hexCode;'></td>
                                <td>#$hexCode</td>
                              </tr>";
                        $count++;
                    }
                }
            }
        ?>
    </table>
</body>
</html>
