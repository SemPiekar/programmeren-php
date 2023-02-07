<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opd_h4_09</title>
</head>
<body>
    <form method="post">
        <label for="zijde1">zijde1: </label><input type="number" name="zijde1">
        <br>
        <label for="zijde1">zijde2: </label><input type="number" name="zijde2">
        <br>
        <label for="zijde1">zijde3: </label><input type="number" name="zijde3">
        <br>
        <input type="submit" name="controlleren" value="controlleren">
    </form>
    <?php
    if (isset($_POST["controlleren"])) {
        $zijde1 = $_POST["zijde1"];
        $zijde2 = $_POST["zijde2"];
        $zijde3 = $_POST["zijde3"];
        if ($zijde1 and $zijde2 > $zijde3) {
            echo "kan wel!";
        } else {
            echo "kan niet!";
        }
    };
    ?>
</body>
</html>