<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $id = $_GET["id"];

    $consulta = "DELETE FROM barba WHERE id = " . $id;
   
    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:verbar.php");

?>