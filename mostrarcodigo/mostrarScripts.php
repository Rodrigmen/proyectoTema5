<!DOCTYPE html>
<html>
    <head>
        <title>mostrarScripts - DWES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../webroot/css/images/favicon.jpg" /> 
    </head>
    <body>
        <?php
        /**
         * Mostrar los scripts de la base de datos
         * 
         * @version 1.0.0
         * @since 26-11-2020
         * @author Rodrigo Robles <rodrigo.robmin@educa.jcyl.es>
         */
        echo '<h1>SCRIPT DE CREACIÓN - DESARROLLO</h1>';
        $filename = "../scriptDB/CreaDAW218DBProyectoTema5.sql";
        highlight_file($filename);

        echo '<h1>SCRIPT DE CARGA INICIAL - DESARROLLO</h1>';
        $filename2 = "../scriptDB/CargaInicialDAW218DBProyectoTema5.sql";
        highlight_file($filename2);

        echo '<h1>SCRIPT DE BORRADO - DESARROLLO</h1>';
        $filename3 = "../scriptDB/BorraDAW218DBProyectoTema5.sql";
        highlight_file($filename3);
        ?>
    </body>

</html>

