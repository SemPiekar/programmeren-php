<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 4</title>
</head>

<body>
    <form action="" method="post">
        <label for="radius">Straal:</label>
        <input type="number" name="radius" required>
        <input type="submit" name="submit" value="berekenen">
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $r = $_POST['radius'];

        echo "De omtrek van de cirkel met straal " . $r . ' is: ' . calc_circum($r) . "<br>";
        echo "De opperrvlakte van de cirkel is: " . calc_area($r);
    }

    function calc_circum($radius)
    {
        $circum = round(2 * pi() * $radius, 2);
        return $circum;
    }

    function calc_area($radius)
    {
        $area = round(pi() * $radius * $radius, 2);
        return $area;
    }

    ?>

</body>

</html>