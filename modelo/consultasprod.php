<?php

    class consultas{
    
        public function registrarproductos($idproducto,$nombre,$descripcion,$stock,$precio,$categoria,$factura_proveedor_idfactura_proveedor){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM producto WHERE idproducto=:idproducto";
            $result = $conexion->prepare($consultar);

            $result->bindParam(":idproducto", $idproducto);
           

            $result->execute();

            $f = $result->fetch();

            if ($f) {
                echo '<script>alert("Estos datos ya se encuentran en el sistema, verifique y vuelva a intentarlo")</script>';
                echo "<script> location.href='../viewproduc/registroproduc.php' </script>";
            }else{
                $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();
                $insertar = "INSERT INTO producto(idproducto, nombre,descripcion , stock,precio,categoria,factura_proveedor_idfactura_proveedor) VALUES(:idproducto, :nombre, :descripcion, :stock, :precio,:categoria,:factura_proveedor_idfactura_proveedor)";
             
                $result = $conexion->prepare($insertar);
        
                $result->bindParam(":idproducto", $idproducto);
                $result->bindParam(":nombre", $nombre);
                $result->bindParam(":descripcion", $descripcion);
                $result->bindParam(":stock", $stock);
                $result->bindParam(":precio", $precio);
                $result->bindParam(":categoria", $categoria);
                $result->bindParam(":factura_proveedor_idfactura_proveedor", $factura_proveedor_idfactura_proveedor);
                
                   $result->execute();
       
                    echo '<script>alert("Registro exitoso")</script>';
                    echo "<script>location.href='../viewproduc/verproductos.php'</script>";
                
            }
        }

        public function mostrar(){
            
            $f = null;

            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM producto ";
            $result = $conexion->prepare($consultar);
         
           $result->execute();

            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;

        }


        public function actualizarproducto($idproducto,$nombre,$descripcion,$stock,$precio,$categoria,$factura_proveedor_idfactura_proveedor){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $actualizar = "UPDATE producto SET nombre=:nombre, descripcion=:descripcion,  stock=:stock, precio=:precio, categoria=:categoria, factura_proveedor_idfactura_proveedor=:factura_proveedor_idfactura_proveedor  WHERE idproducto=:idproducto ";
            $result = $conexion->prepare($actualizar);

                $result->bindParam(":idproducto", $idproducto);
                $result->bindParam(":nombre", $nombre);
                $result->bindParam(":descripcion", $descripcion);
                $result->bindParam(":stock", $stock);
                $result->bindParam(":precio", $precio);
                $result->bindParam(":categoria", $categoria);
                $result->bindParam(":factura_proveedor_idfactura_proveedor", $factura_proveedor_idfactura_proveedor);
                

                
                 $result->execute();
                echo '<script>alert("producto Actualizado")</script>';
                echo "<script> location.href='../../viewproduc/verproductos.php' </script>";
               
        }

        public function eliminarproducto($idproducto){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $eliminar = "DELETE FROM producto WHERE idproducto=:idproducto ";
            $result = $conexion->prepare($eliminar);

            $result->bindParam(':idproducto', $idproducto);

            $result->execute();

            echo '<script>alert("producto Eliminado")</script>';
            echo "<script> location.href='../../viewproduc/verproductos.php' </script>";
           

        }

        public function mostrarM($idproducto){
            
            $f = null;

            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM producto WHERE idproducto = :idproducto ";
            $result = $conexion->prepare($consultar);
            $result->bindParam(":idproducto",$idproducto);

            $result->execute();

            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;

        }


    }




    