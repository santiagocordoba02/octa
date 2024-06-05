<?php
require "../controladores/conexion.php";


$documento = $_POST["documento"];
$nombrePersona = $_POST["nombre_Persona"];
$fechaNacimiento = $_POST["dt_fecha"];
$celular = $_POST["celular"];
$fechaRegistro= $_POST["date_registro"];
echo $documento;

$sql_insertar = "INSERT INTO persona
(  documento,nombre, fecha_nacimiento, celular,fechaRegistro) 
VALUES (now(),'".$documento."', '".$nombrePersona."', '".$fechaNacimiento."', '".$celular."')";

if($dbh->query($sql_insert))
{
      echo "informacion registrada correctamente";

    }else
 { 

        echo "error";
    }





?>