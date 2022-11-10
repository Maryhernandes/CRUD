<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $precio = $_POST["precio"];
   
    
    $consulta = "INSERT INTO tintes (nombre, precio) VALUES ('".$name."', '".$precio."')";
    $query = $bd->prepare($consulta);
    $query->execute();

    header("Location:vertintes.php");

    //
?>