<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="zadanie1_style.css">
    <title>Document</title>
</head>
<body>
<?php

for($i=20; $i>=0; $i--) //tworzymy petle for i=20 która będzie wykonywać się od 0 do 20 wypisując kolejne wiersze
{
    for($j=1; $j<=$i; $j++) //tworzymy pętlę j =1 która będzie wykonywać się od 1 do $j<=$i wypisując kolejne liczby od 1 do 20 w wierszu
    {
echo $j . "," . " "; //wypisywanie następnych liczb
    }
    echo"<br>"; //przejście do kolejnego wiersza
}


?>
</body>
</html>