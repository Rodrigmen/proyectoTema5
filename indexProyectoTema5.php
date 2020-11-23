<!DOCTYPE html>
<html>
    <head>
        <title>DWES - Rodrigo Robles</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="webroot/css/styleDWESTema5.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/jpg" href="webroot/css/images/favicon.jpg" />
    </head>
    <body>
        <header>
            <h1 id="titulo">DWES - Tema 5</h1>
            <nav class="navegacion">
                <ul class="menu">
                    <li><a href="../../index.html"><img id="inicio"  src="webroot/css/images/inicio.png"  alt="Inicio"></a></li>
                    <li><a href="../indexProyectoDWES.php">DWES</a>
                        <ul class="submenu">
                            <li><a href="../doc/EstudioTema1.pdf" target="_blank">Tema 1</a></li>
                            <li><a href="../doc/EstudioTema2.pdf" target="_blank">Tema 2</a></li>
                            <li><a href="../proyectoTema3/indexProyectoTema3.php">Tema 3</a></li>
                            <li><a href="../proyectoTema4/indexProyectoTema4.php">Tema 4</a></li>
                        </ul>
                    </li>
                    <li><a href="../../proyectoDAW/indexProyectoDAW.php">DAW</a>
                        <ul class="submenu">
                            <li><a href="../../proyectoDAW/doc/RRM_Ud1_Tarea2.pdf" target="_blank">Tema 1</a></li>
                        </ul>
                    </li>
                    <li><a href="../../proyectoDWEC/indexProyectoDWEC.php">DWEC</a>
                        <ul class="submenu">
                            <li><a href="../../proyectoDWEC/Tema1DWEC/indexTema1DWEC.php">Tema 1</a></li>
                            <li><a href="../../proyectoDWEC/Tema2DWEC/indexTema2DWEC.php">Tema 2</a></li>
                        </ul>
                    </li>
                    <li><a id="ghost">Ghost</a>

                    </li>
                </ul>
            </nav>
            <div id="ctabla">
                <table id="ejercicios">
                    <!-- SCRIPTS-->
                    <tr>
                        <td class="enunciado">SCRIPTS DE LA BASE DE DATOS</td>
                        <td class="iconos">
                            <a href="mostrarcodigo/mostrarScripts.php">
                                <img class="imgejer" src="webroot/css/images/mostrar.png" alt="Mostrar" title="Mostrar"/>
                            </a>
                        </td>
                        <td>
                            <p class="casper">         </p>
                        </td>
                    </tr>
                    <!-- ARCHIVOS DE CONFIGURACION-->
                    <tr>
                        <td class="enunciado">ARCHIVOS DE CONFIGURACIÓN</td>
                        <td class="iconos">
                            <a href="mostrarcodigo/mostrarConf.php">
                                <img class="imgejer" src="webroot/css/images/mostrar.png" alt="Mostrar" title="Mostrar"/>
                            </a>
                        </td>
                        <td>
                            <p class="casper">         </p>
                        </td>
                    </tr>
                    <!--EJERCICIO 00 - VARIABLES SUPERGLOBALES-->
                    <tr>
                        <td class="enunciado">[Ejercicio 00] - Contenido de las variables superglobales y phpinfo()</td>
                        <td class="iconos">
                            <a href="codigoPHP/ejercicio00.php">
                                <img class="imgejer" src="webroot/css/images/ejecutar.png" alt="EjecutarPDO" title="EjecutarPDO"/>
                            </a>
                        </td>
                        <td class="iconos">
                            <a href="mostrarcodigo/mostrarEjercicio00.php">
                                <img class="imgejer" src="webroot/css/images/mostrar.png" alt="MostrarPDO" title="MostrarPDO"/>
                            </a>
                        </td>
                        <td>
                            <p class="casper">         </p>
                        </td>
                    </tr>

                    <!--EJERCICIO 01 - CONTROL DE ACCESO CON LA FUNCIÓN HEADER-->
                    <tr>
                        <td class="enunciado">[Ejercicio 01] - Control de acceso con la función header().</td>
                        <td class="iconos">
                            <a href="codigoPHP/ejercicio01.php">
                                <img class="imgejer" src="webroot/css/images/ejecutar.png" alt="EjecutarPDO" title="EjecutarPDO"/>
                            </a>
                        </td>
                        <td class="iconos">
                            <a href="mostrarcodigo/mostrarEjercicio01.php">
                                <img class="imgejer" src="webroot/css/images/mostrar.png" alt="MostrarPDO" title="MostrarPDO"/>
                            </a>
                        </td>
                    </tr>

                    <!--EJERCICIO 02 - CONTROL DE ACCESO CON LA FUNCIÓN HEADER Y LA TABLA 'USUARIO'-->
                    <tr>
                        <td class="enunciado">[Ejercicio 02] - Control de acceso con la función header() y la tabla 'Usuario'.</td>
                        <td class="iconos">
                            <a href="codigoPHP/ejercicio02.php">
                                <img class="imgejer" src="webroot/css/images/ejecutar.png" alt="EjecutarPDO" title="EjecutarPDO"/>
                            </a>
                        </td>
                        <td class="iconos">
                            <a href="mostrarcodigo/mostrarEjercicio02.php">
                                <img class="imgejer" src="webroot/css/images/mostrar.png" alt="MostrarPDO" title="MostrarPDO"/>
                            </a>
                        </td>
                        <td>
                            <p class="casper">         </p>
                        </td>
                    </tr>
                </table>
            </div>


        </header>
    </body>
    <footer>
        <ul>
            <li>&copy2020-2021 | Rodrigo Robles Miñambres</li>
            <li>
                <a target="_blank" href="https://github.com/Rodrigmen">
                    <img id="imggit" title="GitHub" src="webroot/css/images/github.png"  alt="GITHUB">
                </a>
            </li>
        </ul>            
    </footer>
</html>
