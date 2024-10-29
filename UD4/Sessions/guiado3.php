<?php
/**
* Ejemplo de uso de sesiones utilizando un array para manejo de
* una agenda de contactos
*
* @author Alejandro Carrasco 
*/

// Iniciamos la sesión
session_start();

// Si no existe la variable de sesión, la creamos como array vacío
if(!isset($_SESSION["contacts"])){
    $_SESSION["contacts"] = array();
};

// Determinamos si se ha enviado el formulario
if(isset($_POST["enviar"])){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

    //añadimos un nuevo elemento al array. Ver array_push
    if ($nombre != "" || $email != "" || $telefono != ""){
        $_SESSION["contacts"][] = array(
            "nombre" => $nombre,
            "email" => $email,
            "telefono" => $telefono
        );
        echo "<script>alert('Contacto añadido correctamente');</script>";
    } else {
        echo "<script>alert('No puede insertar campos vacíos');</script>";
    }
}

$data = $_SESSION["contacts"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agenda</h1>
    <h2>Nuevo Contacto</h2>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" id="telefono">
        <br><br>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <h2>Lista de Contactos</h2>

    <?php
        foreach ($data as $clave => $valor) {
            echo $valor["nombre"] . "<br>";
            echo $valor["email"] . "<br>";
            echo $valor["telefono"] . "<br>";
        };
    ?>
    <br>
    <a href="cierre.php">Cerrar Sesión</a>
</body>
</html>
