<?php
require 'conexion.php';

$Id_du=$_GET['id'];

$eliminar="Delete from due_renta where Id_due = '$Id_du'";

$resultado=$mysqli->query($eliminar);

if($resultado>0){
    echo "<script>alert('Eliminaste el registro correctamente')</script>";
    header("refresh:0;url=mostrar_datosE.php");
}else{
    echo "<script>alert('Ocurrió un problema al eliminar el registro')</script>";
}
?>