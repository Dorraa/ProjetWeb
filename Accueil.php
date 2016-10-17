<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Accueil</title>
        <?php
include("db_tools.inc.php");
session_start();
$cxn=db_connect();
if(isset($_SESSION["login"]))
{
	$login=$_SESSION["login"];
	
	
	
}
$sql="select * from user where login='".addslashes($login)."' limit 1";
$req=mysql_query($sql);
if(mysql_num_rows($req)==1)
{$data=mysql_fetch_array($req,1);
$role=$data["role"];
$_SESSION["role"]=$role;

$nom=$data["nom"];
}
?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="#">Acceuil</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									
									<li><a href="logout.php">Deconnexion</a></li>
									<li class="break"><a href="listeclients.php">Liste Des Clients</a></li>
								</ul>
							</nav>

					</div>

					<!-- Hero -->
						<section id="hero" class="container">
							<header>
								<form method="post" action="gererclient.php">
<h2><?php echo"Bonjour $nom !"?></h2>
</form> 
							</header>
							<p>Ce Site Vous Permet De Consulter Les Clients De Notre Societe <strong>SKEL</strong> .
							<br />Merci De Nous Rejoindre.</p>
						</section>

				</div>

			<!-- Features 1 -->
				

			<!-- Promo -->
				

			<!-- Features 2 -->
				

			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						
							
						
						
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; Untitled. All rights reserved.</li><li>Design:  BOUZIDI Dorra</li>
						</ul>
					</div>
				</div>

		</div>

		

	</body>
</html>