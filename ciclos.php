





Es una estructura que nos permite realizar una tarea de forma repetida, a partir de una condicion de salida.<br>
Esta estrcutura, nos permite controlar el flujo de las repeticiones y en comparacion a otros ciclos, es mas versatil. <br>
Para utilizar el ciclo While usamos la siguiente sintaxis: <br>


Ejemplo 1: <br>
Crear un programa que reciba un valor y muestre la siguiente salida: <br>
Si n=9 <br>
Salida: 1,2,3,4,5,6,7,8,9


$i=0; <br>
While(i<=n){<br>
    echo $i;<br>
    $i++;<br>
}<br>


$n=9;
$i=1;
While($i<=n){
    echo $i.",";
    $i++;
}

Ejercicio 1: <br>
Crear un programa que reciba un valor y muestre sus digitos pares: <br>
Si n=9 <br>
Salida: 1,2,3,4,5,6,7,8,9

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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <div class="alert alert-success">
        Ejercicio 2: <br>
        Crear un programa que reciba un valor y muestre sus digitos pares: <br>
        Si n=45697 <br>
        Salida: 4,5,6,8,7
    </div>
    <?php
      $nro=6416431581313;
      $digito;
      $salida="";
      while($nro>0){
        $digito=$nro%10;
        $salida = $salida.$digito. ",";
        $nro=(int)$nro/10;
      }
      echo $salida;
    ?>

<div class="alert alert-success">
        Ejercicio 3: <br>
        Crear un programa que reciba un valor y muestre sus digitos pares: <br>
        Si n=45687 <br>
        Salida: 4,6,8
    </div>
    <?php
      $nro=45687;
      $par;
      $salidas="";
      while($nro>0){
        $par=$nro%10;
        if($par %2 == 0){
          $salidas=$par.",".$salidas;
        }
        $nro=(int)$nro/10;
      }
      echo $salidas;
    ?>


  </body>
</html>