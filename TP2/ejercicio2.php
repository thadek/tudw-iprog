<?php
/*PROGRAMA CalcularDatos*/


//Este programa calcula en función de un radio ingresado: a) diámetro, perímetro y superficie de circunferencia con ese radio, b) volumen y superficie de esfera con ese radio.

// float radio, float diametro, float perimetro, float superficie, float volumen, float superficieEsfera
 $radio=0; 
 $diametroCirc=0; 
 $perimCirc=0;  
 $pi=M_PI; 
 $supCirc=0; 
 $supEsfera=0; 
 $volumenEsfera=0;

echo "Ingrese radio \n";
$radio = trim(fgets(STDIN));
//Calcular diametro, perimetro, superficie y circunferencia;
$diametroCirc = $radio*2;
$perimCirc = $diametroCirc*$pi;
$supCirc = $pi*($radio*$radio);

//Calcular volumen y superficie esfera
$supEsfera = ($radio*$radio)*4*$pi;
$volumenEsfera = ($radio*$radio*$radio*4*$pi)/3;
echo "El perimetro de una circunferencia de radio ".$radio." es ". $perimCirc ."\n".
 "El diametro de una cirfurencia de radio ".$radio." es ". $diametroCirc."\n".
 "La superficie de una circunferencia de radio ". $radio. " es ". $supCirc."\n".
 "La superficie de una esfera de radio ". $radio. " es ". $supEsfera."\n".
 "El volumen de una esfera de radio ".$radio ." es ". $volumenEsfera; 

 /*Fin programa */
