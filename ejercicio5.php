<?php

//crea un array que almacene los siguientes valores
//100, 8, 5, 20, 15,63 ,6 ,9 ,2 ,1 ,5 ,3 ,4 ,7 ,9 ,102 ,88 ,64 y los ordena de menor a mayor.


$numeros = array(100, 8, 5, 20, 15,63 ,6 ,9 ,2 ,1 ,5 ,3 ,4 ,7 ,9 ,102 ,88 ,64 );
sort($numeros);
foreach($numeros as $numero){
    echo $numero . " ";
}

?>