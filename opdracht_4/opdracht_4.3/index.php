<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdrahct 4.3</title>
</head>
<body>
    <?php

    $num1 = 2;
    $num2 = 10;

    if ($num1 >= $num2) {
        $num1 = $num1* 2 + $num2;
        echo $num1;
    } else {
        $num2 = $num2 * 2 + $num1;
        echo $num2;
    }

    ?>
</body>
</html>