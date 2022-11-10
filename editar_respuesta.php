<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $email = $_POST["correo"];
    $id = $_POST["id"];

    $consulta = "UPDATE clientes SET nombre = '" . $name . "', correo = '" . $email. "' WHERE id = " . $id;
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:ver.php");

    
?>