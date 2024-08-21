<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
      //Reglas para la creación de variables
      /*
         1. Toda variable debe empezar con el símbolo $
         2. Despues del símbolo $, deben usarse solo caracteres alfabéticos y el símbolo _
         3. No se puede uilizar números después del símbolo de $
         4. No se pueden utilizar símbolos especiales: *+-?¿%&%/....
         5. Se pueden usar caracteres alfanuméricos y el símbolo _
      */
      /*
      $nombre="Jose";
      $_edad=45;
      $nombre2="Carlos";
      $edad_actual=52;
      $nombre_actual_persona1="Raul";
      */
      //$1nombre="Carlos";
      //$nombre(/&="Raul";

      /*
      SINTAXIS EN PHP
      Cada línea de php, debe terminar obligatoriamente con el símbolo ;
      */

      /*
      Comentarios en PHP
      Los comentarios son elementos que nos permiten describir alguna caracterísica de nuestro progrma, o aclarar algún punto que sa confuso, o simplemente para documentar nuestro código
      */

      //Comentario en una línea
      #Comentario en una línea

      /*
      Comentario en varias líneas
      */

      /*
      Tipos de datos en PHP
      En php, disponemos de diversos tipos de datos:
      --- int
      --- float
      --- string
      --- boolean
      No es necesario especificar el tipo de dato de cada variable, simplemente se crear la variable y se le asigna el valor
      */
      /*
       * Operadores de comparación
       * >, <, >=, <=, ==, !=
       */
      /*
       *Crear un programa que reciba un número y obtenga su último dígito
       */
      /*
      $a=148;
      $digito=$a%10;
      echo $digito;
      $nacimiento=2000;
      $altura=1.68;
      $nombre="Juancito";
      $valor=true;
      */
      /**
       * Operadores en PHP
       * Operadores Aritméticos
       * +,-,*,/,%
       * Operadores de asignación
       * =
      */


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

      /**
       * Estructuras de control
       * CONDICIONALES
       * REPETITIVAS
       * 
      */
      //ESTRUCTURA IF
      echo " ";
      $nombre="Carlos";
      if($nombre =="carlos"){
         echo"<br>Son iguales";
      }else{
         echo"<br>no son iguales";
      }

      //Dado un numero verificar si es multiplo de 5
      echo "";
      $m=20;
      
         if ($m % 5 == 0) {
            echo "<br>es múltiplo";
         }else{
            echo "<br>no es múltiplo";
         }

      //Si tenemos la nota final de un estudiante, verificar si aprobo o no
      //Nota minima de aprobacion 61
      //Ademas si su nota es mayor o igual a 70, agregar "SOBRESALIENTE"
      //Si es >=  90 agrgar "EXCELENTE"
      
      $n2=89;
      if ($n2>=61) {
         if ($n2>=90) {
            echo "<br>Aprobado, -Excelente-";
         }else{
            if ($n2>=70) {
               echo "<br>Aprobado, -Sobresaliente-";
            }else{
               "<br>Aprobado";
            }
         }
      }

      //A partir de dos numeros, si su suma es par, entonces MULTIPLICARLOS, si es impar, DIVIDIRLOS
      
      //a=12
      //b=8
      //suma=a+b=20
      //a*b=96
      $a1=12;
      $b1=8;
      $suma=$a1+$b1;
      if ($suma % 2 == 0) {
         echo "<br>es par";
         $multi=$a1*$b1;
         echo "la multiplicacion es $multi";
      }else{
         echo "<br>no es par";
      }

   ?>
</body>
</html>