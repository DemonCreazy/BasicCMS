<?php // brain.php
/*
 * Cerebro del sistema
 * @author Daniel (Nasty35)
 */
 
# Funciones
function includes() {
	foreach (glob('core/*.php') as $files) require $files;
}

includes();

# Variables & Init
$tpl = new Tpl('templates');
?>