<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Piel De Seda</title>
</head>
<body>
    <div class="registro">
        <img src="images/masaje-facial.png" alt="Logo" width="100" height="100">
        <h1>Piel de Seda</h1>
        <h3>Lllena el formulario de registro</h3>
        <form action="#" method="post">
    <label for="tipo_documento">Tipo de documento:</label>
    <select id="tipo_documento" name="tipo_documento" required>
      <option value="cedula">Cédula</option>
      <option value="pasaporte">Pasaporte</option>
      <option value="tarjeta_identidad">Tarjeta de Identidad</option>
    </select>

    <br><br>

    <label for="numero_documento">Número de documento:</label>
    <input type="text" id="numero_documento" name="numero_documento" pattern="[0-9]{10}" required title="Ingrese un número de documento de 10 dígitos">

    <br><br>

    <label for="nombres">Nombres:</label>
    <input type="text" id="nombres" name="nombres" pattern="[A-Za-z]{1,10}" required title="Ingrese un máximo de 10 letras">

    <br><br>

    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" pattern="[A-Za-z]{1,10}" required title="Ingrese un máximo de 10 letras">

    <br><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" pattern="[0-9]{10}" required title="Ingrese un número de teléfono de 10 dígitos">

    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required title="Ingrese una dirección de correo electrónico válida">

    <br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[a-zA-Z]).{7,}$" required title="La contraseña tiene que tener una mayúscula 7 caracteres y un número">

    <br><br>

    <label for="aceptar_terminos">Acepto los términos y condiciones:</label>
    <input type="checkbox" id="aceptar_terminos" name="aceptar_terminos" required>

    <br><br>

    <input type="submit" value="Registrarme">
  </form>
      </div>
</body>
</html> 