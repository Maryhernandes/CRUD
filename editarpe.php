<?php

    include("conexion.php");

    $id = $_GET["id"];

    $consulta = "SELECT * FROM peinados WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar peinados</title>
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <h1>Editar peinados</h1>
        
        <form action="editar_respuestape.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre" value="<?php echo $usuario[0]["nombre"]; ?>"><br><br>
            
            <div>Correo</div>
            <input type="text" name="precio" value="<?php echo $usuario[0]["precio"]; ?>"><br><br>
            
            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button>Modificar peinado</button>
            
        </form>
    
    </body>
    
</html>




