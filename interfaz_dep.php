<!DOCTYPE html>
<?php require 'librerias.php';
      require 'conexion.php'; ?>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentas La Uno</title>
</head>
<body>
    <div class="container">
        
    </div>
    
    
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <h4 class="text-light">Rentas la Uno</h4>
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="index.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="registro.php"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href=""><i class="fas fa-home"></i><span>Hotel</span></a>
                    <a href="interfaz_dep.php"><i class="fas fa-home"></i><span>Departamentos</span></a>
                    <a href="#"><i class="fas fa-sign-in-alt m-1"></i><span>Mi Perfil</span></a>
                </nav>
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                <form action="procesar_depa.php" method="Post">
        <br><br>
        <center><h2>Mis Departamentos</h2></center>
        <br>
        <div class="container-fluid">
        
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Numero de departamento</th>
                <th>Recamaras</th>
                <th>Baños(s)</th>
                <th>Servicios</th>
                <th>Fotos</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text"class="form-control mb-2 mr-sm-2"  placeholder="Numero de departamento"name="Num_Dep"></td>
                <td><input input type="text" placeholder="Recamaras"class="form-control mb-2 mr-sm-2" name="Recam" ></td>
                <td><input type="text"class="form-control mb-2 mr-sm-2"  placeholder="Baño(s)"name="Bath" ></td>
                <td><input type="text"class="form-control mb-2 mr-sm-2"  placeholder="Servicios"name="Serv" ></td>
                <td><input type="file"class="form-control mb-2 "name="Photos" ></td>
                <td> 
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Disponible
                    </label>
                    </div>
                    <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">No disponible
                    </label>
                    </div>
                </td>
                
            </tr>
            <td> <button class="btn btn-primary" type="submit" >Guardar</button> </td>
            <td><button class="btn btn-primary" type="button">Modificar</button> </td>
            <td><button class="btn btn-danger" type="button">Eliminar</button> </td>
            
            </tbody> 
        </table>
       
         
        </form>  

                </div>

            </main>
        </div>
    </div>
</body>
</html>