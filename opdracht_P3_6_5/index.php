<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opracht_P3_6_5</title>
</head>

<body>
    <h1>Remsnelheid berekenen</h1>
    <form method="POST">
        <label for="lengte_remspoor">Lengte remspoor (in meters):</label>
        <input type="number" id="lengte_remspoor" name="lengte_remspoor" required><br><br>

        <label for="remvertraging">Remvertraging:</label>
        <input type="number" id="remvertraging" name="remvertraging" step="0.1" value="5.5" required><br><br>

        <input type="submit" name="submit" value="Bereken snelheid"><br><br>
    </form>


    <?php
    function berekenSnelheid($lengte_remspoor, $remvertraging)
    {
        $snelheid_mps = sqrt(2 * $remvertraging * $lengte_remspoor);
        $snelheid_kmh = $snelheid_mps * 3600 / 1000;
        return $snelheid_kmh;
    }

    if (isset($_POST['submit'])) {
        $lengte_remspoor = $_POST['lengte_remspoor'];
        $remvertraging = $_POST['remvertraging'];
        $snelheid_kmh = berekenSnelheid($lengte_remspoor, $remvertraging);
        echo "De berekende snelheid is: " . number_format($snelheid_kmh, 2) . " km/u";
    }
    ?>


</body>

</html>