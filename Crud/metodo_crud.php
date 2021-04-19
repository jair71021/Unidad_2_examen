<?php 

  //creamos clase 
	class metodos{
    // creamos metodos 
			//para mostrar datos 
		public function Mostrar_Datos($sql){
			//mandamos a llamar a la clase de conecxion
			$a= new conectar();
			//mandamos a llamar el metodo
			$conexion=$a->conexion();

			$resultado=mysqli_query($conexion,$sql);
			return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
		}
		//creaamos metodo para inserta datos 
		public function Insertar_Datos_Nombre($datos){
				//mandamos a llamar a la clase de conecxion
			$a= new conectar();
				//mandamos a llamar el metodo
			$conexion=$a->conexion();

			$sql="INSERT into t_persona (nombre,apellidopaterno,apellidomaterno,edad)
							values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";

			return $result=mysqli_query($conexion,$sql);
		}
		
		public function Actualizar_Datos_Nombre($datos){
			//mandamos a llamar a la clase de conecxion
			$a= new conectar();
			//mandamos a llamar el metodo
			$conexion=$a->conexion();
			$sql="UPDATE t_persona set nombre='$datos[0]',
										apellidopaterno='$datos[1]',apellidomaterno='$datos[2]',edad='$datos[3]'
								where id='$datos[4]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function Eliminar_Datos_Nombre($id){
				//mandamos a llamar a la clase de conecxion
			$a= new conectar();
				//mandamos a llamar el metodo
			$conexion=$a->conexion();
			$sql="DELETE from t_persona where id='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
?>