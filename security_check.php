<?php // security_check.php
/*
 * Página que verifica usuarios para loguear
 * @author Daniel (Nasty35)
 */

require 'brain.php';

if(empty($_POST['username']) && empty($_POST['password'])) header('Location: index.php?error=campos');
else {
	$username = $sql->cleanVars($_POST['username']);
	$password = $sql->cleanVars($_POST['password']);
	$sql = mysql_query("SELECT * FROM users WHERE user = '".$username."' AND pass = '".$password."'");
	if(mysql_num_rows($sql) < 1) header('Location: index.php?error=incorrectos');
	else {
	    $_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['logued'] = true;
		header('Location: me.php');
	}
}
?>