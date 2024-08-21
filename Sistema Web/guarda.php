<?php
require("conexion.php");

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $carrera = $_POST['carrera'];
    $carrera2 = $_POST['carrera2'];



    $insert = $mysqli->query("INSERT INTO `tbl_docentes`(`nombre_completo`, `correo`, `telefono`, `carreras`, `carreras1`) VALUES ('$nombre_completo','$correo','$telefono','$carrera','$carrera2')");
    
   if($insert){

    echo '<script>alert("docente guardado")</script>';
    echo"<script>location.href='index1.php'</script>";
    //echo '<script>alert(" administrativo  guardado")</script>';
    //echo"<script>location.href='registro_docente.php'</script>";

   }else{
echo '<script>alert("Error docente no guardado")</script>';
    echo"<script>location.href='registro_docente.php'</script>";

    //echo '<script>alert("Error administrativo no guardado")</script>';
    //echo"<script>location.href='registro_docente.php'</script>";
   }
?>