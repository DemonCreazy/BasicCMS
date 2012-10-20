<?php // tpl.class.php
/*
 * Clase de las plantillas de diseño (tpl)
 * @author Daniel (Nasty35)
 */

class Tpl {
    
	private $folder;
	
	public function __construct($folder) {
	    if (empty($folder)) echo 'Dejaste el nombre de la carpeta de las templates vac&iacute;o';
		else
		    if (!file_exists($folder)) echo 'La carpeta ' . $folder . ' no existe.';
			else  $this->folder = $folder;
	}
	
	public function add($file) {
	    if (empty($file)) echo 'Dejaste el nombre de un tpl vac&iacute;o';
		else
		    if (!file_exists($this->folder . '/' . $file . '.tpl')) echo 'El tpl ' . $file . '.tpl no existe';
		    else require $this->folder . '/' . $file . '.tpl';
	}
	
	public function setTitle($title) {
	    echo '<title>' . $title . '</title>';
	}
	
}
?>