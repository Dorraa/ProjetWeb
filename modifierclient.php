<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Modifier Client</title>
<?php
session_start();
$_SESSION["champ"]="2";
?>
<script language="javascript">
function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
function verif()
{
	var msg="";
    
	if(document.formulaire.nom.value=="")
	{
		msg+="nom non valide \n";
		document.formulaire.nom.style.backgroundColor = "red";
		
	}
	if(document.formulaire.prenom.value=="")
	{
		msg+="prenom non valide \n";
		document.formulaire.prenom.style.backgroundColor = "red";
	}
	if(document.formulaire.adresse.value=="" )
	{
		msg+="adresse non valide \n";
		document.formulaire.adresse.style.backgroundColor = "red";
	}
	if(document.formulaire.tel.value=="" || isNaN(document.formulaire.tel.value)==true)
	{
		msg+="telephone non valide \n";
		document.formulaire.tel.style.backgroundColor = "red";
	}
	if(document.formulaire.email.value=="" || validateEmail(document.formulaire.email.value)==false)
	{
		msg+="email non valide \n";
		document.formulaire.email.style.backgroundColor = "red";
	}
	
	if(msg!="")
	{
		alert(msg);
		return false;
		}
	return true;
		
		
		
		
}
</script>
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

		<form method="POST" name="formulaire" action="gererclient.php">
			<link href='style2.css' rel='stylesheet' type='text/css'>
<h1> Modifier Un Client </h1> 
 <table cellspacing='0' align="center">
  <thead>
		<tr>
		
			<th>Id</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Adresse</th>
			<th>Email</th>
			<th>Tel</th>
			
		</tr>
	</thead>
	 
  <tr class="even">
    <td><?php echo $_POST["c"] ?><input type="hidden" name="id" value="<?php echo $_POST["c"] ?>" /></td>
     <td><input type="text" name="nom" value="" max-length="30" placeholder="nom"  /></td><td><input name="prenom" type="text" max-length="30" placeholder="prenom" /> </td>
    <td><input type="text" name="adresse" max-length="100" placeholder="adresse" /></td> <td><input type="text" name="email" max-length="100" placeholder="email" /></td> 
    <td><input type="text" name="tel" max-length="20" placeholder="tel" /></td>
	
	</tr>
	<tr class="even">
	<td></td>
	<td></td>
	<td><button type="submit" onclick="return verif() " >Valider</button></td>
	<td><button type="reset"  >Reset</button></td>
	<td></td>
	<td></td>
	
  </tr>
</table>

 
</form>
            </header>
							<p><strong>SKEL</strong> 
							<br /></p>
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

		