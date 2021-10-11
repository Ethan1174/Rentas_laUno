<?php
require 'Conexion.php';

$nomEst=$_POST['Nombre'];
$apellidoPE=$_POST['apepat'];
$apellidoME=$_POST['apema'];
$correo=$_POST['email'];
$contraseña=$_POST['contra'];
$telE=$_POST['cel'];
$dephotel=$_POST['dep_or_hotel'];

$query = "insert into due_renta (nombre_due, apellidoPa, apellidoMa, correo, num_tel, contra, dep_hotel)
values ('$nomEst', '$apellidoPE', '$apellidoME', '$correo', '$telE','$contraseña','$dephotel')";

$resultado = $mysqli ->query ($query);
 if ($resultado>0)
{
    echo "El registro se guardó con exito";
}else {
    echo "Vuelve a intentarlo. No se guardó";
}

?>