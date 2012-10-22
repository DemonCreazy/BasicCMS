<?php
require 'brain.php';

if(!Logued) header('Location: index.php');

echo 'Hola '.$_SESSION['username'];
echo '<br>';
echo '<a href=logout.php>Cerrar sesi&oacute;n</a>';
?>