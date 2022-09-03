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
function generarCanchaTenis(){
  //String $dibujo 
  //Linea de banda
  $dibujo = generarLineaBanda();
  //Campo
  $dibujo .= generarCampo();
  //Linea Banda
  $dibujo .= generarLineaBanda();
  // 3x  Linea media
  $dibujo .= generarLineaMedia();
  $dibujo .= generarLineaMedia();
  $dibujo .= generarLineaMedia();
  //Linea de banda
  $dibujo .= generarLineaBanda();
  // 3x  Linea media
  $dibujo .= generarLineaMedia();
  $dibujo .= generarLineaMedia();
  $dibujo .= generarLineaMedia();
  //Linea de banda
  $dibujo .= generarLineaBanda();
  //campo
  $dibujo .= generarCampo();
  //Linea de banda
  $dibujo .= generarLineaBanda();
  return $dibujo;
}

//PROGRAMA PRINCIPAL
echo "Cancha de Tenis\n";
echo generarCanchaTenis();