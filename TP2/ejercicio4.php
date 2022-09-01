<?php

//PROGRAMA RestoDivision

//Calcula el resto de la division

// int a,b,resultado
echo "Ingrese el valor de a";
$a = trim(fgets(STDIN));
echo "Ingrese el valor de b";
$b = trim(fgets(STDIN));
$resultado = $a - $b * (int)($a/$b);
echo "El resultado es: ".$resultado;

//FIN PROGRAMA