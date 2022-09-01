<?php
//PROGRAMA Conversion 
//Conversion de segundos a horas y  minutos
  // ENTERO hora,min,seg, aux, aux2
  echo "Ingrese cantidad en segundos:";
  $seg = trim(fgets(STDIN));
  $min = (int) ($seg / 60);
  $aux = $seg - 60 * $min;
  $hora = (int) ($min / 60);
  $aux2 = $min - 60* $hora;
echo $hora. " hora/s " .$aux2. " minutos ". $aux.  " segundos ";
