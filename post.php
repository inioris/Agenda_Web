<?php 
	include 'clases-agenda.php';

	if (isset($_POST['submit'])) {

		if ($_POST['accion'] == 'Insertar'){

			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono']; 
			$descripcion = $_POST['descripcion'];
			$direccion = $_POST['direccion'];

			$agenda = new Agenda($nombre,$telefono,$descripcion,$direccion);

			$agenda->insertar();
			
		}
		if ($_POST['accion'] == 'Actualizar') {

			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono']; 
			$descripcion = $_POST['descripcion'];
			$direccion = $_POST['direccion'];
			$id = $_POST['id'];

			$agenda = new Agenda($nombre,$telefono,$descripcion,$direccion,$id);

			$agenda->Actualizar();
			
		}
	}














?>