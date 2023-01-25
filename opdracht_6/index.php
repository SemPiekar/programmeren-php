<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht6</title>
</head>

<body>
    <form method='post' action=''>
        <label> Exclusief btw</label>
        <input id='number' type="number" name="number"> <br>
        <input type="radio" name='procent' value=' 9 '> Laag, 9% <br>
        <input type="radio" name='procent' value=' 21 '> Hoog, 21% <br> <br>
        <input type="submit" name="verzend">
    </form>
    <?php
    if (isset($_POST['verzend'])) {
        $price = ($_POST['number']);
        $procent = ($_POST['procent']);


        if ($procent == "laag") {
            echo "checked='checked'";
        }
        if ($procent == "hoog") {
            echo "checked='checked'";
        }


        echo "<p>Bedrag inclusief  " . $procent . "  BTW: " . number_format($price + ($price / 100 * $procent)) . "</p>";
    }
    ?>
    <hr>
    <form method='post' action=''>
        <label> getal 1</label>
        <input id='n' type="number" name="n"> <br>
        <input type="radio" name='sum' value='+'> Optellen
        <input type="radio" name='sum' value='-'> Aftrekken
        <input type="radio" name='sum' value='*'> Vermedigvuldigen
        <input type="radio" name='sum' value='/'> Delen <br>
        <label> getal 2</label>
        <input id='n2' type="number" name="n2"> <br> <br>
        <input type="submit" name="bereken" value='bereken'>
    </form>
    <?php
    if (isset($_POST['bereken'])) {
        $n = ($_POST['n']);
        $n2 = ($_POST['n2']);
        $sum = ($_POST['sum']);
        $worth;

        if ($sum == "+") {
            $worth = $n + $n2;
        }
        if ($sum == "-") {
            $worth = $n - $n2;
        }
        if ($sum == "*") {
            $worth = $n * $n2;
        }
        if ($sum == "/") {
            $worth = $n / $n2;
        }

        echo "<p> $n $sum $n2 = $worth </p>";
    }
    ?>
    <hr>
    <form method='post' action=''>
        <label> Prijs</label>
        <input id='value1' type="number" name="value1"> <br>
        <label> Korting (%)</label>
        <input id='proc1' type="number" name="proc1"> <br> <br>
        <input type="submit" name="calc" value='calculate'>
    </form>
    <?php
    if (isset($_POST['calc'])) {
        $v = ($_POST['value1']);
        $p = ($_POST['proc1']);
        $a = $v - ($v / 100 * $p);

        echo "<p> Bedrag inclusief " .  $p . "% korting: " . number_format($a) . "</p>";
    }
    ?>
</body>

</html>