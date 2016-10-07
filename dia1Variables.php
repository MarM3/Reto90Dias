<?php

/*
Escriba en un programa PHP que establezca la variable $first_name para su nombre y $last_name para su apellido. Imprima una cadena
que cotenga su nombre y apellido separados por un espacio. Imprima también la longitud de dicha cadena.
*/

$first_name = 'Maria del Mar';
$last_name = 'Mazuelas';

$total = $first_name.' '.$last_name;

echo $total;
echo '<br>La candidad de caracteres que contiene la variable son ',strlen($total);

print "<br>Ejercicio 2<br>";

/*
Escriba un programa PHP que utilice el operador de incremento (++) y el operador de multiplicación combinado (*=) 
para imprimir los números de 1 a 5 y potencias de 2 desde 2 a 32;
*/

for ($incr=1;$incr<=5;$incr++){
	echo $incr;
}

print '<br><br>';

$potencias=2;
do{
	echo $potencias.'<br>';
	$potencias *= 2;
}while ($potencias<=32);

/*
Añada comentarios 
*/
?>