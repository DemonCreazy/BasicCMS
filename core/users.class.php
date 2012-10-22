<?php // users.class.php
/*
 * Clase de los usuarios
 * @author Daniel (Nasty35)
 */
 
class Users {

	// getInfoForId(1, 'email'); - Object
	public static function getInfoForId($id, $data) {
		return mysql_fetch_assoc(mysql_query("SELECT ".$data." FROM users WHERE id = ".$id.""))[$data];
	}
	
	// getInfoForName('Daniel', 'email'); - Object
	public static function getInfoForName($name, $data) {
		return mysql_fetch_assoc(mysql_query("SELECT ".$data." FROM users WHERE user = '".$name."'"))[$data];
	}
	
	// createUser('Daniel', 'Trololo', 'dani@cms.es', '192.168.1.1'); - Void
	public static function createUser($name, $pass, $email, $ip) {
	    mysql_query("INSERT INTO `users` (`id`, `user`, `pass`, `mail`, `ip`) VALUES (NULL, '".$name."', '".$pass."', '".$email."', '".$ip."')");
	}
	
	// deleteUserForId(1); - Void
	public static function deleteUserForId($id) {
	    mysql_query("DELETE FROM users WHERE id = ".$id);
    }
	
	// deleteUserForName('Nasty'); - Void
	public static function deleteUserForName($username) {
	    mysql_query("DELETE FROM users WHERE user = '".$username."'");
	}
	
	// checkName('Nasty'); - Boolean
	public static function checkName($name) {
		return (mysql_num_rows(mysql_query("SELECT * FROM users WHERE user = '".$name."'")) > 0);
	}
	
}