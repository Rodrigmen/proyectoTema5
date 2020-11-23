<?php
//DATOS COMUNES EN LAS CONEXIONES
//PDO Y MYSQLi
define('USER', 'usuarioDAW218DBProyectoTema5');
define('PASSWORD', 'P@ssw0rd');
define('CHARSET', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); //codificación UTF-8 para los datos que se transmitan en el servidor MySQL 
//PDO CASA
define('DSN', 'mysql:host=192.168.1.240;dbname=DAW218DBProyectoTema5');
?>