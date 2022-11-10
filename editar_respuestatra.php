<?php
    
include("conexion.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";

$name = $_POST["producto"];
$precio = $_POST["precio"];
$id = $_POST["id"];

$consulta = "UPDATE tcabello SET nombre = '" . $name . "', precio = '" . $precio. "' WHERE id = " . $id;
$query = $bd->prepare($consulta);

$query->execute();

header("Location:vertra.php");


?>