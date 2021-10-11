<!DOCTYPE html>
<html lang="en">
<?php require 'librerias.php';?>
<body>
<div class="container">
  <center><h2>Registro Arrendador</h2></center>

  <br></br>
  <form action="procesar_datoE.php" method="post">
  <div class="card">
    <div class="card-header">
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Nombre" name="Nombre">
      </div>
     
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Apellido" name="apepat">
      </div>
     
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Apellido Materno" name="apema">
      </div>
      
    </div>
    <br>
    </div>
    <div class="card-body">
    
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Correo" name="email">
      </div>
     
      <div class="col-md-4">
        <input type="password" class="form-control"  placeholder="Contraseña" name="contra">
      </div>
     
      <div class="col-md-4">
        <input type="text" class="form-control"  placeholder="Numero de telefono" name="cel">
      </div>
      
    </div>

    </div> 
    <div class="card-footer"> 
    <br>
    <div class="row">
        <div class="col-md-3">
        
          <label for="sel1">Selecciona Hotel o departamento:</label>
          <select class="form-control"  name="dep_or_hotel">
            <option value="Hotel">Hotel</option>
            <option Value="Departamento">Departamento</option>
          
          </select>
          <br>
         </div>
      
        </div>  
    
    </div>
  </div>
    <center><button type="submit" class="btn btn-primary mt-3">Registrate</button></center>
  </form>
</div>

</body>
</html>
