<?php
require '../Models/Usuario.php';

class UsuarioController extends Usuario{

// creamos nuestro metodo cagramos las vistas de usuario y login.php

public function LoginView()
{
    require '../Views/Usuario/login.php'
}

}

// cargar la vista de login 
if(isset($GET['action']) && $_GET['action']=='login'){ //se activa el login 
    $instanciacontrolador = new UsuarioController(); 
    $instanciacontrolador ->LoginView();
}
?>
