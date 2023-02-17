<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdrachtP3_3-61</title>
</head>

<body>
    <?php 
        session_start();
        $counter = 0;
        $_SESSION["counter"]+= 1;
        echo "Deze pagina heb je al " .$_SESSION["counter"] . " keer bekeken voordat je de internet browser hebt afgesloten ";
    ?>
</body>

</html>