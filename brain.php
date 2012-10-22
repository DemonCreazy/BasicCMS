<?php // brain.php
/*
 * Cerebro del sistema
 * @author Daniel (Nasty35)
 */
 
# Configuración de PHP Recomendada
ini_set('expose_php', 'Off');
ini_set('short_open_tag', 'On');

# Funciones

function includes() {
	foreach (glob('core/*.php') as $files) require $files;
}

includes();

# Variables & Init
$tpl = new Tpl('templates');
$sql = new MySQL('localhost', 'root', 'root', 'project');

#Session
session_start();
define('Logued', isset($_SESSION['logued']));
?>