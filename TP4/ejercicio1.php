<?php 
/* Ejercicio de dibujar un campo de futbol con módulos */ 

/**
 * Funcion que retorna un string con el cartel de Linea de Banda
 * @param void - Esta funcion no recibe parámetros.
 * @return string - Retorna un string con el cartel de Linea de Banda y un salto de linea.
 *
**/
function generarLineaBanda(){ 
  return "+-----------------+-----------------+\n";
}

/**
 * Funcion que retorna un string con el cartel Campo
 * @param void - Esta funcion no recibe parámetros.
 * @return string - Retorna un string con el cartel Campo y un salto de linea.
**/
function generarCampo(){
 return "|                 |                 |\n";
}

/**
 * Funcion que retorna un string con la linea Media
 * @param void - Esta funcion no recibe parámetros.
 * @return string - Retorna un string con la linea Media y un salto de linea.
**/
function generarLineaMedia(){
  return "|    |            |            |    |\n";
}

/**
 * Funcion que retorna un string con el los caños
 * @param void - Esta funcion no recibe parámetros.
 * @return string - Retorna un string con los caños y un salto de linea.
**/
function generarCanios(){
  return "+----+            |            +----+\n";
}


/**
 * Funcion generadora del dibujo 
 * Esta funcion llama a las demás 
 * funciones creando un string que concatena todo lo anterior y lo retorna.
 * @param void - Esta funcion no recibe parámetros.
 * @return string - Esta funcion retorna el dibujo completo.
 **/
function generarDibujo(){
  //String $dibujo 
  //Linea de banda
  $dibujo = generarLineaBanda();
  //2x campo
  $dibujo .= generarCampo();
  $dibujo .= generarCampo();
  //Caños
  $dibujo .= generarCanios();
  //4x Linea Media
  $dibujo .= generarLineaMedia();
  $dibujo .= generarLineaMedia();
  $dibujo .= generarLineaMedia();
  $dibujo .= generarLineaMedia();
  //Caños 
  $dibujo .= generarCanios();
  //2x campo
  $dibujo .= generarCampo();
  $dibujo .= generarCampo();
  //Linea de banda
  $dibujo .= generarLineaBanda();
  return $dibujo;
}

//Llamada a la funcion generadora del dibujo, y muestro por pantalla el retorno.
echo generarDibujo();
