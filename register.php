<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="robots" content="noarchive">
  </head>

  <body bgcolor="#FFFFFF">

    <?php

    /**
    Register.php
    */

      if (isset( $_POST ))
      $postArray = &$_POST ;
      else
      $postArray = &$HTTP_POST_VARS ;

      $ulogin = $postArray[login];
      $upass = $postArray[password];

      $fname="users.xml";

      $arr = file($fname);

      // Nous devons supprimer la fin du conteneur racine et les lignes vides.
      // Les dernières lignes s'affichent jusqu'à ce que </users> soit atteint.

      while(true)
      {
        $size = count($arr);
        if($size < 2)
        {
          echo "Fichier introuvable ou fichier vide...<br />";
          exit(0);
        }
        $ending = array_pop($arr);

        if( !(strpos($ending, "</users") === false) ) break;
      }

      // Si la base de données est trop volumineuse, elle est effacée.
      // Bien sûr, cela ne se fait pas dans la vraie application !

      //- - - - - - -  Supprimer cela dans la vraie application - - - - - -

      if(count($arr) > 12)
      {
        echo "Base de données effacée. Dans cette demo, elle doit rester petite...<br />";
        $arr = array(
          "<?xml version=\"1.0\" ?>\n",
          "<users>\n",
          "  <user login=\"reader\" password=\"1234\" />\n"
        );
      }

      //- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

      // recherche de cette connexion
      // analyse du tableau des entrées

      $already = false;

      foreach($arr as $user)
      {
        $user = trim($user);

        if(substr($user, 0, 12) == "<user login=")
        {
          $user = substr($user, 13);		// sauter prefix and quote
          $x = strpos($user, "\"");		// passer à la fermeture quote
          $user = substr($user, 0, $x);	// extraire the login

          if($user == $ulogin)
          {
            echo '"'.$ulogin. '" déjà utilisé...<br />';
            $already = true;
          }
        }
      }

      if(! $already)
      {
        $newuser = "<user login=\"$ulogin\" password=\"$upass\"/>\n";

        $nfile = fopen($fname, "w");

        foreach($arr as $x)
        {
          fwrite($nfile, $x);
        }

        fwrite($nfile, $newuser);
        fwrite($nfile, "</users>\n");
        fclose($nfile);

        echo "<br /><br />Vous avez créé cet utilisateur:<br />";

        echo $ulogin . "<br />";
        echo $upass . "<br />";
      }

      echo "<br />La base de données contient " . count($arr) . " utilisateurs.<br />";

    ?>

    <p>&nbsp;</p>

    <!-- <form action="authentification.php" method="post" target="_parent">
      <input type="submit" name="submit" value="Continuer ici">
    </form> -->

  </body>
</html>
