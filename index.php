<?php // index.php
/*
 * Página principal del sistema
 * @author Daniel (Nasty35)
 */

require 'brain.php';

if(Logued) header('Location: me.php');

$tpl->setTitle('CMS: Index');
$tpl->add('index-body');
?>