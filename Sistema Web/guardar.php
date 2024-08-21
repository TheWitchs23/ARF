<?php
require("conexion.php");

    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $cuatrimestre = $_POST['cuatrimestre'];
    $grupo = $_POST['grupo'];

    $insert = $mysqli->query("INSERT INTO tbl_alumnos VALUE( '$matricula', '$nombre', '$apellidos', '$carrera', '$cuatrimestre', '$grupo')");
    
   if($insert){

    echo '<script>alert("Alumno guardado")</script>';
    echo"<script>location.href='register.php'</script>";

   }else{
    echo '<script>alert("Error alumno no guardado")</script>';
    echo"<script>location.href='register.php'</script>";
   }
?>