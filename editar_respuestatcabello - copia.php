<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $producto= $_POST["producto"];
    $precio= $_POST["precio"];
    $id = $_POST["id"];

    $consulta = "UPDATE tcabello SET producto= '" . $producto . "', precio= '" . $precio. "' WHERE id = " . $id;
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:vertcabello.php");

    
?>