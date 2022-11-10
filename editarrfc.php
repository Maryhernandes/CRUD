<?php

    include("conexion.php");

    $id = $_GET["id"];

    $consulta = "SELECT * FROM provedores WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar provedores</title>
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <h1>Editar provedores</h1>
        
        <form action="editar_respuestarfc.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre" value="<?php echo $usuario[0]["nombre"]; ?>"><br><br>
            
            <div>rfc</div>
            <input type="text" name="rfc" value="<?php echo $usuario[0]["rfc"]; ?>"><br><br>
            
            
            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button>Modificar provedor</button>
            
        </form>
    
    </body>
    
</html>




