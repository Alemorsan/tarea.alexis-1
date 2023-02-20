<?php
 //calculaer el promedio en un array

 $esyudiantes = array(
    array('nombre' => 'juan', 'grado' => '9', 'nota' => 8.0),
    array('nombre' => 'Alisson', 'grado' => '8', 'nota' => 7.5),
    array('nombre' => 'marta', 'grado' => '5', 'nota' => 9.0),
    array('nombre' => 'chona', 'grado' => '12', 'nota' => 10.0),
 );

 $aprobaron = 0;
 $repobaron = 0;
 $suma = 0;
 $promedio = 0;

 foreach($estudiantes as $estudiante){
    $suma += $estudiante['nota'];

    if($estudiante['nota'] >= 7.5){
        $aprobaron ++;
    }else{
        $repobaron ++;
    }
    
 }

 $promedio = $suma / count($estudiantes);

 echo "total de alumnos aprobado es : " . $aprobaron . "\n";
 echo "total de alumnos que reprobaron es : " . $repobaron . "\n";
 echo "el promedio de los estudiantes es : " . $promedio . "\n";
 echo "_____________________________________" . "\n";

?>