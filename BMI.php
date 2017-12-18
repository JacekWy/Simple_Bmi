<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>BMI</title>
</head>
<body>
<h2>Kalkulator BMI</h2>

<form method="post" action="BMI.php">
    Waga: <input type="text" name="waga"><br><br>
    Wzrost(m): <input type="text" name="wzrost"><br><br>
    <input type="submit" name="licz" value="Oblicz">

</form>

</body>
</html>

<?php
if(isset($_POST['licz'])) {
    $waga = $_POST['waga'];
    $wzrost = $_POST['wzrost'];

    $wynik = $waga / pow($wzrost, 2);

    echo round($wynik, 2) . '<br>';


    if ($wynik < 16) {
        echo 'Wyglodzenie';
    } elseif ($wynik < 16.99) {
        echo 'Wychudzenie';
    } elseif ($wynik < 18.48) {
        echo 'Niedowaga';
    } elseif ($wynik < 24.99) {
        echo 'Waga Prawidlowa';
    } elseif ($wynik < 29.99) {
        echo 'Nadwaga';
    } elseif ($wynik < 34.99) {
        echo '1 stopiem otylosci';
    }
}



