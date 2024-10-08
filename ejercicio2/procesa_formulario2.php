<?php
/*
* Mostrar formulario dinámicamente 
*/
 $formulario = array(
    'nombre',
    'apellidos',
    'email'
 )

?>

<form action="procesa3.php" method="post">
    <?php
        for($i = 0; $i < count($formulario); $i++) {
            echo '<input type="text" name="'. $formulario[$i] .'" placeholder="'. $formulario[$i] .'" value=""/>';
        }
    ?>
    <input type="submit" value="Send"/>
</form>