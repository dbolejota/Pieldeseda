<?php

    class consultas{
    
        public function registrarproveedor($idproveedor,$nombres,$apellidos,$telefono){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM proveedor WHERE idproveedor=:idproveedor";
            $result = $conexion->prepare($consultar);

            $result->bindParam(":idproveedor", $idproveedor);
           

            $result->execute();

            $f = $result->fetch();

            if ($f) {
                echo '<script>alert("Estos datos ya se encuentran en el sistema, verifique y vuelva a intentarlo")</script>';
                echo "<script> location.href='../view/registro2.php' </script>";
            }else{
                $insertar = "INSERT INTO proveedor(idproveedor, nombres, apellidos, telefono) VALUES(:idproveedor, :nombres, :apellidos, :telefono)";
             
                $result = $conexion->prepare($insertar);
        
                $result->bindParam(":idproveedor", $idproveedor);
                $result->bindParam(":nombres", $nombres);
                $result->bindParam(":apellidos", $apellidos);
                $result->bindParam(":telefono", $telefono);
             
                 $result ->execute();
             
                echo '<script>alert("Registro exitoso")</script>';
                 echo "<script> location.href='../view/verproveedor.php' </script>";
            }
        }


        public function mostrar(){
            
            $f = null;

            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM proveedor ";
            $result = $conexion->prepare($consultar);
         
            $result->execute();

            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;

        }



        public function actualizarproveedor($idproveedor,$nombres,$apellidos,$telefono){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $actualizar = "UPDATE proveedor SET nombres=:nombres, apellidos=:apellidos,  telefono=:telefono WHERE idproveedor=:idproveedor ";
            $result = $conexion->prepare($actualizar);

                $result->bindParam(":idproveedor", $idproveedor);
                $result->bindParam(":nombres", $nombres);
                $result->bindParam(":apellidos", $apellidos);
                $result->bindParam(":telefono", $telefono);
                
                 $result->execute();
                echo '<script>alert("proveedor Actualizado")</script>';
                echo "<script> location.href='../view/verproveedor.php' </script>";
               
        }

        public function eliminarproveedor($idproveedor){
            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $eliminar = "DELETE FROM proveedor WHERE idproveedor=:idproveedor ";
            $result = $conexion->prepare($eliminar);

            $result->bindParam(':idproveedor', $idproveedor);

            $result->execute();

            echo '<script>alert("proveedor Eliminado")</script>';
            echo "<script> location.href='../view/verproveedor.php' </script>";
           

        }


        public function mostrarM($idproveedor){
            
            $f = null;

            $objConexion = new conexion();
            $conexion = $objConexion->get_conexion();

            $consultar = "SELECT * FROM proveedor WHERE idproveedor = :idproveedor ";
            $result = $conexion->prepare($consultar);
            $result->bindParam(":idproveedor",$idproveedor);

            $result->execute();

            while ($resultado = $result->fetch()) {
                $f[] = $resultado;
            }
            return $f;

        }



    }