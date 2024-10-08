<?php
/*
* Foreach para iterar sobre un POST, es útil para automatizar la información
* enviada a través de un formulario 
*/
foreach ($_POST as $clave => $valor) {
    echo  $clave . ': ' . $valor . '<br>';
}
?>