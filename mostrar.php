<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mostrar</title>
    <link rel="stylesheet" href="css/bootstrap-superheroe.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body style="padding-top : 60px;">

<!-- Barra de Navegacion -->

<nav class="navbar navbar-inverse navbar-fixed-top" role = "navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                               
      </button>

      <a class="navbar-brand" href="index.php">HT6A</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="mostrar.php">Mostrar</a></li>
        <li><a href="info.html">Informacion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <ul class= "nav navbar-nav navbar-right">
     <li><a href="#">
      <span class="glyphicon glyphicon-star"></span>Menu</a>
    </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Informacion -->
<div class="jumbotron">
  <h1>Datos</h1>
    <div class="container-fluid">
   <div class="row">
    <div class="col-md-5">
       <table class="table table-hover table-responsive">
     <thead>
        <tr>
          <th>Usuario</th>
          <th>Interes</th>
        </tr>
      </thead>
<?php   
  $Conexion = mysql_connect('localhost','root','');
  mysql_select_db('InteresesDB', $Conexion);

  $query="SELECT U.user, I.interes FROM Usuarios U 
  INNER JOIN Detalles D ON U.id = D.Usuarios_id 
  INNER JOIN Intereses I ON D.Intereses_id = I.id";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['user']."</td>";
        echo "<td>".$dato['interes']."</td><br>"; 
        echo "<tr>";        
  }
 ?>
   </table>


         
	</div>
  </div>
</div>
</div>


	
</body>
</html>