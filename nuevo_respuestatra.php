<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["producto"];
    $tratamiento = $_POST["tratamiento"];
  
    

    $consulta = "INSERT INTO tcabello (producto,tratamiento) VALUES ('".$name."', '".$tratamiento."')";
    $query = $bd->prepare($consulta);
    $query->execute();

    header("Location:vertra.php");

    //
?>