<?php
//PROGRAMA IntercambiarValores

//Leo 2 variables entera e intercambio sus valores, muestro por pantalla 

//int a,b,aux
echo "Ingrese un numero entero para guardar en la primera variable \n";
$a = trim(fgets(STDIN));
echo "Ingrese un numero entero para guardar en la segunda variable \n";
$b= trim(fgets(STDIN)); 
$aux = $a;
$a = $b;
$b = $aux;
echo "Los valores intercambiados de a y b son: a) ".$a." b) ".$b;

//FIN PROGRAMA