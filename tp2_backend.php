<!DOCTYPE html>
<html>
<head>
    <title>Backend:TP N°2</title>
</head>
<body>
    <h1>Ejercicios:</h1>

    <?php
    // Ejercicio 1: Crear una variable n y validar que sea un número positivo.
    $n1 = 5; // Cambio el valor de $n1 para probar diferentes casos

    if ($n1 > 0) {
        echo "<p>El número $n1 es positivo.</p>";
    } else {
        echo "<p>El número $n1 es negativo.</p>";
    }

    // Ejercicio 2: Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
    $n2 = 7; // Cambio el valor de $n2 para probar diferentes casos

    if ($n2 > 1 && $n2 < 10) {
        echo "<p>El número $n2 es mayor a 1 y menor a 10.</p>";
    } else {
        echo "<p>El número $n2 no cumple con las condiciones.</p>";
    }

    // Ejercicio 3: Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
    $n3 = 15; // Cambio el valor de $n3 para probar diferentes casos

    if ($n3 > 10 || $n3 < 2) {
        echo "<p>El número $n3 cumple con las condiciones.</p>";
    } else {
        echo "<p>El número $n3 no cumple con las condiciones.</p>";
    }

    // Ejercicio 4: Crear dos variables, una con nombre numero1 y otra con el nombre de numero2.
    // Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,mostrar por pantalla la multiplicación, la división entera y el resto de la división.
    // Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.

    $numero1 = 8; // Cambia el valor de $numero1 para probar diferentes casos
    $numero2 = 5; // Cambia el valor de $numero2 para probar diferentes casos

    if ($numero1 > $numero2) {
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        echo "<p>La suma de $numero1 y $numero2 es $suma y la resta es $resta.</p>";
    } elseif ($numero2 > $numero1) {
        $multiplicacion = $numero1 * $numero2;
        $division= $numero1 / $numero2;
        $resto = $numero1 % $numero2;
        echo "<p>La multiplicación de $numero1 y $numero2 es $multiplicacion, la división es $division y el resto de la división es $resto.</p>";
    } else {
        echo "<p>Los números ingresados son iguales.</p>";
    }
    ?>

</body>
</html>