<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-image: url('estetica.jpg');
      background-repeat: no-repeat;
      background-size: 100% ;
    }
    </style>
    <link rel="stylesheet" href="estilos.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #13f1d3;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 30px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 25px;
  cursor: pointer;
  background-color: rgb(5, 13, 14);
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: rgb(23, 227, 227);
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 18px;}
  .sidebar a {font-size: 21px;}
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">inicio</a>
  <a href="#"></a><a href="consultaclientes.php" target="_blank">clientes</a>
  <a href="#"></a><a href="consultasproductos.php" target="_blank">productos</a>
  <a href="#"></a><a href="consultascortes.php" target="_blank">cortes de cabello</a>
  <a href="#"></a><a href="consultabarba.php" target="_blank">estilo de barba</a>
  <a href="#"></a><a href="consultasTcabello.php" target="_blank">tratamiento de cabello</a>
  <a href="#"></a><a href="consultastintes.php" target="_blank">Tintes</a>
  <a href="#"></a><a href="consultascitas.php" target="_blank">Citas</a>
  <a href="#"></a><a href="consultprovedores.php" target="_blank">provedores</a>
  <a href="#"></a><a href="consultpeinados.php" target="_blank">estilos de peinados</a>
       

</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ </button>  
  <p></p>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
-<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;height:2000px;}

.icon-bar {
  position: fixed;
  top: 40%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}
</style>
<body>

    <div class="social"><link rel="stylesheet" href=".social ul {.css" type="text/css">
		<ul>
			<li><a href="https://www.facebook.com/dianitha.quintana.98" target="_blank" class="icon-facebook"></a></li>
			<li><a href="https://twitter.com/?lang=es" target="_blank" class="icon-twitter"></a></li>
			<li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
		</ul>
	</div>



</body>
</html> 


</body>
</html> 
<html>
<head>
<style>
body {
  background-color: #ffccff;
}
</style>
</head>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>



    <html>
        <head>
        <style>
     
        
       
        
        </style>
        </head>
        <body>
        
        
        <div class="relative">
          <div class="absolute"><html>
        <head>
        <meta name="viewport" >
        <style>
        .pagination a {
          color: black;
          float: left;
          padding: 8px 16px;
          text-decoration: none;
          transition: background-color .3s;
        }
        
        .pagination a.active {
          background-color: blue;
          color: white;
        }
        
        </style>
        </head>
        <body>
        
      
        
        
        </body>
        </html></div>
        </div>
        
        </body>
        </html>
        
        
        

</body>
</html>



</body>
</html>
</body>
</html> 

<?php
    include("conexion.php");

    //Paso 1.
    $consulta = "SELECT * FROM clientes";

    //Paso 2.
    $query = $bd->prepare($consulta);

    //Paso 3.
    $query->execute();

    //Paso 4. Traer la información de la cosulta
    $usuarios = $query->fetchAll();

?>

<html>
    <head>
        <title>Ver Lista</title>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
        <a class="btn btn-primary" href="insertarcliente.php">click para añadir</a>
        <style>
            
            body{
                padding: 20px;
            }
            
            tr{
              text-align: center;
            }
            
            .icon-borrar{
                width: 20px;
                cursor: pointer;
            }
            
            .icon-edit{
                width: 30px;
                cursor: pointer;
            }
        </style>
    </head>
    
    <body>
        
        <h1> Clientes</h1>
        
        <table border="2" class="table table-striped">
            <tr>
       
                <td>Nombre</td>
                <td>Correo</td>
                
                
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
            
            <?php 
                for($x=0; $x < count($usuarios); $x++){
            ?>  
                <tr>
                    
                    <td><?php echo $usuarios[$x]["nombre"]; ?></td>
                    <td><?php echo $usuarios[$x]["correo"]; ?></td>
                    
                    <td>
                            <img class="icon-edit" src="editar-codigo.png" usid="<?php echo $usuarios[$x]["id"] ?>">
                    </td>
                    <td>
                        <img class="icon-borrar" src="basura.png" usid="<?php echo $usuarios[$x]["id"] ?>">
                    </td>
                </tr>
            <?php
                }
            ?>
            
        </table>
        
        <br><br>
        
       
    
        <script>
            
            $(".icon-edit").click(function(){
               
                var id = $(this).attr("usid");
                
                window.location = "editar.php?id=" + id;
                
            });
            
            $(".icon-borrar").click(function(){
                
                var idx = $(this).attr("usid");
                
                if(confirm("¿Seguro que deseas eliminar a este Usuario?")){ 
                    window.location = "eliminar.php?id=" + idx; 
                }
                
            });
        
            
        </script>
    </body>
    
</html>