<?php
/**
 * Control de acceso mediante la función header y la tabla 'usuario'.
 * 
 * @version 1.0.0
 * @since 24-11-2020
 * @author Rodrigo Robles <rodrigo.robmin@educa.jcyl.es>
 */
if (!isset($_SERVER['PHP_AUTH_USER']) || (!isset($_SERVER['PHP_AUTH_PW']))) {
    header('WWW-Authenticate: Basic realm="Mi dominio"');
    header('HTTP/1.0 401 Unauthorized');
    echo "¡Usuario no valido!";
    exit;
}
require_once '../../config/confDB.php';
try {
    $oConexionPDO = new PDO(DSN, USER, PASSWORD, CHARSET); //creo el objeto PDO con las constantes iniciadas en el archivo confDBPDO.php
    $oConexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //le damos este atributo a la conexión (la configuramos) para poder utilizar las excepciones

    $codigoIntroducido = $_SERVER['PHP_AUTH_USER'];
    $passwordIntroducida = $_SERVER['PHP_AUTH_PW'];

    //Creación de la consulta preparada
    $consultaUsuario = "SELECT T01_CodUsuario, T01_Password FROM T01_Usuario WHERE T01_CodUsuario = :codigo";
    //Preparación de la consulta preparada
    $buscarUsuario = $oConexionPDO->prepare($consultaUsuario);

    //Insertamos los datos en la consulta preparada
    $buscarUsuario->bindParam(':codigo', $codigoIntroducido);

    //Se ejecuta la consulta preparada
    $buscarUsuario->execute();
    $oUsuario = $buscarUsuario->fetchObject();

    if (($oUsuario->T01_CodUsuario == $codigoIntroducido) && ($oUsuario->T01_Password == hash("sha256", $codigoIntroducido . $passwordIntroducida))) {
        header('Location: programa.php');
    } else {
        header('WWW-Authenticate: Basic realm="Mi dominio"');
        header('HTTP/1.0 401 Unauthorized');
        echo "¡Usuario no valido!";
        exit;
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