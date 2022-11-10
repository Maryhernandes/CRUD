<?php
    if($_POST){

    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $rfc= $_POST["rfc"];
    $id = $_POST["id"];

    $consulta = "UPDATE provedores SET nombre = '" . $name . "', rfc = '" . $rfc. "' WHERE id = " . $id;
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:verrfc.php");
    }
    
?>