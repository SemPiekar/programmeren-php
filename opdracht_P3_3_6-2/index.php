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
    $counter = 0;
    $_SESSION["counter"] += 1;
    echo "Deze pagina heb je al " . $_SESSION["counter"] . " keer bekeken voordat je de internet browser hebt afgesloten ";
    if (!isset($_COOKIE['cookietime'])) {
        setcookie('cookietime', $_SESSION['sessiontime'], time() + 3600);
    }
    if ($_COOKIE['cookietime'] <= $_SESSION['sessiontime']) {
        $_COOKIE['cookietime'] = $_SESSION['sessiontime'];
    }
    echo '<p>U heeft de pagina in totaal ' . $_COOKIE['cookietime'] . ' keer bezocht</p>';
    ?>
</body>

</html>