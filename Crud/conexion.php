<?php 

  /* un metodo privado ,solo puede se accedido en la misma clase donde 
 fue creado al mismo tiempo no puede mostrarse fuera o en instancia */

	class conectar{
    // declaramos atributo 
        private $servidor="localhost";
        private $usuario="root";
        private $bd="crud_jair";
        private $password="";


        //declaracion del metodo 
        public function conexion(){
          $conexion=mysqli_connect($this->servidor,
                      $this->usuario,
                      $this->password,
                      $this->bd);
          return $conexion;
        }

	}
  
/*
  $Miobjeto= new conectar();
  if($miObjeto->conexion()){
      echo"conectado con exito";
  } else{
      echo"fallo conectar";
  }     */
 ?>