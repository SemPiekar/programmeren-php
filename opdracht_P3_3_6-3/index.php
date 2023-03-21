<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Postcode Gen</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <label for="begin">Beginwaarde</label>
            <input type="number" name="begin" required>
            <label for="end">Eindwaarde</label>
            <input type="number" name="end" required>
            <input type="submit" name="submit" value="genereer">
        </form>
    </main>

<?php

if(isset($_POST["submit"])){
echo zipCodeGen($_POST['begin'], $_POST['end']);
}

function zipCodeGen($begin, $end){
    $rand_number = rand($begin, $end);
    $rand_string = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2);
    echo "Een semi-willekeurige postcode is: ". $rand_number. '' . $rand_string;
}

?>

</body>
</html>