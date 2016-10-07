<?php

/*
Utilice while() para imprimir una tabla de equivalencias de temperaturas en grados Fahrenheit y Celsius desde -50 grados F 
a 50 grados F en incrementos de 5 grados. En la escala de temperatura Fahrenheit, el agua se congela a 32 grados e hierve a
212 grados. En la escala Celsius, el agua se congela a o grados e hierve a 100 grados. Por lo tanto, para convertir Fahrenheit
a Celsius, resta 32 a la temperatura, lo multiplica por 5, y divide entre 9. Para convertir de Celsius a Fahrenheit,
multiplica por 9, divide entre 5 y luego añade 32.
*/

$cel = 0;
$fah = -50;

//tabla de equivalencias

while ($fah<=50){
	$cel = (($fah - 32)*5)/9;
	echo $fah.' grados Fahrenheit equivalen a '.number_format($cel,2).' grados Celsius<br>';
	$fah +=5;
}

print '<br>De Celsius a Fahrenheit<br>';

$cel = -50;
$fah = 0;
while ($cel<=50){
	$fah = (($cel*9)/5)+32;
	echo $cel.' grados Celsius equivalen a '.$fah.' grados Fahrenheit<br>';
	$cel +=5;
}

print '<br>Ejercicio 2<br>';
//Haz lo mismo pero utilizando for
for($fah=-50;$fah<=50;$fah+=5){
	$cel = (($fah - 32)*5)/9;
	echo $fah.' grados Fahrenheit equivalen a '.number_format($cel,2).' grados Celsius<br>';
}

print '<br>De Celsius a Fahrenheit<br>';

for ($cel=-50;$cel<=50;$cel+=5){
	$fah = (($cel*9)/5)+32;
	echo $cel.' grados Celsius equivalen a '.$fah.' grados Fahrenheit<br>';
}

?>