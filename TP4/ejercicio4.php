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
  

//PROGRAMA PRINCIPAL
    // float $vLado, $vPer, $vArea
    echo "Ingrese el valor del lado del triángulo equilátero: \n";
    $vLado = trim(fgets(STDIN));
    $vPer = calcularPerimetroTEquilatero($vLado);
    $vArea = calcularAreaTEquilatero($vLado);
    echo "Dado un triángulo equilatero de lado ".$vLado."cm, su perimetro es: ".$vPer."cm y su área es: ".$vArea."cm2";
// FIN PROGRAMA
