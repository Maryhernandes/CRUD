<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $apellidos = $_POST["apllidos"];
    $id = $_POST["id"];
    $email = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $tratamiento = $_POST["tratamiento"];
    $dia = $_POST["dia"];
    $hora = $_POST["hora"];
    

    $consulta = "UPDATE citas SET nombre = '" . $name . "', apellidos = '" . $apellidos. "', correo = '" . $correo. "', telefono = '" . $telefono. "',tratamiento  = '" . $tratamiento. "', dia = '" . $dia. "', hora = '" . $hora. "' WHERE id = " . $id;
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:vercita.php");

    
?>
