<?php 
//se utiliza para incrustar código PHP desde otro archivo. 
	require_once "../conexion.php";
	require_once "../metodo_crud.php";

//post viene del formulario de form de index 
	$nombre=$_POST['txtnombre'];
	$apellidopaterno=$_POST['txtapellidopaterno'];
	$apellidomaterno=$_POST['txtapellidomaterno'];
	$edad=$_POST['txtedad'];
  $id=$_POST['id'];
// creamos un array 
	$datos=array(
			$nombre,
			$apellidopaterno,
			$apellidomaterno,
			$edad,
      $id
				);
//creamos un objeto
  $Miobjeto= new metodos();
	if($Miobjeto->Actualizar_Datos_Nombre($datos)==1){
		header("location:../index.php");
	}else{
		echo "Falto agregar datos";
	}

 ?>