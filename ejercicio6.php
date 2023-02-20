<?php
 // agregar y eliminar un avlor a un aareglo

 $frutas = array("manzanas", "banana", "fresas");
 array_push($frutas,"coco", "mango","melon");

 $canasta = array_search("banana", $frutas );

 array_splice($frutas, $canasta, 1);

 foreach($frutas as  $fruta){
    echo $fruta ." ";
 }

?>