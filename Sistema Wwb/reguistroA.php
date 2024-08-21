<?php
require("conexion.php");

    $matricula = $_POST['matricula'];
    $carrera = $_POST['carrera'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $cuatrimestre = $_POST['cuatrimestre'];
    $grupo = $_POST['grupo'];

    $insert = $mysqli->query("INSERT INTO tbl_alumno VALUE('', '$matricula', '$carrera', '$nombre', '$apellidos', '$cuatrimestre', '$grupo')");
    
   if($insert){

    echo '<script>alert("Alumno guardado")</script>';
    echo"<script>location.href='alumnoR.php'</script>";

   }else{
    echo '<script>alert("Error alumno no guardado")</script>';
    echo"<script>location.href='alumnoR.php'</script>";
   }
?>