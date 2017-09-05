<?php 
    $vardas = "";


  # COOKIES

    //setcookie("username", "Ignas", time() + (60*60*24*7), "/");
	
   



   /*
    if(isset($_COOKIE["username"])) {
    	$vardas = $_COOKIE["username"];
    } else {
    	$vardas = "nežinomas";
    
    */
  // # SESSIONS



   session_start();


   //$_SESSION['username'] = "Antanas";

    if(isset($_SESSION["username"])){
    	$vardas = $_SESSION['username'];
    } else {
    	$vardas = "nezinomas";
    }

   
        
	?>














<!DOCTYPE html>
<html>
   <head>
	    <title>Temperatūra ir pojūtis</title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   </head>
   <body>
         <div class="container-fluid">
    	     <div class="row head">
	    	     <h1>Temperatūra ir pojūtis</h1>
    		
    	     </div>
    	     <div class="container">
    	         <H1>Cookies & Sessions </H1>
    	        <div class="row">
    	            <div class="col">
    	              Mano vardas yra <?= $vardas ?> .
    	    	
    	            </div>
    	    	
    	        </div>
    		
    	     </div>

   </body>
   
</html>