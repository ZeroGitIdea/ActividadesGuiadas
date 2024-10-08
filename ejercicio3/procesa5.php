<?php

/* Control de acceso al formulario */

if (!isset($_POST['submit'])) {
    header('location:form.php');
}

echo "Datos del formulario: <br>";

foreach ($_POST as $clave => $valor){
    echo $valor . '<br>';
}
?>