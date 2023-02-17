<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht_P3-2.2</title>
</head>

<body>
    <?php
    
    session_start();
    $_SESSION["voornaam"] = $_POST["voornaam"];
    $_SESSION["achternaam"] = $_POST["achternaam"];
    $_SESSION["geslacht"] = $_POST["geslacht"];
    $_SESSION["straat"] = $_POST["straat"];
    $_SESSION["stad"] = $_POST["stad"];
    $_SESSION["land"] = $_POST["land"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["wachtwoord"] = $_POST["wachtwoord"];

    echo "voornaam: ";
    echo $_POST["voornaam"];
    echo "<br>";
    echo "achternaam: ";
    echo $_POST["achternaam"];
    echo "<br>";
    echo "geslacht: ";
    echo $_POST["geslacht"];
    echo "<br>";
    echo "straat en huisnummer: ";
    echo $_POST["straat"];
    echo "<br>";
    echo "stad: ";
    echo $_POST["stad"];
    echo "<br>";
    echo "land: ";
    echo $_POST["land"];
    echo "<br>";
    echo "email: ";
    echo $_POST["email"];
    echo "<br>";
    echo "wachtwoord: ";
    echo $_POST["wachtwoord"];
    echo "<br>";
    echo "<br>";
    echo "klopt dit?";
    echo "<br>";
    ?>

    <form action="index3.php" method="POST">
        <input type="submit" name="verder" value="verder">
        <input type="submit" name="terug" value="terug">
    </form>

</body>

</html>