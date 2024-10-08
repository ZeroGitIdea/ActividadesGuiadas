<?php
    /*Array indexado que contiene los grupos*/
    $arrayGrupos = array ("1 DAW", "2 DAW", "1 ASIR", "2 ASIR");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesa5.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre"/>
        <input type="text" name="apellidos" id=""/>
        <input type="email" name="email" id=""/>
        <select name="select" id="">
            <?php
                foreach ($arrayGrupos as $key => $value){
                    echo '<option name="'.$value.'" value="'.$key.'">'.$value.'</option>';
                }
            ?>
        </select>
        <input type="submit" value="Send" name="submit"/>
    </form>
</body>
</html>