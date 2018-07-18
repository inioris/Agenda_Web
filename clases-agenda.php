<?php 
	include 'configuraciones/conexion.php';
	/**
	* 
	*/
	class Agenda
	{
		protected $id;
		protected $nombre;
		protected $telefono;
		protected $descripcion;
		protected $direccion;


		public function __construct($nom,$tel,$des,$dir,$id='')
		{
			include 'configuraciones/conexion.php';

			$this->nombre=$nom;
			$this->telefono=$tel;
			$this->descripcion=$des;
			$this->direccion=$dir;
			$this->id=$id;
		}
		static function ningunDato(){

			return new self('','','','','');

		}
		static function soloid($id){
			return new self('','','','',$id);
		}
		public function Actualizar(){
			include 'configuraciones/conexion.php';
			$sql = "UPDATE contactos SET Nombre='$this->nombre', Telefono='$this->telefono', descripcion='$this->descripcion', direccion='$this->direccion' WHERE id ='$this->id'";
			$conectar->query($sql) ? header("location: index.php?res=Actualizado") : header("location: index.php?res=Hubo un Error");
		}

		public function insertar(){
			include 'configuraciones/conexion.php';
			$sql = "INSERT INTO contactos(Nombre,Telefono,descripcion,direccion) VALUES ('$this->nombre','$this->telefono','$this->descripcion','$this->direccion')";

			$conectar->query($sql) ? header("location: index.php?res=Insetardo") : header("location: index.php?res=Hubo un Error");

		}
		public function Seleccion(){
			include 'configuraciones/conexion.php';
			$sql = "SELECT * FROM contactos";
			$resultado = $conectar->query($sql);
			return $resultado;
		}

		public function SeleccionaId(){
			include 'configuraciones/conexion.php';
			 $sql = "SELECT * FROM contactos WHERE id = $this->id";
			 $resultado = $conectar->query($sql);
			 return $resultado;

		}
		public function Borrar_Datos(){
			include 'configuraciones/conexion.php';
			$sql = "DELETE FROM contactos WHERE id = '$this->id'";
			$conectar->query($sql) ? header("location: index.php?res=Borrado Correctamente") : header("location: index.php?res=Hubo un Error");

		}










	}




?>