<?php 

if (isset($_GET['accion']) && isset($_GET['id']) && $_GET['accion'] == 'editar') {




	$id = $_GET['id'];
	$agenda = Agenda :: soloid($id);
	$array = $agenda->SeleccionaId();
	$datos = $array->fetch_array();
	$accion = 'Actualizar';
}
elseif (isset($_GET['accion']) && isset($_GET['id']) && $_GET['accion'] == 'eliminar') {
	$id = $_GET['id'];
	$agenda = Agenda :: soloid($id);
	$array = $agenda->Borrar_Datos();

}
?>