<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 4.2</title>
</head>

<body>
    <?php
    $time = date("H");

    switch ($time) {
        case ($time >= 6 && $time < 12):
            echo "Het is ochtend.";
            break;
        case ($time >= 12 && $time < 18):
            echo "Het is middag.";
            break;
        case ($time >= 18 && $time < 24):
            echo "Het is avond.";
            break;
        default:
            echo "Het is s'nachts.";
    }

    ?>
</body>

</html>