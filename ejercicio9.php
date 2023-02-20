<?php

$intentosRandom = rand(1,20);
do{
$numeroUsuario =readline("ingrese un numero del 1 y 20");
$intentos ++;
if($numeroUsuario> $numeroRandom){
    echo"su numero es mayor que el numero secreto";
}else if($numeroUsuario < $numeroRandom){
    echo"su numero es menor que el numero secreto";
}else{
    echo"ha encontrado el numero secreto"."su numero de intentos fue ". $intentos;
}

}while($numeroUsuario!= $numeroRandom);

?>