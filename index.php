<?php
$var = "NodeSchool";

echo("<h1>prueba</h1>" . $var . "<br>");

$array = [1,2,3,4,5,6];

$objeto = [
	"nombre" => "pedro",
	"edad" => "15",
	5 //cuando no se define una clave, la clave asigna un indice desde 0 y lo continua segun se vayan omitiendo claves
];

$j = count($array);

for ($i=0; $i<$j; $i++) {
	echo $array[$i] . "<br>";
}

function show ($param) {
	foreach ($param as $element) {
		if (gettype($element)=="array") {
			show ($element);
		}
		else {
			echo $element . "<br>";
		}
		
			//consiste en hacer una funcion recursiva que se llame a si misma mientras encuentre en el interior de un array otro array
	}
}
show($objeto);
?>