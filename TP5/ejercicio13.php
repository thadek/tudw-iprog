<?php
// Este módulo verifica las condiciones necesarias para ser seleccionado
function seleccionEmpleado ($edad, $sexo, $secCom) {
   
    if ($sexo == "masculino" && $edad <25 && $secCom == true){
        
 
        $salida = true;
 
    } elseif ($sexo == "femenino" && ($edad >= 30 && $edad <= 40) && $secCom == true) {
        $salida = true;
   
    } else {
 
        $salida = false;
 
    }
 
    return $salida;
 
}
 
//PROGRAMA PersonalEmpresa
//(*Pide los datos del posible personal y entrega si es aceptado o no*)
//ENTERO edad
//STRING genero, secuComp
//BOOLEAN secundarioCompleto, verificacion
echo "Ingrese el genero del interesado: \n";
$genero = trim(fgets(STDIN));
echo "Ingrese la edad: \n";
$edad = trim(fgets(STDIN));
echo "¿Ha terminado el secundario? si/no \n";
$secuComp = trim(fgets(STDIN));
 
if($secuComp == "si"){
 
    $secundarioCompleto = true;
 
}elseif ($secuComp == "no"){
 
    $secundarioCompleto = false;
 
}else{
    echo "Datos no valido";
}
 
$verificacion = seleccionEmpleado($edad,$genero,$secundarioCompleto);
 
if ($verificacion){
 
    echo "Seleccionado.";
 
}else{
 
    echo "No cumple los requisitos.";
}
