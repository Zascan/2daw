<?php
    if ( ( (isset($_GET['nombre']) && !empty($_GET['nombre'])) && (isset($_GET['apellido1'])  && !empty($_GET['apellido1'])) ) ) {
        
        $nombre = $_GET["nombre"];
        $apellido1 = $_GET["apellido1"];

        echo "Hola $nombre $apellido1";
    } else {
        echo "No existen datos!";
    }
    
?>