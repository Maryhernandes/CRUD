<?php

    include("conexion.php");

    $id = $_GET["id"];

    $consulta = "SELECT * FROM tcabello WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Usuario</title>
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <h1>Editar Usuario</h1>
        
        <form action="editar_respuestatcabello.php" method="post">
            <div>producto</div>
            <input type="text" name="producto" value="<?php echo $usuario[0]["producto"]; ?>"><br><br>
            
            <div>precio</div>
            <input type="text" name="precio" value="<?php echo $usuario[0]["precio"]; ?>"><br><br>
            
            
            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button>Modificar Usuario</button>
            
        </form>
    
    </body>
    
</html>




