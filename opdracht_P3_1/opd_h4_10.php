<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opd_h4_10</title>
</head>
<body>
    <form method="post">
        <label for="getal"></label><input type="number" name="getal"><br>
        <input type="submit" name="controlleren" value="controlleren">
    </form>
    <?php
    if (isset($_POST["controlleren"])) {
        $getal = $_POST["getal"];
        $berekening = 0;
        echo "Optelling is als volgt: ";
        echo "<br>";
        for ($i = 0; $i <= $getal; $i++) {
            if ($i != $getal) {
                $num = 0;
                $num += $i;
                echo "$num + ";
                $berekening += $i;
            } else {
                $num += $i - ($getal - 1);
                $berekening += $getal;
                echo "$num = $berekening";
            }
        }
    };
    ?>
</body>
</html>