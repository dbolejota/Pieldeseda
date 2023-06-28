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
                            <a href="#">
                                <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                                <span class="title">Piel de seda</span>
                            </a>
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
                            <a href="../viewproduc/verproductos.php">
                                <span class="icon"><ion-icon name="briefcase-sharp"></ion-icon></span>
                                <span class="title">Productos</span>
                            </a>
                        </li>
                        <li>
                            <a href="../informes.php">
                                <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                                <span class="title">Informes</span>
                            </a>
                      </li>


                        <li>
                        <a href="verproveedor.php">
                                <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                                <span class="title">Provedores</span>
                            </a>    
                        </li>
                    </ul>
                </div>
        </div>

    <div class="cont-dash-informe">

            <div>
                <br>
                    <br>
               <h2>registro</h2>
                         
            </div> 
            <div class="card-body">
                            <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                    <div class="login-form">
                            <h4>Proveedor</h4>
                            <form action="../controlador/controlprove/registrarproveedor.php" method="POST">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>idproveedor</label>
                                        <input type="number" name="idproveedor" required class="form-control" placeholder="Ej: 24721343">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>nombres</label>
                                        <input type="text" name="nombres" required class="form-control" placeholder="Ej: Maria Camila">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>apellidos</label>
                                        <input type="text" name="apellidos" required class="form-control" placeholder="Ej: Perez Gaitan">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label>telefono</label>
                                        <input type="number" name="telefono" required class="form-control" placeholder="Ej: 3224335467">
                                    </div>
                                    
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrarme</button>
                                
                            </form>
                        </div> 
                        </div>
                        </div>
                        </div>
    <div>

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
    