<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
   
    
    $consulta = "INSERT INTO tcabello (producto, precio) VALUES ('".$producto."', '".$precio."')";
    $query = $bd->prepare($consulta);
    $query->execute();

    header("Location:vertcabello.php");

    //
?>