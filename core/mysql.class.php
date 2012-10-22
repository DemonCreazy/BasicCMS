<?php // mysql.class.php
/*
 * Clase de la conexión MySQL
 * @author Daniel (Nasty35)
 */

class MySQL {
	
	public function __construct($host, $user, $pass, $db) {
	    mysql_connect($host, $user, $pass) or die (mysql_error());
		mysql_select_db($db) or die (mysql_error());
	}
	
	// dataQuerys("SELECT * FROM users WHERE id = 1", 'email'); - Object
	public function dataQuerys($query, $date) {
	    return mysql_fetch_assoc($query)[$date];
	}
	
	// cleanVars($_POST['username']); - String
	public function cleanVars($str) {
        $str = htmlspecialchars($str);
        $str = strip_tags($str);
        $str = mysql_real_escape_string($str);
        $str = str_replace("<","&lt;", $str);
        $str = str_replace(">","&gt;", $str);
        return $str;
    }
	
}
?>