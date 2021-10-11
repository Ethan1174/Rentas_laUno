  <?php
      require 'Conexion.php';
      require 'Librerias.php';
  $Mostrar="Select*from due_renta";

  $resultado=$mysqli->query($Mostrar);
  ?>

<div class="container">

    <h2>Tabla de registros</h2>
    

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Numero de telefono</th>
            <th>Hotel o departamento</th>
            <th>Editar</th>
            <th>Eliminar </th>
          </tr>
        </thead>
        <tbody>
            <?php
              while($row=$resultado->fetch_assoc()){
            ?>
              <tr>
              <td><?php echo $row['Id_due'];?></td>
              <td><?php echo $row['nombre_due'];?></td>
              <td><?php echo $row['apellidoPa'];?></td>
              <td><?php echo $row['apellidoMa'];?></td>
              <td><?php echo $row['correo'];?></td>
              <td><?php echo $row['num_tel'];?></td>
              <td><?php echo $row['contra'];?></td>
              <td><?php echo $row['dep_hotel'];?></td>
              <td><a href ="Actualizar_datoE.php?id=<?php echo $row['Id_due'];?>" class= "btn btn-primary " role ="button">Actualizar</a></td>
              <td><a href ="eliminar_estudiantes.php?id=<?php echo $row['Id_due'];?>" class= "btn btn-danger" role ="button">Eliminar</a></td>

              </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>