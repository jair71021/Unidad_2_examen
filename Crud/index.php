<?php 
//se utiliza para incrustar código PHP desde otro archivo. 
	require_once "conexion.php";
	require_once "metodo_crud.php";

 ?>
<!DOCTYPE html>
  <html>
    <head>
      <title>crud</title>
    </head>
    <body>
    <!--creacion de un pequeño formulario  -->
      <form action="proceso/insertar.php" method="post">
        <label>Nombre</label>
        <p></p>
        <input type="text" name="txtnombre">
        <p></p>
        <label>Apellido paterno</label>
        <p></p>
        <input type="text" name="txtapellidopaterno">
        <p></p>
        <label>Apellido materno</label>
        <p></p>
        <input type="text" name="txtapellidomaterno">
        <p></p>
        <label > Edad</label>
        <p></p>
        <input type="text" name="txtedad">
        <p></p>
        <button>Agregar</button>
      </form>

      <br><br>
      <!--Creacion de una tabla-->
      <table style="border-collapse: collapse;" border="1">
        <tr>
          <td>Nombre</td>
          <td>Apellido paterno</td>
          <td>Apellido materno</td>
          <td>Edad</td>
          <td>Actualizar</td>
          <td>Eliminar </td>
         
        </tr>
      <?php 
        $Miobjeto= new metodos();
        $sql="SELECT id,nombre,apellidopaterno,apellidomaterno,edad from t_persona";
        $datos=$Miobjeto->Mostrar_Datos($sql);

        foreach ($datos as $key ) {
      ?>
        <tr>
          <td><?php echo $key['nombre']; ?></td>
          <td><?php echo $key['apellidopaterno']; ?></td>
          <td><?php echo $key['apellidomaterno']; ?></td>
          <td><?php echo $key['edad']; ?></td>
          <td>
            <a href="editar.php?id=<?php echo $key['id'] ?>">
            Editar
            </a>
          </td>
          <td>
            <a href="proceso/eliminar.php?id=<?php echo $key['id'] ?>">
            Eliminar
            </a>
          </td>
        </tr>
      <?php 
        }
      ?>
      </table>
    </body>
  </html>