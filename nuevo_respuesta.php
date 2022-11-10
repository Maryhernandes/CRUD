<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $email = $_POST["correo"];
   
    
    $consulta = "INSERT INTO clientes (nombre, correo) VALUES ('".$name."', '".$email."')";
    $query = $bd->prepare($consulta);
    $query->execute();

    header("Location:ver.php");

    //
?>