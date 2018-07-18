<?php 
	include 'clases-agenda.php';
	$datos = array('Nombre'=>'','Telefono'=>'','descripcion'=>'','direccion'=>'', 'id'=>'');
	$accion = 'Insertar';
	include 'get.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title> Agenda Web </title>
    
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav class="navbar navbar-dark bg-dark justify-content-center">
  				<a class="index.php"><h1> Agenda Web </h1></a>
		</nav>
	</header>
	<style type="text/css">
		header nav a h1{
			color: white;
		}
	</style>

	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<form method="post" action="post.php">
		<hr/>
		<div class="form-control">
			<!-- input nombre -->
			<div class="input-group mb-3">
			<input type="text" name="nombre" value="<?php echo $datos['Nombre']; ?>" placeholder="Nombre" required="requiered" class="form-control">
			</div>
			<!-- input Telefono -->
			<div class="input-group mb-3">
			<input type="text" name="telefono" value="<?php echo $datos['Telefono']; ?>" placeholder="Telefono" required="requiered" class="form-control">
			</div>
			<!-- Textarea Descripcion -->
			<div class="input-group">
  				<div class="input-group-prepend">
    				<span class="input-group-text">Descripcion</span>
 				</div>
  				<textarea class="form-control" name="descripcion" required="requiered"> <?php echo $datos['descripcion']; ?></textarea>
				</div><br>
			<!-- Textarea Direccion -->
			<div class="input-group">
  				<div class="input-group-prepend">
   				 <span class="input-group-text">Direccion</span>
  			</div>
  			<textarea class="form-control" type="text" name="direccion" required="requiered"><?php echo $datos['direccion']; ?></textarea>
			</div>

		<input  type="hidden" name="id" value="<?php echo $datos['id'] ?> ">
		<input type="hidden" name="accion" value="<?php echo $accion;?>">
		<br>
		<input type="submit" name="submit" value="Enviar" class="btn btn-primary">
		</div>
		<hr/>
	</form>
	</div>
	<div class="col-md-6">
		<hr/>
	<?php include 'tabla.php'; ?>
	<hr/>
</div>
</div>
</div>
<style type="text/css">
	footer{

  position: absolute;
  bottom: 0;
  width: 100%;
	}
</style>



<footer class="footer-MaterialDark">
   <div class="container">
      <div class="row">
        		<div class="col-md-6 offset-l2 s12">
                        <h5 class="white-text">Contenido del Footer</h5>
                        <p class="grey-text text-lighten-4">
                            Este Proyecto Fue hecho con la Idea de Utilizar Php Crudo o mejor dicho con Conceptos SOLID.
                            <br>
                            Programacion Orientada a Objetos Crud.
                        </p>
                    </div>
                    <div class="col-md-6 offset-l2 s12">
                        <h5 class="white-text">Technologies used</h5>
                        <ul>
                            <li> Php </li>
                            <li> My Sqli </li>
                            <li> Bootstrap </li>
                            <li> Jquery </li>
                        </ul>
                    </div>
           <div class="NavLateralDivider"></div>
           <div class="footer-copyright">
               <div class="container center-align">
                  © 2018 Alejandro Ramirez Peralta
               </div>
           </div>
      </div>
   </div>
</footer>



 <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>