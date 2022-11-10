<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
   
    
    $consulta = "INSERT INTO productos (nombre, descripcion) VALUES ('".$name."', '".$descripcion."')";
    $query = $bd->prepare($consulta);
    $query->execute();

    header("Location:verproduc.php");

    //
?>