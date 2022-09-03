<?php

/** Triangulos Equilateros - Ejercitación. **/

/**
 * Función que calcula el perimetro de un triangulo equilatero
 * @param int $lado Lado del triángulo.
 * @return int Perimetro del triángulo.
 */
function calcularPerimetroTEquilatero($lado){
    return $lado * 3;
}

/**
 * Función que calcula la altura de un triangulo equilatero
 * @param int $lado Lado del triángulo.
 * @return float Altura del triángulo.
 */
function calcularAlturaTEquilatero($lado){
    return sqrt(pow($lado, 2) - pow($lado/2, 2));
}


 /**
  * Función que calcula el área de un triángulo equilátero.
  * @param int $lado Lado del triángulo.
  * @return float Área del triángulo.
  */
function calcularAreaTEquilatero($lado){
    return ($lado * calcularAlturaTEquilatero($lado)) / 2;
}
  

//Programa principal
// int $lado
echo "Ingrese el lado en cm del triangulo equilatero: \n";
$lado = trim(fgets(STDIN));
echo "Dado un triángulo equilatero de lado ".$lado."cm, su perimetro es: ".calcularPerimetroTEquilatero($lado)."cm y su área es: ".calcularAreaTEquilatero($lado)."cm2";