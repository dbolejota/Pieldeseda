 <?php

    require_once("../../modelo/conexion.php");
    require_once("../../modelo/consultasprov.php");

    $id_proveedor= $_GET['idproveedor'];

    $objConsultas = new consultas();
    $result = $objConsultas->eliminarproveedor($id_proveedor);
?> 