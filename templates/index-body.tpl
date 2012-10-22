<?php
require 'lang/lang.php';
require 'lang/'.$lang.'.php';
?>

<?php
if(isset($_GET['error'])) {
echo (@$_GET['error'] == 'incorrectos') ? 'Datos incorrectos' :
(@$_GET['error'] == 'campos') ? 'Los campos están vacios' :
'No existe ese tag de error';
}
?>

<h1><?=$title['index'][$lang]?></h1>
<form action="security_check.php" method="post">
<label for="username"><?=$label_username['index'][$lang]?></label>
<input type="text" name="username" placeholder="<?=$label_username['index'][$lang]?>" />
<br>
<label for="password"><?=$label_password['index'][$lang]?></label>
<input type="password" name="password" placeholder="<?=$label_password['index'][$lang]?>" />
<input type="submit" value="<?=$enter['index'][$lang]?>" />
</form>
<a href="register.php"><?=$join['index'][$lang]?></a>