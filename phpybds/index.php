<?php 
  require('inc/conexion.php');
  $consulta = "SELECT * FROM datos";
  $resultado = $mysqli->query($consulta);
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>titulo del sitio</title>
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="css/estilos.css">

	</head>

	<body>
	
		<nav>
			<div class="nav-wrapper black">
				<a href="#!" class="brand-logo">Logo</a>
				<!-- activate side-bav in mobile view -->
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="administrador.php">Administrador</a></li>
					<!-- Dropdown Trigger -->
		
				</ul>
				<!-- navbar for mobile -->
				<ul class="side-nav black" id="mobile-demo">
					<li><a class="white-text" href="administrador.php">Administrador</a></li>
				</ul>
			</div>
		</nav>

		<div class="row">
		<?php while($fila=$resultado->fetch_assoc()){ ?>
			<div class="col s12 m4 l4">
				<div class="card small teal">
					<div class="card-content white-text">
						<span class="card-title"><?php echo $fila['nombre'];?></span>
						<hr>
						<p><?php echo $fila['trabajo'];?></p>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>

		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		
		<script>
    		$(document).ready(function() {
    			$(".button-collapse").sideNav();
  			});
        </script>
	</body>
</html>