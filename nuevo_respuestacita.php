<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $tratamiento = $_POST["tratamiento"];
    $dia = $_POST["dia"];
    $hora = $_POST["hora"];
    

    $consulta = "INSERT INTO citas (nombre,apellidos,correo,telefono,tratamiento,dia,hora) VALUES ('".$name."', '".$apellidos."', '".$email."', '".$telefono."', '".$tratamiento."', '".$dia."', '".$hora."')";
    $query = $bd->prepare($consulta);
    $query->execute();

    header("Location:vercita.php");

    //
?>