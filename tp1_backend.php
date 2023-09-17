<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer documento PHP</title>
</head>
<body>
    <?php
    // 1
echo "Hola Mundo";
echo "<br><br>"
    ?>

    <?php
    //2
    $mensaje="Hola Mundo";
echo $mensaje;
echo "<br><br>"
?>


<?php
//3
$numero1=10;
$numero2=5;

$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division_entera=$numero1/$numero2;
$resto=$numero1%$numero2;

echo "Suma: ". $suma . "<br>";
echo "Resta:" . $resta ."<br>";
echo "Multiplicacion:" . $multiplicacion . "<br>";
echo "División entera: " . $division_entera . "<br>";
echo "Resto: " . $resto;
echo "<br><br>"
?>

<?php
//4
$celsius = 20;
$fahrenheit = ($celsius * 9/5) + 32;

echo $celsius . "ºC equivale a " . $fahrenheit . "ºF";
echo "<br><br>"
?>

<?php
//5
$base = 18;
$altura = 12;

$perimetro = 2 * ($base + $altura);
$area = $base * $altura;
//5a
echo "Perímetro del rectángulo: " . $perimetro . " cm  ";
echo "<br>";
echo "Área del rectángulo: " . $area . " cm²";
echo "<br><br>"
?>

<?php
//5b

$radio = 30;
$pi = 3.14159;

$perimetro = 2 * $pi * $radio;
$area = $pi * ($radio.$radio);

echo "Perímetro del círculo: " . $perimetro . " cm";
echo "<br>";
echo "Área del círculo: " . $area . " cm²";
?>

</body>
</html>