<table class="table table-dark">
<th>Nombre</th>
<th>Telefono</th>
<th>Descripcion</th>
<th>Direccion</th>
<th>Editar</th>
<th>Elinimar</th>  

<?php
$agenda = Agenda :: ningunDato();
$datos = $agenda->Seleccion();


while ($row = $datos->fetch_array()) {
	echo '<tr>';
		echo '<td>'.$row['Nombre'].'</td>' ;
		echo '<td>'.$row['Telefono'].'</td>' ;
		echo '<td>'.$row['descripcion'].'</td>' ;
		echo '<td>'.$row['direccion'].'</td>' ;
		echo "<td><a class='btn btn-primary' href='index.php?accion=editar&id=$row[id]'>Editar</a></td>";
		echo "<td><a class='btn btn-danger' href='index.php?accion=eliminar&id=$row[id]'>Eliminar</a></td>";
	echo '</tr>';
}




?>
</table>