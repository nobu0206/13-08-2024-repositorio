<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <div class="alert alert-success">
        1. Crear un programa que reciba un número y muestre por separado sus dígitos pares y sus dígitos impares
        Ejemplo: 1651615
        Salida:
        Pares: 6,6
        Impares: 1,5,1,1,5
    </div>
    <?php
    $nro = 1651615;
    $par = "";
    $impar = "";
    $digito;
    while($nro > 0){
        $digito = $nro % 10;
        if($digito % 2 == 0){
            $par = $digito.",".$par;
        } else {
            $impar = $digito.",".$impar;
        }
        $nro = (int)($nro / 10);
    }
    echo "Pares: $par";
    echo "Impares: $impar";
    ?>

    
    <div class="alert alert-success">
        2. Crear un programa que reciba dos números a y b:
        * Si b es impar agregar una cantidad de 1 al comienzo de a
        * Si b es par agregar una cantidad de 1 al final de a
        Ejemplo: a=45   b=8
        Salida: 4511111111
    </div>
    <?php
    $a = 45;
    $b = 9; 
    if ($b % 2 == 0) {
      echo "par: ";
        echo $a;
        for ($i = 0; $i < $b; $i++) {
            echo 1;
        }
    } else {
      echo"impar: ";
        for ($i = 0; $i < $b; $i++) {
            echo 1;
        }
        echo $a;
    }
    ?>


    <div class="alert alert-success">
        3. Crear un programa que reciba 3 números y los ordene ascendentemente:
        Entrada: 8,1,6
        Salida: 1,6,8
    </div>
    <?php
    $a = 8;
    $b = 1;
    $c = 6;
    if ($a <= $b && $a <= $c) {
        if ($b <= $c) {
            echo $a.",".$b.",".$c;
        } else {
            echo $a.",".$c.",".$b;
        }
    } elseif ($b <= $a && $b <= $c) {
        if ($a <= $c) {
            echo $b.",".$a.",".$c;
        } else {
            echo $b.",".$c.",".$a;
        }
    } else {
        if ($a <= $b) {
            echo $c.",".$a.",".$b;
        } else {
            echo $c.",".$b.",".$a;
        }
    }
    ?>


    <div class="alert alert-success">
        4. Crear un programa que reciba dos valores a y b y evalúe si son múltiplos el uno del otro.
        Entrada: a=8, b=16
        Salida: Son múltiplos
    </div>
    <?php
    $a = 8;
    $b = 16;
    if ($b % $a == 0 || $a % $b == 0) {
        echo "son mltiplos";
    } else {
        echo "no son multiplos";
    }
    ?>

    <div class="alert alert-success">
        5. Crear un programa que reciba un valor n y genere todos los dígitos impares menores
        Entrada: 13
        Salida: 1,3,5,7,9,11
    </div>
    <?php
    $n = 14;
    for ($i=1; $i<$n; $i+=2) {
        echo $i.",";
    }
    ?>


    <div class="alert alert-success">
        6. Crear un programa que reciba un valor n y muestre por pantalla el mismo valor, pero invertido:
        Entrada 4189
        Salida: 9814
    </div>
    <?php
      $nro=4189;
      $x;
      $salida=0;
      while($nro>0){
        $x=$nro%10;
        $salida = $salida * 10 +$x;
        $nro = (int)($nro/10);
      }
      echo $salida;
    ?>

  </body>
</html>