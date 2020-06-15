<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
		<meta name="robots" content="none">
		<title>Login</title>
	</head>

	<body bgcolor="#FFFFFF">
		<h1>Log in</h1>
		<hr>
		<p>Le nom ou le mot de passe que vous avez donné; n'est pas dans la base de donnée. <br> SVP, enregistrez-vous ou essayer encore.</p>

		<form method="post" action="logcheck.php">
			<p> Login : <input type="text" name="login" value="" placeholder="Identifiant"></p>
			<p><input type="submit" name="logcheck" value="Entrer"></p>
		</form>

	</body>
</html>
