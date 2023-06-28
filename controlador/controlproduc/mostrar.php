<?php
    function cargarproducto(){

        $objConsultas = new consultas();
        $result = $objConsultas->mostrar();

        if (!isset($result)) {
            echo '<h2>NO HAY PRODUCTOS REGISTRADOS</h2>';
        }else{

            echo '<table id="bootstrap-data-table-export" class="table table-striped table-bordered">  
            <thead>
                <tr>
                    <th>id producto</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Factura del proveedor</th>  
                  <th>Ver/Editar</th> 
                    <th>Eliminar</th>  

                </tr>
                
            </thead>
           
            <tbody>';

            foreach($result as $f){
                echo '
                
                <tr>
                    <td>'.$f['idproducto'].'</td>
                    <td>'.$f['nombre'].' </td>
                    <td>'.$f['descripcion'].'</td>
                    <td>'.$f['stock'].'</td>
                    <td>'.$f['precio'].'</td>
                    <td>'.$f['categoria'].'</td>
                    <td>'.$f['factura_proveedor_idfactura_proveedor'].'</td>
                    
                    <td> <a href="modificarproducto.php?idproducto='.$f['idproducto'].'" class="btn btn-primary">Editar</a> </td>
                    <td> <a href="../controlador/controlproduc/eliminarproducto.php?idproducto='.$f['idproducto'].'" class="btn btn-danger">Eliminar</a> </td>
                </tr>                           
                
                ';
            }

            echo ' </table>  
            <tbody>';


        }

    }

    function cargaproducto(){
        if (isset($_GET['idproducto'])){
        $idproducto = $_GET['idproducto'];

        $objConsultas = new consultas();
        $result = $objConsultas-> mostrarM($idproducto);

        // Buscando la información del usuario

        //Pintar la info en el formulario

        foreach ($result as $f) {

            echo '

            <form action="../controlador/controlproduc/modificarproducto.php" method="POST">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>idproducto</label>
                        <input type="number" readonly="readonly" value="'.$f['idproducto'].'" name="idproducto" required class="form-control" placeholder="Ej: 665">
                    </div>
                    <div class="form-group col-md-4">
                        <label>nombre</label>
                        <input type="text" value="'.$f['nombre'].'" name="nombre" required class="form-control" placeholder="Ej: nombre">
                    </div>
                    <div class="form-group col-md-4">
                        <label>descripcion</label>
                        <input type="text" value="'.$f['descripcion'].'" name="descripcion" required class="form-control" placeholder="Ej: Apellidos">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label>stock</label>
                        <input type="number" value="'.$f['stock'].'" name="stock" required class="form-control" placeholder="Ej: 3212464321">
                    </div>

                    <div class="form-group col-md-4">
                    <label>precio</label>
                    <input type="number" value="'.$f['precio'].'" name="precio" required class="form-control" placeholder="Ej: 3212464321">
                </div>

                <div class="form-group col-md-4">
                <label>categoria</label>
                <input type="text" value="'.$f['categoria'].'" name="categoria" required class="form-control" placeholder="Ej: 3212464321">
            </div>

            <div class="form-group col-md-4">
            <label>factura_proveedor_idfactura_proveedor</label>
            <input type="number" value="'.$f['factura_proveedor_idfactura_proveedor'].'" name="factura_proveedor_idfactura_proveedor" required class="form-control" placeholder="Ej: 3212464321">
        </div>
                
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Modificar producto</button>
                
                
            </form>
            
            
            
            ';
            
        }

    }

    }
?>