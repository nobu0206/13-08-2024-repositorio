<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
      /*Resolver los siguientes ejercicios:

      1. Crear un programa que reciba 2 números y verificar si uno es múltiplo del otro.
             *
             * a=5
             * b=20
             * Salida: Son múltiplos
             */
            $a=5;
            $b=20;
      
            if ($b % $a == 0) {
               echo "$b es múltiplo de $a";
            } else {
               echo "$a es múltiplo de $b";
            }
            echo" /// ";
      /*2. Crear un programa que obtenga el último de número y que indique si es par o no
             * 55161
             * 1 es impar
             */
            $numero = 55161;
            $ultimo = $numero % 10;

            if ($ultimo % 2 == 0) {
               echo "el ultimo digito de $numero es $ultimo y es par";
            } else {
               echo "el ultimo digito de $numero es $ultimo y es impar";
            }
            echo" /// ";
      /*3. Crear un programa que calcule el impuesto IVA de una compra
             * Ej. 100 entonces la salida debe ser: 113*/
            $precio = 100;
            $iva = 0.13;
            $precioiva = $precio + ($precio * $iva);

            echo "el precion con IVA de $precio es $precioiva";


   ?>
</body>
</html>