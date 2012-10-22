<?php
require 'lang/lang.php';
require 'lang/'.$lang.'.php';
?>

<?php
if(isset($_GET['error'])) {
echo (@$_GET['error'] == 'name') ? 'El nombre ya est&aacute; escogido' :
(@$_GET['error'] == 'empty') ? 'Los campos están vacios, debes rellenarlos' :
'No existe ese tag de error';
}
?>

<form action="registering.php" method="post">
<label for="username"><?=$label_username['index'][$lang]?></label>
<input type="text" name="username" placeholder="Nombre de usuario" />
<br>
<label for="password"><?=$label_password['index'][$lang]?></label>
<input type="password" name="password" placeholder="Contraseña" />
<br>
<label for="email"><?=$label_email['index'][$lang]?></label>
<input type="text" name="email" placeholder="E-mail" />
<br>
<input type="submit" value="Registrarte" />
</form>