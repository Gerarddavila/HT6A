<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
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

<!-- Fin Barra Navegacion -->

<!-- Tabla -->

<div class="container-fluid">
   <div class="row">
    <div class="col-md-5">
  <strong><h4>Elija Usuarios para crear intereses</h4></strong>   
  </div>
         
<!-- Formulario-->

<div class="col-md-7">
         
<form action ="ingresar.php" method="POST" class="form-horizontal">
      <fieldset>
          <legend>Usuarios</legend>
          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Usuario</label>
            <div class="col-md-4">     
            <select name="usuarios" class="form-control" id="select">
               <?php
                  $conexion = mysql_connect('localhost','root','');

                  mysql_select_db("InteresesDB",$conexion);

                  $query = "SELECT * FROM Usuarios";

                  $record = mysql_query($query);

                  while ($dato = mysql_fetch_array($record)) 
                  {
                    echo "<option value='".$dato['id']."'>".$dato['user']."</option>";
                  }

                ?>
              </select>
           
            </div>


          </div> 
</div>
  
          <div class="row">
            <div class="col-md-5">
            <legend>Intereses</legend>
           <div class="form-group">
      ,      <label for="select" class="col-lg-2 control-label"></label>
            <div class="col-lg-5">
              
              <?php
              $conexion = mysql_connect('localhost','root',"");
              mysql_select_db("InteresesDB",$conexion);
              $query = "SELECT * FROM Intereses";
              $record = mysql_query($query);
              while ($dato = mysql_fetch_array($record))
              {
                echo "<input  type='checkbox' name='Intereses[]' value='".$dato['id']."''>".$dato['Interes']."</br>";
              }
              ?>

 </div>   
              <div class="form-group">
            <div class="col-lg-5 col-lg-offset-7">
        <button type="submit" class="btn btn-success">Guardar</button>
            </div>     
         
            </div>

            </div>
           </div>
           </div>
               
      </fieldset>

          </form>


    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</body>
</html>