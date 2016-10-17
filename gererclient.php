<?php

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("gestionclients",$con);
if(isset($_SESSION["champ"]))
{
  if($_SESSION["champ"]=='1')
  {
	  if((isset($_POST))&&(!empty($_POST["id"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["adresse"]))&&(!empty($_POST["email"]))&&(!empty($_POST["tel"])))
	  {
		     $id=$_POST["id"];
		      $nom=$_POST["nom"];
		      $prenom=$_POST["prenom"];
			  $adresse=$_POST["adresse"];
			  $email=$_POST["email"];
			  $tel=$_POST["tel"];
			  
			  $sql = "INSERT INTO client (idclient, nom,prenom,adresse,email,tel)
                       VALUES ('$id', '$nom', '$prenom','$adresse','$email','$tel')";

              mysql_query($sql)or die("erreur");
	           $_SESSION["success"]="client ajouter avec success"; 
               mysql_close();
	           header("location:listeclients.php");
	
	 
	 }
				else{
					$_SESSION["error"]="erreur de champs";
					header("location:ajoutclient.php");
					
				}
  }
  
 else{
if($_SESSION["champ"]=='2')
  {
	  if((isset($_POST))&&(!empty($_POST["id"]))&&(!empty($_POST["nom"]))&&(!empty($_POST["prenom"]))&&(!empty($_POST["adresse"]))&&(!empty($_POST["email"]))&&(!empty($_POST["tel"])))
	  {
		     $id=$_POST["id"];
		      $nom=$_POST["nom"];
		      $prenom=$_POST["prenom"];
			  $adresse=$_POST["adresse"];
			  $email=$_POST["email"];
			  $tel=$_POST["tel"];
			  
			          $sql = "update client set
                      nom='$nom', prenom='$prenom',adresse='$adresse',email='$email',tel='$tel' where idclient='$id' ";

                      mysql_query($sql)or die("erreur");
	                  $_SESSION["success"]="client modifier avec success"; 
                      mysql_close();
	                  header("location:listeclients.php");
					  }
					  else{
						  $_SESSION["error"]="erreur de champs";
					       header("location:modifierclient.php");
						  
					  }
}
  }

if($_SESSION["champ"]=='3')
  {
	  if((isset($_POST))&&(!empty($_POST["c"])))
	  { 
		     
			 
			 $id=$_POST["c"];
			 
			  
			          $sql = "DELETE FROM client
                       where idclient='$id' ";

                      mysql_query($sql)or die("erreur");
	                  $_SESSION["success"]="client supprimer avec success"; 
                      mysql_close();
	                  header("location:listeclients.php");
			 }
			 else{
				 header("location:listeclients.php");
			 }
}
  }
 

  
  else{
	  echo"error";
  }


?>
<html>
<head>
<script language="javascript">
function click(e)
{
	e=true;
	
}

</script>
</head>
<body>
<form method="post" name="formulaire" action="gererclient.php">
<input type="hidden" name="ok" value="">
</form>
</body>
</html>