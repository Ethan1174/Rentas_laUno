<?php
require 'Conexion.php';
$Num_dep=$_POST['Num_Dep'];
$Rec=$_POST['Recam'];
$Bathr=$_POST['Bath'];
$Ser=$_POST['Serv'];
$DisNoDis=$_POST['optradio'];

$Insert="Insert into departamentos (Numero_Departamento, Recamaras, Bathroom_s, Servicios, Status) values ('$Num_dep','$Rec','$Bathr','$Ser','$DisNoDis')";

$resultado=$mysqli->query($Insert);

if($resultado>0){
    echo "<script>alert('Guardaste el registro correctamente')</script>";
    header("refresh:0;url=interfaz_dep.php");
}
?>