<?php

function autoloader_perso ($className){
	//var_dump($className);
	require_once ($className. '.php');
	
}
spl_autoload_register('autoloader_perso');

?>