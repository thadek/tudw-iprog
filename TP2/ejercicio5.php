<?php

//PROGRAMA CalcularDistancia
//Programa que calcula la distancia entre A y B
//float a,b,hip
echo "Ingrese el valor de la distancia a \n";
$a = trim(fgets(STDIN));
echo "Ingrese el valor de la distancia b \n";
$b = trim(fgets(STDIN));
$hip = sqrt(($a*$a) + ($b*$b));
echo "La distancia a recorrer si se fuera directamente seria ".  $hip; 