<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "<pre>\n";
    print "<h1>Ejercicio 1<h1>\n" ;
    //almacenar los primeros 10 numeros pares y mostrarlos por pantalla uno abajo del otro.
    $numerosPares = [];
    //$i+=2==i=i+2
    for($i=2;$i<=20;$i+=2){
        //Asigna los numeros pares al array
        $numerosPares[]=$i;
    }
    //mostrar los valores asignados
    foreach($numerosPares as $j) {
        print "<pre>\n";
        print ($j);
        print "<pre>\n";
    }

    print "<pre>\n";
    print "<h1>Ejercicio 2<h1>\n" ;
    //poner valores, Pedro, Ana, 34, 1, mostrar print_r
    $random = ["Pedro", "Ana", 34, 1];
    print_r ($random);

    print "<h1>Ejercicio 3<h1>\n" ;
    $asociativo = ['nombre'=>"Pedro" , 'apellido'=>"Torres", 'dirección'=>"Av Mayor 3703", 'telefono'=> 1122334455];
    $print_r = ($asociativo);
    print "<pre>\n";

    print "<h1>Ejercicio 4<h1>\n" ;
    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
    
    foreach ($ciudades as $i => $j) {
        print "<pre>\n";
        print ("La ciudad con el índice $i se llama $j");
        print "<pre>\n";
    }
        print "<pre>\n";

        print "<h1>Ejercicio 5<h1>\n" ;
    $cities = ['MD' => "Madrid", 'BCL' =>"Barcelona", 'LD'=>"Londres", 'NY'=>"Nueva York", 'LA'=>"Los Angeles", 'CCG'=>"Chicago"];
    foreach ($cities as $i => $j) {
        print "<pre>\n";
        print ("La ciudad con el índice $i se llama $j");
        print "<pre>\n";
    }
    
    ?>
</body>
</html>