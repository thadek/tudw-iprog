<?php

//PROGRAMA usarFunciones
// int $m,$n,$resultado

//Solicito valores de M y N
echo "Ingrese el valor de M: ";
$m = trim(fgets(STDIN));
echo "Ingrese el valor de N: ";
$n = trim(fgets(STDIN));
//Opero
$resultado = pow($m,$n) + sqrt(abs($m));
//Muestro resultado
echo "El resultado es: ". $resultado;