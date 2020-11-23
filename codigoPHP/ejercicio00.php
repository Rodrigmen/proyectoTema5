<!DOCTYPE html>
<html>
    <head>
        <title>ejercicio01 - DWES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../webroot/css/images/favicon.jpg" /> 
        <style>
            body{
                background-color: #A9C6FF;
            }
            h2{
                text-align: center;
            }

            table{
                margin: auto;    
            }
            .key{
                text-align: center;
                background: black;
                color:white;
            }
            .valor{
                background: white;
            }
        </style>
    </head>
    <body>
        <table>
            <?php
            /**
             * Mostrar el contenido de las variables superglobales y phpinfo()).
             * 
             * @version 1.0.0
             * @since 23-11-2020
             * @author Rodrigo Robles <rodrigo.robmin@educa.jcyl.es>
             */
            foreach ($_SERVER as $apartado => $valor) {
                echo '<tr> <td class="key">' . $apartado . '</td><td class="valor">' . $valor . '</td> </tr>';
            }
            echo '</table>';
            phpinfo();
            ?>

    </body>

</html>   