<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdrachtP3_3-62</title>
</head>

<body>
    <?php
    session_start();
    $_SESSION["sessiontime"] += 1;
    echo "Deze pagina heb je al: " . $_SESSION["sessiontime"] . " keer bekeken voordat je de internet browser hebt afgesloten";
    echo "<br>";
    echo "<br>";
    if (isset($_COOKIE['visited'])) {
        $_COOKIE["visited"] += 1;
        setcookie("visited", $_COOKIE["visited"], time() + 3600);
        echo "Deze pagina heb je al in totaal: " . $_COOKIE["visited"] . " keer bekeken";
    } else {
        $_COOKIE["visited"] = 1;
        setcookie("visited", 1, time() + 3600);
        echo "Deze pagina heb je al in totaal: 1 keer bekeken";
    }


    ?>
</body>

</html>