<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $id = $_POST["id"];

    $consulta = "UPDATE productos SET nombre = '" . $name . "', descripcion = '" . $descripcion. "' WHERE id = " . $id;
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:verproduc.php");

    
?>