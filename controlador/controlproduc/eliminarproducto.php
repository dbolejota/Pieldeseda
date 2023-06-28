 <?php

    require_once("../../modelo/conexion.php");
    require_once("../../modelo/consultasprod.php");

    $id_producto= $_GET['idproducto'];

    $objConsultas = new consultas();
    $result = $objConsultas->eliminarproducto($id_producto);
?> 