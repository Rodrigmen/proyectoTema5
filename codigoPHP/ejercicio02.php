<?php
/**
 * Control de acceso mediante la función header y la tabla 'usuario'.
 * 
 * @version 1.0.0
 * @since 24-11-2020
 * @author Rodrigo Robles <rodrigo.robmin@educa.jcyl.es>
 */
require_once '../config/confDB.php';
try {
    $oConexionPDO = new PDO(DSN, USER, PASSWORD, CHARSET); //creo el objeto PDO con las constantes iniciadas en el archivo confDBPDO.php
    $oConexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //le damos este atributo a la conexión (la configuramos) para poder utilizar las excepciones

    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="Mi dominio"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Texto a enviar si el usuario pulsa el botón Cancelar';
        exit;
    } else {
        //Creación de la consulta preparada
        $consultaUsuario = "SELECT CodUsuario, Password FROM Usuario WHERE (CodUsuario LIKE :codigo) AND (Password LIKE :password)";
        //Preparación de la consulta preparada
        $buscarUsuario = $oConexionPDO->prepare($consultaUsuario);

        //Insertamos los datos en la consulta preparada
        $password = hash('sha256', $_SERVER['PHP_AUTH_PW']);
        $buscarUsuario->bindParam(':codigo', $_SERVER['PHP_AUTH_USER']);
        $buscarUsuario->bindParam(':password', $password);

        //Se ejecuta la consulta preparada
        $buscarUsuario->execute();

        $numeroResultados = $buscarUsuario->rowCount();
        if ($numeroResultados === 1) {
            echo "<p>Hola {$_SERVER['PHP_AUTH_USER']}.</p>";
        } else {
            echo "<p>Usuario incorrecto.</p>";
        }
    }
} catch (PDOException $errorConexion) {
    echo "Mensaje de error: " . $errorConexion->getMessage();
    echo "<br>Código de error: " . $errorConexion->getCode();
} finally {
    unset($oConexionPDO); //destruimos el objeto
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio02 - DWES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../webroot/css/images/favicon.jpg" /> 
        <link href="../webroot/css/styleDWESTema5.css" rel="stylesheet" type="text/css"/>
    </head>
</html>  