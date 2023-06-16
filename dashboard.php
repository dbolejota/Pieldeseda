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
    <link rel="stylesheet" href="dashboard.css">
    <!-- Incluye las bibliotecas de DataTables y Buttons -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">   <!--link de iconscout  -->
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="clouds.png" alt="logo">
            </div>
            <span class="logo_name">PIEL DE SEDA</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Inicio</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Usuarios</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-bag"></i>
                        <span class="link-name">Productos</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-truck"></i>
                        <span class="link-name">Proveedores</span>
                    </a></li>
            </ul>
            <!-- para salir Logout -->
            <ul class="logout-mod">
            <li><a href="#">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Cerrar Sesión</span>
                    </a></li>
<!-- para usarlo en modo obscuro-->
                    <li>
                        <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Modo Obscuro</span>
                    </a>
                </li>
            </ul>
        </div>
</nav>
</body>
</html>