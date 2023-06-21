<?php
    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../modelo/conexion.php");
    require_once("../modelo/consultas.php");
    // capturamos en variables, los valores enviados desde el formulario
    // a traves del method post y los name de los campos
    $idproveedor= $_POST['idproveedor'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    

    // Comparamos que las claves concuerden

        // Creamos el objeto a partir de la clase consultas
        $objConsultas = new consultas();
        $result = $objConsultas->registrarproveedor($idproveedor,$nombres,$apellidos,$telefono);

        echo "registro exitoso";
        echo "<script> location.href='view/registro2.php' </script>";
                
    
       
