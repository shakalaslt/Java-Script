<?php 
$start = microtime();

date_default_timezone_set('Europe/Vilnius');
function rezultatas($kazkos_parametras){
	if ($kazkos_parametras <= -20 ){
		return $kazkos_parametras . " labai salta" ;	
	}

	if ($kazkos_parametras <= +5 ){
		return $kazkos_parametras . " salta" ;
	}
	if ($kazkos_parametras <= +20 ){
		return $kazkos_parametras . " silta" ;
	}
	if ($kazkos_parametras <= +25 ){
		return $kazkos_parametras . " karsta" ;
	}
	if ($kazkos_parametras > +25 ){
		return $kazkos_parametras . " labai karsta" ;
	}
	
}

echo "<table>";
echo "<tr><td>Temperatura</td><td>Pojutis</td></tr>";
for ($i=-30; $i <=35 ; $i+=3) { 
	echo "<tr><td>" . $i . "</td><td>". rezultatas($i)."</td></tr>";
}
echo "</table>";

	
// echo  microtime() - $start;
?>