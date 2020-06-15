<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
		<title>Login ok</title>
		<meta name="robots" content="none">
	</head>

	<body bgcolor="#FFFFFF">
		<h1>Connexion réussi !</h1>

		<p>
			<script src="login.js" type="text/javascript"></script>
			<script language="JavaScript">
				document.write("Utilisateur <b>" + ulogin + "</b> trouvé dans la base de données.<br>");
				document.write("La base contient" + unumber "</b> + utilisateurs.</br>");
			</script>
		</p><br>

		<!-- <form action="authentification.php" method="post" target="_parent">
			<input type="submit" name="submit" value="Retour">
		</form> -->

	</body>
</html>
