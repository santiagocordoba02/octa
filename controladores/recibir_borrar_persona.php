<script src=/js/c:\https://cdn.jsdelivr.net/npm/sweetalert2@11

<?php
require "../config/conexion.php.php";

$nombrePersona = $_POST["nombre"];
$documento = $_POST["documento"];
$fechaNacimiento = $_POST["dt_fecha"];
$Numerocelular = $_POST["celular"];
$sexo = $_POST["sexo"];

$sql_insertar = "INSERT INTO persona
(fecha_sys, nombre, documento, fecha_nacimiento, celular, sexo) 
VALUES (now(),'".$nombrePersona."', '".$documento."', '".$fechaNacimiento."', '".$Numerocelular."', ".$sexo.")";

if($dbh->query($sql_insertar))
{

 echo "
 title: 'persona borrada' ,
 text:
 ";

}else 
{
echo "error";


}

?>