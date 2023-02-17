<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht_P3-2.3</title>
</head>

<body>
    <?php
    session_start();
    ?>
    <form method="POST" action="index2.php">
        <label for="voornaam">Voornaam:</label><br>
        <input type="text" id="voornaam" name="voornaam" value="<?php echo $_SESSION["voornaam"] ?>"><br>
        <label for="achternaam">Achternaam:</label><br>
        <input type="text" id="achternaam" name="achternaam" value="<?php echo $_SESSION["achternaam"] ?>"><br>
        <label for="geslacht">Geslacht:</label><br>
        <input type="radio" id="geslacht" name="geslacht" value="man">Man<br>
        <input type="radio" id="geslacht" name="geslacht" value="vrouw">Vrouw<br>
        <label for="straat">Straat en huisnummer:</label><br>
        <input type="text" id="straat" name="straat" value="<?php echo $_SESSION["straat"] ?>"><br>
        <label for="stad">Stad:</label><br>
        <input type="text" id="stad" name="stad" value="<?php echo $_SESSION["stad"] ?>"><br>
        <label for="land">Land:</label><br>
        <select id="land" name="land" value="<?php echo $_SESSION["land"] ?>">
            <option value="Nederland">Nederland</option>
            <option value="België">België</option>
            <option value="Duitsland">Duitsland</option>
            <option value="Frankrijk">Frankrijk</option>
            <option value="Spanje">Spanje</option>
        </select><br>
        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $_SESSION["email"] ?>"><br>
        <label for="wachtwoord">Wachtwoord:</label><br>
        <input type="password" id="wachtwoord" name="wachtwoord" value="<?php echo $_SESSION["wachtwoord"] ?>"><br>
        <input type="submit" value="Verzenden" name="verzenden">
    </form>
</body>

</html>