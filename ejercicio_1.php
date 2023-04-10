<?php
$nombre = ["EVER",
"LUZ",
"MARTIN",
"JHESSICA",
"JUAN PAUL",
"RODRIGO",
"JUAN RONALDO",
"CLAUDIA MARISOL",
"BORIS",
"YOLA",
"ROSSE MARY",
];
//Muestra elemento del vector
echo $nombre[7]."<br>";
//Muestra la posicion del elemento del vector
 $clave = array_search("CLAUDIA MARISOL",$nombre);
 echo $clave;
 //Contar la cantidad de elementos del vector
   echo "<br>La cantidad de elementos es: ".count($nombre);

?>

