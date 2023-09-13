<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 2</title>
</head>
<body>
    <h1>Trabajo Práctico 2</h1>
    <strong><p>Punto 1.</p></strong>
    <?php
    //1. Crear una var n y validar q sea un núm positivo
    $num1 = 5;
    if($num1 >= 0){
        echo ("El número ".$num1." es positivo". "<br>");
    }else{
        echo("El número es negativo");
    }
    echo "<br>";
    ?>
    <strong><p>Punto 2.</p></strong>
    <?php
    $num = 2;
    if($num > 1 && $num<10){
        echo ("El número ".$num." es mayor a 1 y menor a 10". "<br>");
    }else{
        echo("El número no cumple la condición");
    }
    echo "<br>";
    ?>
    <strong><p>Punto 3.</p></strong>
    <?php
    $num = 11;
    if($num > 10 || $num < 2){
        echo ("El número ".$num." es mayor a 10 o menor a 2". "<br>");
    }else{
        echo("El número no cumple la condición");
    }
    echo "<br>";
    ?>
    <strong><p>Punto 4.</p></strong>
    <?php
    $numero1 = 2;
    $numero2 = 4;
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $divi = $numero1 / $numero2;
    $resto = $numero1 % $numero2;
    if($numero1 > $numero2){
        echo("El resultado de la suma es: ". $suma);
        echo "<br>";
        echo("El resultado de la resta es: ". $resta);
    }else if ($numero1 == $numero2){
        echo("Los números ingresados son iguales: ".$numero1. ", ". $numero2);
        echo "<br>";
    }else{
        echo("El resultado de la multiplicación es: ". $multi);
        echo "<br>";
        echo("El resultado de la división es: ". $divi);
        echo "<br>";
        echo("El resultado del resto es: ". $resto);
    }

    ?>


</body>
</html>