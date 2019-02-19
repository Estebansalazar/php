<?php

//para poder usar las sesiones 
session_start();

//si imprimos una variable normal nos arrojará un error echo $variable_normal;
//! echo $variable_normal;

//variable sesion
echo $_SESSION['variable_persistente'];

?>