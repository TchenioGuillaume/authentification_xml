<?php

/**
	Login.php
*/

if (isset( $_POST ))
   $postArray = &$_POST ;
else
   $postArray = &$HTTP_POST_VARS ;


$ulogin = $postArray[login];
$upass = $postArray[password];
$fname="users.xml";

// searching for this login
// scanning the array of entries

$arr = file($fname);
$found = false;

foreach($arr as $user)
{
	$user = trim($user);

	if(substr($user, 0, 12) == "<user login=")
	{
		$user = substr($user, 13);		// skipping prefix and quote
		$x = strpos($user, "\"");		// moving to closing quote
		$user = substr($user, 0, $x);	// extracting the login

		if($user == $ulogin)
		{
			$found = true;
			break;
		}
	}
}


if($found)
{
	$unumber = count($arr) - 3;
	header("Location:logok.php?login=".$ulogin."size=".$unumber);
}
else
{
	header("Location:login.php");
}


?>
