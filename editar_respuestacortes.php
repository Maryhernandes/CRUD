<?php
    
    include("conexion.php");

    $name = $_POST["nombre"];
    $precio = $_POST["precio"];
    $id = $_POST["id"];

    $consulta = "UPDATE cortes SET nombre = '" .$name. "', precio = '" .$precio."'  WHERE  id = " . $id;
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:../vercortes.php");

    
?>