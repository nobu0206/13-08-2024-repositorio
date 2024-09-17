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
        Crear un programa que genere las siguientes salidas:
        Entrada:9
        Salida:9,9,9,9,9,9,9,9,9,9
        Entrada:5
        Salida: 5,5,5,5,5,5
        Entrada:3
        Salida: 3,3,3,3
    </div>
    <?php
    $n = 9;
    for ($i=0; $i<=$n; $i+1) {
        echo $n.",";
    }
    ?>
    
    

    <div class="alert alert-success">
        1. Crear un programa que reciba un número y muestre por separado sus dígitos pares y sus dígitos impares
        Ejemplo: 1651615
        Salida:
        Pares: 6,6
        Impares: 1,5,1,1,5
    </div>

  </body>
</html>