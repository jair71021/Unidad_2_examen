<?php 
  //se utiliza para incrustar código PHP desde otro archivo. 
	require_once "conexion.php";
  // cramos un objeto
	$Miobjeto= new conectar();
  //mandamos a llamar conexion al metodo conexion
	$conexion=$Miobjeto->conexion();
	$id=$_GET['id'];
	$sql="SELECT nombre,apellidopaterno,apellidomaterno,edad
			from t_persona where id='$id'";
	$resultado=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($resultado);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     <!--creacion de un pequeño formulario  -->
    <form action="proceso/actualizar.php" method="post">
    <input type="text" hidden="" value="<?php echo $id ?>" name="id">
      <label>Nombre</label>
      <p></p>
      <input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
      <p></p>
      <label>Apellido Paterno</label>
      <p></p>
      <input type="text" name="txtapellidopaterno" value="<?php echo $ver[1] ?>">
      <p></p>
      <label>Apellido materno</label>
      <p></p>
      <input type="text" name="txtapellidomaterno" value="<?php echo $ver[2] ?>">
      <p></p>
      <label >Edad</label>
      <p></p>
      <input type="text" name="txtedad" value="<?php echo $ver[3] ?>">
      <p></p>
      <button>Agregar</button>
    </form>
</body>
</html>