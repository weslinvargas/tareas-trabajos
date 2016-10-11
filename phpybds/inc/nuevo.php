<?php 
	require('conexion.php');
	$dato1=$_POST['nombre'];
  $dato2=$_POST['titulo'];

  $consulta="INSERT INTO datos(nombre,trabajo) VALUES ('$dato1','$dato2')";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php"); 

 ?>