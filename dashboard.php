<?php
session_start();

// esto es para verificar si el usuario ha iniciado sesión correctamente
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Verifica si hay un mensaje de inicio de sesión exitoso en la URL
if (isset($_GET['login']) && $_GET['login'] === 'success') {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js'></script>";
    echo "<script>
    Swal.fire({
      icon: 'success',
      title: '¡Bienvenido!',
      text: 'Inicio de sesión exitoso.',
      confirmButtonText: 'Aceptar'
    });
  </script>";
}
?>

<!-- de aqui para bajo va el contenido del dashboard  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piel de seda</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- Incluye las bibliotecas de DataTables y Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
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
                            <span class="title">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                            <span class="title">Usuario</span>
                        </a>
                    </li>
                    <li>
                        <a href="viewproduc/verproductos.php">
                            <span class="icon"><ion-icon name="briefcase-sharp"></ion-icon></span>
                            <span class="title">Producto</span>
                        </a>
                    </li>
                    <li>
                        <a href="../informes.php">
                            <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                            <span class="title">Factura</span>
                        </a>
                    </li>

                    <li>
                        <a href="viewprovee/verproveedor.php">
                            <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                            <span class="title">Proveedor</span>
                        </a>
                    </li>
                    <li class="logout">
                        <a href="#">
                            <span class="icon"><ion-icon name="dice-sharp"></ion-icon></span>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="cont-dash-informe">
            <!-- <div class="top">
                 <div class="toggle">
                    <ion-icon name="grid-sharp"></ion-icon>
                </div> -->
            <!--Buscar-->
            <!-- <div class="buscar">
                    <label>
                        <input type="text" placeholder="Buscar">
                        <ion-icon name="search-sharp"></ion-icon>
                    </label>
                </div> -->

                <div class="registrar">
    <div class="logo-container">
        <img src="../img/cf4d2bbf9bb991e42540b1eb55d2411c.png" alt="Logo de proveedores" class="logo">
    </div>
    <h1 class="title">PROVEEDORES</h1>
</div>

                <div>
                    <div class="cuadrodeclase">
                        <div class="clasesita">
                         
                        </div>
                    </div>
                    <!-- <a class="btn btn-primary" href="registro2.php" role="button">Registra nuevo proveedor</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Incluye las bibliotecas de jQuery, DataTables y Buttons -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

    <!-- Incluye las bibliotecas adicionales para PDF y Excel -->
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.excel.min.js"></script>

    <!-- Incluye las bibliotecas de jQuery, DataTables y Buttons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js"></script>

    <script src="lib/xlsx.full.min.js"></script>
    <script src="../botonesjs/boton.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>