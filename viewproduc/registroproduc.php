
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piel de seda</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- Incluye las bibliotecas de DataTables y Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>


<body>

<div class="informe">


    <div class="cont-dash-btn">
            <div class="cuadro">
                <ul>
                    <li>
                        <div class="logo-name">
                            <div class="logo-image">
                                <img src="../img/clouds (1).png" alt="logo">
                            </div>
                            <span class="logo_name">PIEL DE SEDA</span>
                        </div>
                    </li>
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                                <span class="title">inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                                <span class="title">Usuario</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="briefcase-sharp"></ion-icon></span>
                                <span class="title">Productos</span>
                            </a>
                        </li>
                      
                        <li>
                        <a href="../viewprovee/verproveedor.php">
                            <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                            <span class="title">Provedores</span>
                        </a>
                        </li>
                    </ul>
                </div>
        </div>

    <div class="cont-dash-informe">

         
                
      
<div class="registrar">
    <div class="logo-container">
        <img src="../img/cf4d2bbf9bb991e42540b1eb55d2411c.png" alt="Logo de proveedores" class="logo">
    </div>
    <h1 class="title">REGISTRO DE PRODUCTOS</h1>
    <br>
           
           
     
</div>



        
<div>
                    <div class="cuadrodeclase">
                        <div class="clasesita">
                        <p>Por favor llene los campos para agregar un producto.</p>


            <div class="card-body">
                            <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                    <div class="login-form">
                        
                            <form action="../controlador/controlproduc/registrosproductos.php" method="POST">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>idproducto</label>
                                        <input type="number" name="idproducto" required class="form-control" placeholder="Ej: 1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>nombre</label>
                                        <input type="text" name="nombre" required class="form-control" placeholder="Ej: polvos">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>descripcion</label>
                                        <input type="text" name="descripcion" required class="form-control" placeholder="Ej: Es una base para la cara  ">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label>stock</label>
                                        <input type="number" name="stock" required class="form-control" placeholder="Ej: 12">
                                    </div>
                                     
                                    <div class="form-group col-md-6">
                                        <label>precio</label>
                                        <input type="number" name="precio" required class="form-control" placeholder="Ej: $1.500">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>categoria</label>
                                        <input type="text" name="categoria" required class="form-control" placeholder="Ej: maquillaje">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>factura_proveedor_idfactura_proveedor</label>
                                        <input type="text" name="factura_proveedor_idfactura_proveedor" required class="form-control" placeholder="Ej: 12312">
                                    </div>
                                    
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrar producto</button>

                                
                                
                            </form>
                            <a class="btn btn-primary" href="verproductos.php" role="button">Ver Productos</a>
                        
                        </div> 
                        </div>
                        </div>
                        </div>
    <div>
    </div>
        </div>
    </div>
    </div>
    </div>

    
</div> 
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>


   <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.excel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js"></script>

    <script src="lib/xlsx.full.min.js"></script>
    <script src="../botonesjs/boton.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
    