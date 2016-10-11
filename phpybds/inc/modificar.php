<?php 
	require('conexion.php');
	$id = $_POST['id'];
	$dato1=$_POST['nombre'];
  $dato2=$_POST['titulo'];

  $consulta="UPDATE datos SET nombre='$dato1', trabajo='$dato2' WHERE id=$id";
  $resultado=$mysqli->query($consulta);
  header("Location: ../administrador.php"); 

 ?>