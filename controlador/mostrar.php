<?php
    function cargarproveedor(){

        $objConsultas = new consultas();
        $result = $objConsultas->mostrar();

        if (!isset($result)) {
            echo '<h2>NO HAY PROVEEDORES REGISTRADOS</h2>';
        }else{

            echo '<table id="bootstrap-data-table-export" class="table table-striped table-bordered">  
            <thead>
                <tr>
                    <th>idproveedor</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>telefono</th>
                   <th>Ver/Editar</th> 
                    <th>Eliminar</th>  
                </tr>
                
            </thead>
           
            <tbody>';

            foreach($result as $f){
                echo '
                
                <tr>
                    <td>'.$f['idproveedor'].'</td>
                    <td>'.$f['nombres'].' </td>
                    <td>'.$f['apellidos'].'</td>
                    <td>'.$f['telefono'].'</td>
                    
                    <td> <a href="modificarproveedor.php?idproveedor='.$f['idproveedor'].'" class="btn btn-primary">Editar</a> </td>
                    <td> <a href="../controlador/eliminarproveedor.php?idproveedor='.$f['idproveedor'].'" class="btn btn-danger">Eliminar</a> </td>
                </tr>                           
                
                ';
            }

            echo ' </table>  
            <tbody>';


        }

    }

    function cargaproveedor(){
        if (isset($_GET['idproveedor'])){
        $idproveedor = $_GET['idproveedor'];

        $objConsultas = new consultas();
        $result = $objConsultas-> mostrarM($idproveedor);

        // Buscando la información del usuario

        //Pintar la info en el formulario

        foreach ($result as $f) {

            echo '

            <form action="../controlador/modificarproveedor.php" method="POST">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>idproveedor</label>
                        <input type="number" readonly="readonly" value="'.$f['idproveedor'].'" name="idproveedor" required class="form-control" placeholder="Ej: 665">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Nombres</label>
                        <input type="text" value="'.$f['nombres'].'" name="nombres" required class="form-control" placeholder="Ej: Nombres">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Apellidos</label>
                        <input type="text" value="'.$f['apellidos'].'" name="apellidos" required class="form-control" placeholder="Ej: Apellidos">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label>Teléfono</label>
                        <input type="number" value="'.$f['telefono'].'" name="telefono" required class="form-control" placeholder="Ej: 3212464321">
                    </div>
                
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Modificar proveedor</button>
                
                
            </form>
            
            
            
            ';
            
        }

    }

    }
?>