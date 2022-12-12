<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht_4.1</title>
</head>
<body>
    <?php
    $hour = date("G");

    if ($hour >= 6 && $hour < 12) {
        echo "Het is ochtend";
    } else if ($hour >= 12 && $hour < 18) {
        echo "Het is middag";
    } else if ($hour >= 18 && $hour < 24) {
        echo "Het is avond";
    } else {
        echo "Het is s'nachts";
    }
    ?>
</body>
</html>