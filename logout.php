<?php // logout.php
/*
 * Página para cerrar sessiones de usuarios
 * @author Daniel (Nasty35)
 */

require 'brain.php';

unset($_SESSION['logued']);
session_destroy();
header('Location: index.php');
?>