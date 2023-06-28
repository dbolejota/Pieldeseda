<?php
    // IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
    require_once("../../modelo/conexion.php");
    require_once("../../modelo/consultasprod.php");

    // capturamos en variables, los valores enviados desde el formulario
    // a traves del method post y los name de los campos
    $idproducto = $_POST['idproducto'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    $factura_proveedor_idfactura_proveedor = $_POST['factura_proveedor_idfactura_proveedor'];
    
    

        
        // Creamos el objeto a partir de la clase consultas
        $objConsultas = new consultas();
        $result = $objConsultas->actualizarproducto($idproducto,$nombre,$descripcion,$stock,$precio,$categoria,$factura_proveedor_idfactura_proveedor);
                
 
?>