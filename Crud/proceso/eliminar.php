<?php 
    $id=$_GET['id'];
  //se utiliza para incrustar código PHP desde otro archivo. 
    require_once "../conexion.php";
    require_once "../metodo_crud.php";
    //creamos un objeto
    $Miobjeto= new metodos();
    if($Miobjeto->Eliminar_Datos_Nombre($id)==1){
      header("location:../index.php");
    }else{
      echo "Falto agregar datos";
    }

 ?>
