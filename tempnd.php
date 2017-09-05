<!DOCTYPE html>
<html>
   <head>
	    <title>Temperatūra ir pojutis</title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   </head>
   <body>
         <div class="container-fluid">
    	 <div class="row head">
	    	<h1>Temperatūra ir pojutis</h1>
    		
    	</div>

   </body>
   <?php 
       $start = microtime();

       date_default_timezone_set('Europe/Vilnius');
       function rezultatas($kazkos_parametras){
	      if ($kazkos_parametras <= -20 ){
		  return $kazkos_parametras . " labai salta" ;	
	}

	if ($kazkos_parametras <= +5 ){
		return $kazkos_parametras . " Šalta" ;
	}
	if ($kazkos_parametras <= +20 ){
		return $kazkos_parametras . " Šilta" ;
	}
	if ($kazkos_parametras <= +25 ){
		return $kazkos_parametras . " Karšta" ;
	}
	if ($kazkos_parametras > +25 ){
		return $kazkos_parametras . " Labai karšta" ;
	}
	
}

echo "<table class=table table-striped>";
echo "<tr><td>Temperatura (C)</td><td>Pojutis</td></tr>";
for ($i=-30; $i <=35 ; $i+=3) { 
	echo "<tr><td>" . $i . "</td><td>". rezultatas($i)."</td></tr>";
}
echo "</table>";

	

?>
</html>