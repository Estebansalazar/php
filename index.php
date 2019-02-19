<?php


//start session
session_start();

//variable local
$variable_normal="soy una cadena de texta";


//variable de sesion
$_SESSION['variable_persistente']="hola soy una sesion";

echo $variable_normal.'</br>';
echo $_SESSION['variable_persistente'];

?>