<!doctype html>
<html lang="fr-FR">
<head>
	<!-- charset -->
	<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="google-site-verification" content="ZGqZdao7Tky_Geaxi72djh4y9rYdCuId19slrH6pZzg" />

		<meta http-equiv="content-type" name="description" content="Bonjour , je m'appelle Clara et depuis plusieurs années maintenant 
		je suis passionnée de photographie. Grâce à ce site je peux partager ma passion et mes créations avec vous qui visitez la galerie 
		! Je vous laisse découvrir toutes les photos avec leurs styles et ambiances différents.">

            
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="part/img/icon.png">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Upright" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500i" rel="stylesheet">

	<title>La Petite Photo</title>

		<!-- css. Compiler SASS -->

	<link rel='stylesheet' href='css/style.css'/>

	<!-- APPEL BOOTSTRAP --> 

	<link rel='stylesheet' href='css/bootstrap.min.css'/>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://exemple.com/exemple-framework.js"
  integrity="sha384-oqVuAfXRKap7fdgcCY5uykM6+R9GqQ8K/uxy9rx7HNQlGYl1kPzQho1wx4JwY8wC"
  crossorigin="anonymous">
</script>
	<!-- APPEL JS BOOTSTRAP -->

	<script type="text/javascript" src="part/js/bootstrap.min.js"></script>

</head>
<body>

<header>

<h1><a href="index.php">LA PETITE<br> PHOTO .C</a></h1>

<!-- MENU  MENU  MENU  MENU  MENU  MENU  MENU  MENU  MENU -->

<nav>
	<ul>
		<li><a href="portrait.php">Portraits</a></li>
		<li><a href="maternite.php">Maternité</a></li>
		<li><a href="paysage.php">Nature</a></li>
		<li><a href="about.php">À propos</a></li>
		
	</ul>
</nav>

<!-- EN DESSOUS DE 900 PX -->

<!-- MENU  MENU  MENU  MENU  MENU  MENU  MENU  MENU  MENU -->
		
<div class="container">
			<div class="three col">
				<div class="hamburger" id="hamburger-7">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
			</div>
</div>

<script type="">
    $(document).ready(function() {
        $(".hamburger").click(function() {
            $(this).toggleClass("is-active");
            $('.navigation').toggleClass('isOpen');
        });
    });

</script>

</header>

<div class="cache div-about">
		<nav class="menu-mobile">
			<ul class="ul-mobile">
				<li class="li-mobile"><a class="a-mobile" href="portrait.php">Portraits</a></li>
				<li class="li-mobile"><a class="a-mobile" href="maternite.php">Matérnité</a></li>
				<li class="li-mobile"><a class="a-mobile" href="paysage.php">Paysage</a></li>
				<li class="li-mobile"><a class="a-mobile" href="about.php">Á propos</a></li>
				
			</ul>
		</nav>
</div>

<script type="text/javascript">
$(document).ready(function() {
$(".container").click(function() {
	$(".cache").toggle("swing");
});
});
</script>




