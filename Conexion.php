<?php 
//servidor(localhost), "usuario(root)", "contraseña('')", "base de datos(rentas_dep_hotel)"
$mysqli= new mysqli("localhost","root","","rentas_dep_hotel");

$mysqli ->set_charset("utf8");

if(mysqli_connect_errno()){
    echo 'Conexion fallida',
        mysqli_connect_error();
}
?>