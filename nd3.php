<?php 
$start = microtime();

date_default_timezone_set('Europe/Vilnius');
function rezultatas($kazkos_parametras){
	if ($kazkos_parametras >= -20 && $kazkos_parametras < -10){
		return $kazkos_parametras . " resultatas" ;	
	}

	if (){
		return $kazkos_parametras . " resultatas 2" ;
	}
	
}

echo "<table>";
echo "<tr><td>Temperatura</td><td>Pojutis</td></tr>";
for ($i=-30; $i <=35 ; $i+=3) { 
	echo "<tr><td>" . $i . "</td><td>". rezultatas($i) ."</td></tr>";
}
echo "</table>";

	
// echo  microtime() - $start;
?>