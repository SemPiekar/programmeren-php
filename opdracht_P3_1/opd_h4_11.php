<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opd_h4_11</title>
</head>
<body>
    <form method="post">
        <label for="faculteit"></label><input type="number" name="faculteit">
        <br>
        <input type="submit" name="controlleren" value="controlleren">
    </form>
    <?php
    if (isset($_POST["controlleren"])) {
        $faculteit = $_POST["faculteit"];
        $resultaat = 1;
        for ($i = 1; $i <= $faculteit; $i++) {
            if ($i <= $faculteit - 1) {
                $resultaat += $resultaat * $i;
            } else if ($i == $faculteit) {
                echo "De faculteit van $faculteit is $resultaat.";
            };
        };
    };
    ?>
</body>
</html>