<!DOCTYPE html>
<html>
    <head>
        <title>mostrarConf - DWES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../webroot/css/images/favicon.jpg" /> 
    </head>
    <body>
        <?php
        /**
         * Mostrar los archivos de configuración para establecer la conexión con la base de dato
         * 
         * @version 1.0.0
         * @since 14-10-2020
         * @author Rodrigo Robles <rodrigo.robmin@educa.jcyl.es>
         */
        echo '<h1>Configuración del servidor de desarrollo</h1>';
        $filename = "../config/confDB.php";
        highlight_file($filename);

        echo '<h1>Configuración del servidor de explotación</h1>';
        $filename2 = "../config/confDBExplotacion.php";
        highlight_file($filename2);

        echo '<h1>Configuración del servidor 1&1</h1>';
        $filename3 = "../config/confDBOne.php";
        highlight_file($filename3);

        echo '<h1>Configuración del servidor propio</h1>';
        $filename4 = "../config/confDBCasa.php";
        highlight_file($filename4);
        ?>

    </body>

</html>

