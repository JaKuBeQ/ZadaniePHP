<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="zadanie2_style.css">
</head>

<body>
    <?php

$a = 4; //tworzenie i przypisywanie wartości do zmiennych a i b
$b = 22;

function nwd($a, $b) //tworzenie funkcji nwd i przypisywanie jej wartości zmiennych a i b
{
while($a!=$b) //dopóki zmienna a jest różna od zmiennej b
{
    if($a>$b) //jeśli zmienna a jest większa od zmiennej b to odejmujemy zmienną b od a
    {
        $a-=$b;
    }
    else //w przeciwnym wypadku odejmij zmienną a od b
    {
        $b-=$a;
    }
}
return $a; //zwróc zmienną a
}
echo "Największy wspólny dzielnik liczby: " . $a . " i liczby: " . $b . " wynosi: " .  nwd($a, $b); //wypisz wynik
?>
</body>

</html>
