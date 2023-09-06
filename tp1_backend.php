<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Arietti Gabriela">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Trabajo practico nº1</title>
</head>

<body>
    <div class="codigo">
        <h2>Trabajo práctico nº1 - Arietti Gabriela</h2>
        <?php
        //1-
        echo "Hola mundo<br>";

        //2-
        $saludo = "Hola mundo<br>";
        echo $saludo;

        //3-
        $numero1 = 45;
        $numero2 = 5;
        echo "La suma es igual a " . $numero1 + $numero2 . "<br>";
        echo "La resta es igual a " . $numero1 - $numero2 . "<br>";
        echo "La multiplicación es igual a " . $numero1 * $numero2 . "<br>";
        echo "La división es igual a " . $numero1 / $numero2 . "<br>";
        echo "El resto es igual a " . $numero1 % $numero2 . "<br>";

        //4-
        $celsius = 20;
        $elOtro = ($celsius * 1.8) + 32;
        echo "20º celsius equivalen a " . $elOtro . "º Fahrenheit<br>";

        //5-a
        $baseRectangulo = 18;
        $alturaRectangulo = 12;
        $perimetroRectangulo = ($alturaRectangulo + $baseRectangulo) * 2;
        $areaRectangulo = $alturaRectangulo * $baseRectangulo;
        echo "El perímetro del rectángulo es de " . $perimetroRectangulo . " cm.<br>";
        echo "El área del rectángulo es de " . $areaRectangulo . " cm2.<br>";

        //5-b
        $radio = 30;
        $perimetroCirculo = 2 * pi() * $radio;
        $areaCirculo = pi() * $radio ** 2;
        echo "El perímetro del circulo es de " . $perimetroCirculo . " cm.<br>";
        echo "El área del rectángulo es de " . $areaCirculo . " cm2.<br>";
        ?>
    </div>
</body>

</html>