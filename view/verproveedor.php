<?php
    require_once("../modelo/conexion.php");
    require_once("../modelo/consultas.php");
    require_once("../controlador/mostrar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piel de seda</title>
    <link rel="stylesheet" href="../css/style.css">
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
                            <a href="#">
                                <span class="icon"><ion-icon name="briefcase-sharp"></ion-icon></span>
                                <span class="title">Productos</span>
                            </a>
                        </li>
                        <li>
                            <a href="../informes.php">
                                <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                                <span class="title">Inventario</span>
                            </a>
                      </li>

                        <li>
                            <a href="">
                                <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                                <span class="title">Provedores</span>
                            </a>
                            <li>
                                    <a href="#"><i class="ti-pencil-alt"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-eye"></i></a>
                                </li>

                        </li>
                    </ul>
                </div>
        </div>

    <div class="cont-dash-informe">

                    
                        <div class="top">
                            <div class="toggle">
                                <ion-icon name="grid-sharp"></ion-icon>
                            </div>
                            <!--Buscar-->
                            <div class="buscar">
                                    <label>
                                        <input type="text" placeholder="Buscar">
                                        <ion-icon name="search-sharp"></ion-icon> 
                                    </label>
                            </div>
                        </div>
                        
            <div>
                <br>
                    <br>
               <h2>Proveedores registrados</h2>
                <p>Seleccionar el proveedor a editar o eliminar</p>
          
            </div>
                        <div >
                                <div >
                                    <div >
                                           
                                        <?php
                                             cargarproveedor();
                                            
                                        ?>
                                    </div>
                                </div>
                                </div>

   

    <div>

    </div>
    </div>

    
</div>

    

    


   
    
    <!-- Incluye las bibliotecas de jQuery, DataTables y Buttons -->

    



 

    

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
    