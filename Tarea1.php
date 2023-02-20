<?php

$trabajadores = array(
    array('nombre'=> 'marcos', 'salario' => 800, 'tiempo_del_servicio' => 3),
    array('nombre'=> 'Alejandro', 'salario' => 1000, 'tiempo_del_servicio'=> 7),
    array('nombre'=> 'oscar', 'salario' => 1200, 'tiempo_del_servicio'=> 10),
    array('nombre'=> 'Diego', 'salario' => 900, 'tiempo_del_servicio'=> 20),
    array('nombre'=> 'Alex', 'salario' => 1300, 'tiempo_del_servicio'=>3),
    array('nombre'=> 'Estefany', 'salario' => 400, 'tiempo_del_servicio'=> 5),
    array('nombre'=> 'patricia', 'salario' => 500, 'tiempo_del_servicio'=> 6),
    array('nombre'=> 'jorge', 'salario' => 700, 'tiempo_del_servicio'=> 15),
    array('nombre'=> 'Alisson', 'salario' => 1800, 'tiempo_del_servicio'=> 2),
    array('nombre'=> 'gabriela', 'salario' => 1900, 'tiempo_del_servicio'=> 25),
);

foreach ($trabajadores as $trabajador){
    $aumento =0;
    if ($trabajador['tiempo_del_servicio'] >= 1 && $trabajador['tiempo_del_servicio'] < 5){
        $aumento = 25;
    }elseif ($trabajador['tiempo_del_servicio'] >= 5 && $trabajador['tiempo_del_servicio'] < 10){
        $aumento =50;
    }elseif ($trabajador['tiempo_del_servicio'] >= 10 && $trabajador['tiempo_del_servicio'] < 20){
        $aumento =100;
    }elseif ($trabajador['tiempo_del_servicio'] >= 20){
        $aumento =150;
    }
    $nuevo_salario = $trabajador['salario'] + $aumento;

    //imprimir

    echo "nombre: " . $trabajador['nombre'] . "\n";
    echo "salario actual: " . $trabajador['salario'] . "\n";
    echo "Aumento: " . $aumento . "\n";
    echo "nuevo salario: " . $nuevo_salario .  "\n";  
    echo "____________________________________" . "\n";

}

?>