<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $rfc = $_POST["rfc"];
   
    
    $consulta = "INSERT INTO provedores (nombre, rfc) VALUES ('".$name."', '".$rfc."')";
    $query = $bd->prepare($consulta);
    $query->execute();

    header("Location:verrfc.php");

    //
?>