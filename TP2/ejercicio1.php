<?php
//PROGRAMA CalcularAumento

//Este programa calcula el aumento entre 2 sueldos y muestra por pantalla el porcentaje

// float sueldoInicial, sueldoDeseado, porcAumento

echo "Ingrese el sueldo inicial \n";
$sueldoInicial = trim(fgets(STDIN));
echo "Ingrese el sueldo deseado \n";
$sueldoDeseado = trim(fgets(STDIN));
$porcAumento = ($sueldoDeseado/$sueldoInicial)*100-100;
echo "\n El porcentaje de aumento entre ".$sueldoInicial, " y ". $sueldoDeseado." es ".$porcAumento. "%";

//FIN PROGRAMA