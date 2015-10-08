<?php 

$vtipo=$_POST['usuarios'];
	
$Conexion = mysql_connect('localhost','root','');
mysql_select_db('InteresesDB', $Conexion);

		foreach ($_POST['Intereses'] as $dato) 
		{
			 $query="INSERT INTO Detalles(Usuarios_id,Intereses_id)VALUES ($vtipo,$dato)";

			echo $query;
			mysql_query($query);

		}
	
header('location:index.php');	

?>









