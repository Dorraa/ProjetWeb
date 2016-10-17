<! DOCTYPE HTML>
<html>
	<head lang="en" class="no-js">
		<meta charset="utf-8">
		<title>Connexion</title>
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="page-container">
			<h1>Login</h1>
			<form name="login" method="POST" action="login.php">
				<input type="text" name="username" class="username" placeholder="Username">
				<input type="password" name="password" class="password" placeholder="Password">
				<button type="submit"> Signe me in</button>
				<div class="error">
					<span>+</span>
				</div>
			</form>
			
		</div>

	</body>
</html>