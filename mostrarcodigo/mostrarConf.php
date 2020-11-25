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
        echo '<h1>Archivo de configuración</h1>';
        $filename = "../config/confDB.php";
        highlight_file($filename);
        ?>

    </body>

</html>

