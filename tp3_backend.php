<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
//ejercicio 1
for ($i=1;$i<101;$i++) {
    print "<p> $i </p>\n";
    ;

}



//ejercicio2
    for ($i=100;$i>0;$i--) {
    print "<p> $i </p>\n";
}



//ejercicio3
    for ($i=2;$i<=100;$i=$i+2) {
    print "<p> $i </p>\n";
}


//ejercicio4
for ($i=1;$i<=100;$i=$i+2) {
    print "<p> $i </p>\n";
}

//ejercicio5
    $suma = 0;
    for ($i = 1; $i <= 20; $i++) {
        $suma += $i;
    }
    print $suma;

//ejercicio6
    $suma = 0;
    for ($i = 2; $i <= 20; $i=$i+2) {
        $suma += $i;
    }
    print $suma;

?>
</body>
</html>