<?php

    include("conexion.php");

    $id = $_GET["id"];


    $consulta = "SELECT * FROM tinte/ç WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Tinte</title>
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <h1>Editar Tinte</h1>
        
        <form action="editar_respuestatintes.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre" value="<?php echo $usuario[0]["nombre"]; ?>"><br><br>
            <div>precio</div>
            <input type="text" name="precio" value="<?php echo $usuario[0]["precio"]; ?>"><br><br>
            
            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button>Modificar tinte</button>
            
        </form>
    
    </body>
    
</html>
