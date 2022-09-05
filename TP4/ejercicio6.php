<?php
/*
 * Punto 6: 
 * a) Calcular superficie Circulo.
 * b) Calcular superficie Corona Circular.
 */


 //6A
 /**
  * Función que calcula la superficie de un círculo.
  * @param int $radio Radio del círculo.
  * @return float Superficie del círculo.
  */
 function calcularSuperficieCirculo($radio){
    // float $salida
    $salida = M_PI * pow($radio, 2);
    return $salida;
 }


  //6B
  /**
   * Función que calcula la superficie de una corona circular.
   * @param int $radioMayor Radio mayor de la corona.
   * @param int $radioMenor Radio menor de la corona.
   * @return float Superficie de la corona.
   */
  function calcularSuperficieCoronaCircular($radioMayor, $radioMenor){
    //float salida, aMayor, aMenor
    $aMayor = calcularSuperficieCirculo($radioMayor);
    $aMenor = calcularSuperficieCirculo($radioMenor);
    $salida = $aMayor - $aMenor;
    return $salida;
  }
  



  //6C 
  //PROGRAMA PRINCIPAL
    // Muestra la superficie de una corona circular
    // int $radioMay,$radioMen, $supCorona
    echo "Ingrese el valor del radio mayor: \n";
    $radioMay = trim(fgets(STDIN));
    echo "Ingrese el valor del radio menor : \n";
    $radioMen = trim(fgets(STDIN));
    $supCorona = calcularSuperficieCoronaCircular($radioMay, $radioMen);
    echo "El valor de la superficie de la corona circular es".$supCorona."cm2";
  //FIN PROGRAMA



  //6D
  echo "\n Ejemplos predefinidos: \n";
  //Ejemplo1
  echo "Ejemplo 1: \n Radio mayor: 5cm \n Radio menor: 3cm \n Superficie: ".calcularSuperficieCoronaCircular(5, 3)."cm2 \n";
 
  //Ejemplo2
  echo "Ejemplo 2: \n Radio mayor: 10cm \n Radio menor: 5cm \n Superficie: ".calcularSuperficieCoronaCircular(10, 5)."cm2 \n";
  