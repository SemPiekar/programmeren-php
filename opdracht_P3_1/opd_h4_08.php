<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>opd_h4_08</title>
</head>

<body>
    <form action="" method="GET">
        <label for="leeftijd">Leeftijd: </label>
        <input type="number" id="age" name="age" min="1" max="100">
        <br>
        <label for="stempas">Stempas ontvangen? : </label>
        <label for="ja">Ja</label>
        <input type="radio" name="stempas" id="stempas" value="Ja">
        <label for="nee">Nee</label>
        <input type="radio" name="stempas" id="stempas" value="Nee">
        <br>
        <input type="submit" value="Submit" name="submit"></input>
    </form>
    <?php
    if (isset($_GET["submit"])) {

        if ($_GET['age'] >= "16") {
            echo "Je mag praktijkexamen voor je scooterrijbewijs doen. <br>";
        } else {
            echo "Je mag geen praktijkexamen voor je scooterrijbewijs doen. <br>";
        }

        $stempas =  ($_GET['stempas'] == "Ja");

        if ($_GET['age'] >= "18") {
            if ($stempas) {
                echo "Je mag stemmen want je hebt een stempas.";
            } else {
                echo "Je mag niet stemmen want je hebt geen stempas.";
            }
        } else {
            echo "Je mag niet stemmen want je bent niet oud genoeg.";
        }
    }
    ?>
</body>

</html>