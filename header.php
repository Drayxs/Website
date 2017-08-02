<!DOCTYPE html>

<html>

<script type = 'application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "person",
  "name": "Gary Ng",
  "jobTitle": "Game Programmer and UX Designer",
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
<meta name = "description" content = "Online portfolio for Gary Ng, a game programmer and UX designer.">
<meta name = "author" content = "Gary Ng">
<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

<?php include "includes.php"; ?>	

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
		echo "Game Programmer and UX Designer";
	
	echo "</title>";
?>

<body>		
	<div class = "headerAndFooter">
		<a href = "/index.php" style = "color: inherit; text-decoration: inherit;"><h1>GARY NG</h1></a>
		<?php include "nav.php"; ?>		
		<hr>
	</div>