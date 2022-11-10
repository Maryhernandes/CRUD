<?php

    include("conexion.php");

    $id = $_GET["id"];

    $consulta = "SELECT * FROM productos WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Producto</title>
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <h1>Editar Producto</h1>
        
        <form action="editarproduc_respuesta.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre" value="<?php echo $usuario[0]["nombre"]; ?>"><br><br>
            
            <div>descripcion</div>
            <input type="text" name="descripcion" value="<?php echo $usuario[0]["descripcion"]; ?>"><br><br>
            
            <div>precio</div>
            <input type="text" name="precio" value="<?php echo $usuario[0]["precio"]; ?>"><br><br>
            
            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button>Modificar producto</button>
            
        </form>
    
    </body>
    
</html>




