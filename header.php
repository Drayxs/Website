<!DOCTYPE html>

<html>

<script type = 'application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "person",
  "name": "Gary Ng",
  "jobTitle": "Game Programmer and Interaction Designer",
  "url": "http://www.garykcng.com/",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Daejeon",
    "addressCountry": "South Korea"
  },
  "email": "ng.gary.kc@gmail.com",
  "telephone": "+82 10 2750 1337",
  "birthDate": "1992-09-03"
}
 </script>

<meta charset = "UTF-8">
<meta name = "description" content = "Online portfolio for Gary Ng, a game programmer and interaction designer.">
<meta name = "author" content = "Gary Ng">
<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

<?php include "includes.php"; ?>	

<!--<script src = "/lib/jquery-2.2.0.min.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<script src = "/js/core.js"></script>
<script src = "/js/youtube.js"></script>
		
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>	
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">	

<link rel = "stylesheet" href = "/css/core.css"> 
<link rel = "stylesheet" href = "/css/youtube.css"> -->

<?php 
	$lPageName = basename($_SERVER['PHP_SELF'], '.php'); 
	
	echo "<title>Gary Ng | ";
	
	if ($lPageName == "games")
		echo "Games";
	else if ($lPageName == "other")
		echo "Other Projects and Research";
	else if ($lPageName == "resume")
		echo "Resume and Work Experience";
	else if ($lPageName == "contact")
		echo "Contact Information";
	else
		echo "Game Programmer and Interaction Designer";
	
	echo "</title>";
?>

<body>		
	<div class = "headerAndFooter">
		<h1>GARY NG</h1>	
		<?php include "nav.php"; ?>		
		<hr>
	</div>