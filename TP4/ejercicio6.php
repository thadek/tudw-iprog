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
     return M_PI * pow($radio, 2);
 }


  //6B
  /**
   * Función que calcula la superficie de una corona circular.
   * @param int $radioMayor Radio mayor de la corona.
   * @param int $radioMenor Radio menor de la corona.
   * @return float Superficie de la corona.
   */
  function calcularSuperficieCoronaCircular($radioMayor, $radioMenor){
      return calcularSuperficieCirculo($radioMayor) - calcularSuperficieCirculo($radioMenor);
  }
  



  //6C 
  //Programa principal
  // int $radio1
  echo "Ingrese el radio mayor de la corona circular: \n";
  $radioMay = trim(fgets(STDIN));
  echo "Ingrese el radio menor de la corona circular: \n";
  $radioMen = trim(fgets(STDIN));
  echo "Dada una corona circular de radio mayor ".$radioMay."cm y radio menor ".$radioMen."cm, su superficie es: ".calcularSuperficieCoronaCircular($radioMay, $radioMen)."cm2";



  //6D
  echo "\n Ejemplos predefinidos: \n";
  //Ejemplo1
  echo "Ejemplo 1: \n Radio mayor: 5cm \n Radio menor: 3cm \n Superficie: ".calcularSuperficieCoronaCircular(5, 3)."cm2 \n";
 
  //Ejemplo2
  echo "Ejemplo 2: \n Radio mayor: 10cm \n Radio menor: 5cm \n Superficie: ".calcularSuperficieCoronaCircular(10, 5)."cm2 \n";
  