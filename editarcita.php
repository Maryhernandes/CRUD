<?php

    include("conexion.php");

    $id = $_GET["id"];

    $consulta = "SELECT * FROM Citas WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Citas</title>
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <h1>Editar Citas</h1>
        
        <form action="editar_respuestacita.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre" value="<?php echo $usuario[0]["nombre"]; ?>"><br><br>

            <div>Apellido</div>
            <input type="text" name="apellidos" value="<?php echo $usuario[0]["apellidos"]; ?>"><br><br>

            <div>Correo</div>
            <input type="text" name="correo" value="<?php echo $usuario[0]["correo"]; ?>"><br><br>

            <div>Telefono</div>
            <input type="text" name="telefono" value="<?php echo $usuario[0]["telefono"]; ?>"><br><br>

            <div>Tratamiento</div>
            <input type="text" name="tratamiento" value="<?php echo $usuario[0]["tratamiento"]; ?>"><br><br>

            <div>Dia</div>
            <input type="text" name="dia" value="<?php echo $usuario[0]["dia"]; ?>"><br><br>

            <div>Hora</div>
            <input type="text" name="hora" value="<?php echo $usuario[0]["hora"]; ?>"><br><br>

            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button>Modificar Cita</button>
            
        </form>
    
    </body>
    
</html>




