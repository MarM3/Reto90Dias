<?php

/*
Según la oficina del censo de EE.UU, las 10 ciudades americanas más grandes (en población) en el año 2000
fueron las siguientes:
New York, NY (8,008,278 personas)
Los Ángeles, CA (3,694,820)
Chicago, IL (2,896,016)
Houston, TX (1,953,631)
Philadelphia, PA (1,517,550)
Phoenix, AZ (1,321,045)
San Diego, CA (1,223,400)
Dallas, TX (1,188,580)
San Antonio, TX (1,144,646)
Detroit, MI (951,270)
Defina un array (o arrays) que contengan esta información sobre lugares y población. Imprima una tabla de
información de lugares y población que incluya la población total en las 10 ciudades.
*/

$poblacion = array('New York' => array('NY' => 8008278),
					'Los Ángeles' => array('CA' => 3694820),
					'Chicago' => array('IL' => 2896016),
					'Houston' => array('TX' => 1953631),
					'Philadelphia' => array('PA' => 1517550),
					'Phoenix' => array('AZ' => 1321045),
					'San Diego' => array('CA' => 1223400),
					'Dallas' => array('TX' => 1188580),
					'San Antonio' => array('TX' => 1144646),
					'Detroit' => array('MI' => 951270) );

foreach ($poblacion as $lugar => $lugares_poblacion) {
	# code...
	foreach ($lugares_poblacion as $estado => $ciudadanos) {
		print 'En '.$lugar.' de '.$estado.' hay '.$ciudadanos.' habitantes.<br>';
	}
}

echo '<table><tr><th>Ciudad</th><th>Estado</th><th>Poblaci&oacute;n</th></tr>';
//asort($poblacion);
$total = 0;

print '<br>Con población total<br>';
foreach ($poblacion as $lugar => $lugares_poblacion){
	# code...
	foreach ($lugares_poblacion as $estado => $ciudadanos) {
		# code...
		echo '<tr><td>'.$lugar.'</td><td>'.$estado.'</td><td>'.$ciudadanos.'</td></tr>';
		$total = $total + $ciudadanos;
	}
}
echo '<tr><td>Total</td><td></td><td>'.$total.'</td></tr>';
echo '</table>';

$total_CA = 0;
$total_PA = 0;
$total_MI = 0;
$total_IL = 0;
$total_NY = 0;
$total_TX = 0;
$total_AZ = 0;

print '<br>Totales por Estado<br>';
echo '<table><tr><th>Ciudad</th><th>Estado</th><th>Poblaci&oacute;n</th></tr>';

foreach ($poblacion as $lugar => $lugares_poblacion){
	# code...
	foreach ($lugares_poblacion as $estado => $ciudadanos) {
		# code...
		echo '<tr><td>'.$lugar.'</td><td>'.$estado.'</td><td>'.$ciudadanos.'</td></tr>';
		$total = $total + $ciudadanos;

		//$que_estado = $estado;
		if ($estado == 'CA'){
			//do {
			 	# code...
			 	$total_CA = $total_CA + $ciudadanos;
			 //} while ($estado == 'CA');	
		}
		if ($estado == 'MI'){
			//do {
			 	# code...
			 	$total_MI = $total_MI + $ciudadanos;
			 //} while ($estado == 'CA');	
		}
		if ($estado == 'TX'){
			//do {
			 	# code...
			 	$total_TX = $total_TX + $ciudadanos;
			 //} while ($estado == 'CA');	
		}
		if ($estado == 'NY'){
			//do {
			 	# code...
			 	$total_NY = $total_NY + $ciudadanos;
			 //} while ($estado == 'CA');	
		}
		if ($estado == 'PA'){
			//do {
			 	# code...
			 	$total_PA = $total_PA + $ciudadanos;
			 //} while ($estado == 'CA');	
		}	
		if ($estado == 'AZ'){
			//do {
			 	# code...
			 	$total_AZ = $total_AZ + $ciudadanos;
			 //} while ($estado == 'CA');	
		}
		if ($estado == 'IL'){
			//do {
			 	# code...
			 	$total_IL = $total_IL + $ciudadanos;
			 //} while ($estado == 'CA');	
		}

	}

}
echo '<tr><td>--</td><td>--</td><td>--</td></tr>';
echo '<tr><td>Total</td><td>CA</td><td>'.$total_CA.'</td></tr>';
echo '<tr><td>Total</td><td>PA</td><td>'.$total_PA.'</td></tr>';
echo '<tr><td>Total</td><td>AZ</td><td>'.$total_AZ.'</td></tr>';
echo '<tr><td>Total</td><td>NY</td><td>'.$total_NY.'</td></tr>';
echo '<tr><td>Total</td><td>TX</td><td>'.$total_TX.'</td></tr>';
echo '<tr><td>Total</td><td>MI</td><td>'.$total_MI.'</td></tr>';
echo '<tr><td>Total</td><td>IL</td><td>'.$total_IL.'</td></tr>';
echo '<tr><td>--</td><td>--</td><td>--</td></tr>';
echo '<tr><td>Total</td><td></td><td>'.$total.'</td></tr>';
echo '</table>';

print '<br>Ejercicio 2<br>';

/*
Modifique su solucion al ejercicio anterior para que las filas en la tabla resusltante esten ordenadas
por poblacion. Luego modifique su solucion para que las filas esten ordenadas por nombre de ciudad.
*/
echo '<table><tr><th>Ciudad</th><th>Estado</th><th>Poblaci&oacute;n</th></tr>';

sort($poblacion);

foreach ($poblacion as $lugar => $lugares_poblacion){
	# code...
	foreach ($lugares_poblacion as $estado => $ciudadanos) {
		# code...
		echo '<tr><td>'.$lugar.'</td><td>'.$estado.'</td><td>'.$ciudadanos.'</td></tr>';
	}
}

echo '</table>';

echo '<table><tr><th>Ciudad</th><th>Estado</th><th>Poblaci&oacute;n</th></tr>';
asort($poblacion);

foreach ($poblacion as $lugar => $lugares_poblacion){
	# code...
	foreach ($lugares_poblacion as $estado => $ciudadanos) {
		# code...
		echo '<tr><td>'.$lugar.'</td><td>'.$estado.'</td><td>'.$ciudadanos.'</td></tr>';
	}
}
echo '</table>';



?>