<?php

/*Para una competencia de ciclismo se requiere calcular y mostrar la velocidad en m/seg del 1° y 2° puesto. El
usuario del programa proveerá información de: distancia en metros de la carrera y el tiempo en horas, minutos y
segundos de cada uno de los puestos. (modularice convenientemente: la transformación de horas, min y seg a
segundos; y el cálculo de la velocidad.)
*/

/**
 * Función que calcula la velocidad en m/seg de un ciclista.
 * @param int $distancia Distancia recorrida en metros.
 * @param int $tiempo Tiempo en segundos.
 * @return float Velocidad en m/seg.
 */
function calcularVelocidad($distancia, $tiempo){
    return $distancia / $tiempo;
}

/**
 * Función que transforma horas, minutos y segundos a segundos.
 * @param int $horas Horas.
 * @param int $minutos Minutos.
 * @param int $segundos Segundos.
 * @return int Tiempo en segundos.
 */ 
function transformarASegundos($horas, $minutos, $segundos){
    return ($horas * 3600) + ($minutos * 60) + $segundos;
}

//PROGRAMA Principal
  // int $velocidadPrimerPuesto, $velocidadSegundoPuesto, $distancia, $horas, $minutos, $segundos
  echo "Ingrese la distancia recorrida en metros: \n";
  $distancia = trim(fgets(STDIN));
  echo "Ingrese la cantidad de horas que tardo el primer puesto: \n";
  $horas = trim(fgets(STDIN));
  echo "Ingrese la cantidad de minutos que tardo el primer puesto: \n";
  $minutos = trim(fgets(STDIN));
  echo "Ingrese la cantidad de segundos que tardo el primer puesto: \n";
  $segundos = trim(fgets(STDIN));
  $velocidadPrimerPuesto = calcularVelocidad($distancia, transformarASegundos($horas, $minutos, $segundos));
  echo "Ingrese la cantidad de horas que tardo el segundo puesto: \n";
  $horas = trim(fgets(STDIN));
  echo "Ingrese la cantidad de minutos que tardo el segundo puesto: \n";
  $minutos = trim(fgets(STDIN));
  echo "Ingrese la cantidad de segundos que tardo el segundo puesto: \n";
  $segundos = trim(fgets(STDIN));
  $velocidadSegundoPuesto = calcularVelocidad($distancia, transformarASegundos($horas, $minutos, $segundos));
  echo "La velocidad del primer puesto es: ".$velocidadPrimerPuesto."m/seg y la del segundo puesto es: ".$velocidadSegundoPuesto."m/seg"; 
 
//FIN PROGRAMA 


