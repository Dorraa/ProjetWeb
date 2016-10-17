<html>
<head>
<title>login</title>
<meta charset="utf-8">
<?php
 include ("db_tools.inc.php");
session_start();
$cxn=db_connect();
if(isset($_POST)&&(!empty($_POST["login"]))&&(!empty($_POST["password"])))
{
	$login=$_POST["login"];
	$password=$_POST["password"];
	
}
$sql="select login,password from user where login='".addslashes($login)."' and password='".addslashes($password)."' limit 1";
$req=mysql_query($sql);

if(mysql_num_rows($req)==1)
{
$data=mysql_fetch_array($req,1);
$_SESSION["login"]=$data["login"];
header("location: Accueil.php");

}
else{
	
	$_SESSION["error"]="login ou mot de passe incorrect";
	header("location:test2.php");
}

?>
</head>
<body>
</body>
</html>