<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <?php
session_start();
$_SESSION["champ"]="3";

?>

 <script language="javascript">
 function submitForm(action,i)
    {   
		document.formulaire.c.value=i;
		document.formulaire.method="POST";
        document.formulaire.action = action;
        document.formulaire.submit();
    }
	
		function active(i) {
    var x;
    if (confirm("voulez vous supprimer!") == true) {
       submitForm('gererclient.php',i);
    } else {
		return false
        
    }
	}
 
 
 
 
 </script>
<?php  
$con=mysql_connect("localhost","root","");
mysql_select_db("gestionclients",$con); 
$requete = "SELECT * FROM client";
$id_resultat = mysql_query($requete, $con) or die ("La requete est invalide : ".$requete."<br>"); 
$req=mysql_query($requete);
$nb_champs =mysql_num_rows($req);  
$i=0;
 //recuperation des informations de chaque colonnes de la table CLIENT 
?>
		<title>Liste des clients</title>
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
							<h1 id="logo"><a href="#">Liste Des Clients</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									
									<li><a href="logout.php">Deconnexion</a></li>
									<li class="break"><a href="Accueil.php">Accueil</a></li>
								</ul>
							</nav>

					</div>

					<!-- Hero -->
						<section id="hero" class="container">
							<form method="post" name="formulaire" action="gererclient.php">
								<h3>Liste Des <span>Clients</span></h3>
								<?php
if(isset($_SESSION["success"]))
{
	echo $_SESSION["success"];
}

 ?>
								<?php 
									 if ($_SESSION["role"]=="admin")
                                     {echo '<input type="image" src="ajouter-en-plus-icone-7956-16.png" onclick="submitForm(\'ajoutclient.php\')" width="48" height="48">';}
									 ?>
								
                             <table>
                                  <thead>
                                     <th>Id:</th>
                                     <th>Nom :</th>
                                     <th>Prenom:</th>
                                     <th>Adresse:</th>
                                     <th>Email: </th>
                                     <th>Tel:</th>
									 <?php 
									 if ($_SESSION["role"]=="admin")
                                     {echo "<th> modifier:</th> <th> supprimer:</th>";}
									 ?>
                                 </thead>
 <?php
while ($donnees=mysql_fetch_array($req,$i))
{
?>

  
  <tr>
    <td><?php echo $donnees['idclient']; ?></td>
     <td><?php echo $donnees['nom']; ?></td><td><?php echo $donnees['prenom']; ?> </td>
    <td><?php echo $donnees['adresse']; ?></td> <td><?php echo $donnees['email']; ?></td>
    <td><?php echo $donnees['tel']; ?></td>
	<?php 
									 if ($_SESSION["role"]=="admin")
										 
                                   {     $j=$donnees['idclient'];
										 echo "<td><input type=\"image\" src=\"moin-edit.png\" onclick=\"submitForm('modifierclient.php','" . $donnees['idclient'] . "') \" width=\"48\" height=\"48\"></td><td><input type=\"image\" src=\"icon_del.gif\" onclick=\"return active('" . $donnees['idclient'] . "') \" width=\"48\" height=\"48\"></td>";
								   }
									 ?>
									 
	
	
  </tr>
  
 




<?php


}



?>

                                      </table>	
									  <input type="hidden" name="c" value="">
                                     </form>
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