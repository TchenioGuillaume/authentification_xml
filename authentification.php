<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Authentification</title>
  </head>

  <body>
    <h3><u> Créer un compte</u></h3>
    <p>Entrer un nom et un mot de passe dans les champs ci-dessous et cliquer sur le bouton "Enregistrer". </p>
    <form method="post" action="register.php">
      <p> Login: <input type="text" name="login" value="" placeholder="Identifiant"></p>
      <p> Mot de passe: <input type="password" name="password" value="" placeholder="Mot de passe"></p>
      <p> <input type="submit" name="regcheck" value="Enregistrer"></p>
    </form>
    <br>
    <h3><u> Authentifiez vous</u></h3>
    <p>Entrer le nom que vous avez précédemment enregistré: </p>
    <form method="post" action="logcheck.php">
      <p> Login: <input type="text" name="login" value="" placeholder="Identifiant"></p>
      <p> <input type="submit" name="logcheck" value="Vérifier"></p>
    </form>
  </body>
</html>
