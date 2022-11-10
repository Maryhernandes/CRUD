<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $id = $_GET["id"];

    $consulta = "DELETE FROM productos WHERE id = " . $id;
   
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:verproduc.php");

?>