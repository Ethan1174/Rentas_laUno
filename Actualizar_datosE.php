<!DOCTYPE html>
<html lang="en">
<?php require 'librerias.php';
      require 'Conexion.php';
$Id_du=$_GET['id'];
$query="Select*from due_renta where Id_due= '$Id_du'";
$result=$mysqli->query($query); //aun no sabemos si existe o no existe el ID para eso debemos hacer un recorrido.
$row=$result->fetch_assoc();

?>

<body>


<div class="container">
  <center><h2> Arrendador</h2></center>

  <br></br>
  <form action="" method="post">
  <div class="card">
    <div class="card-header">
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Nombre" name="Nombre" value="<?php echo $row['nombre_due'] ?>"> 
      </div>
     
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Apellido" name="apepat" value="<?php echo $row['apellidoPa'] ?>">
      </div>
     
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Apellido Materno" name="apema"value="<?php echo $row['apellidoMa'] ?>">
      </div>
      
    </div>
    <br>
    </div>
    <div class="card-body">
    
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Correo" name="email" value="<?php echo $row['correo'] ?>">
      </div>
     
      <div class="col-md-4">
        <input type="password" class="form-control"  placeholder="Contraseña" name="pass"value="<?php echo $row['contra'] ?>">
      </div>
     
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Numero de telefono" name="cel"value="<?php echo $row['num_tel'] ?>">
      </div>
      
    </div>

    </div> 
    <div class="card-footer"> 
    <br>
    <div class="row">
        <div class="col-md-3">
        
          <label for="sel1">Selecciona Hotel o departamento:</label>
          <select class="form-control"  name="dep_or_hotel">
            <option value="<?php echo $row['dep_hotel'] ?><?php echo $row['dep_hotel'] ?>">Hotel</option>
            <option value="Hotel">Hotel</option>
            <option Value="Departamento">Departamento</option>
          
          </select>
          <br>
         </div>
      
        </div>  
    
    </div>
  </div>
    <center><button type="submit" class="btn btn-primary mt-3">Guardar</button></center>
  </form>
</div>

</body>
</html>
