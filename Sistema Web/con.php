<?php
// Consulta SQL
$sql = "SELECT id,matricula, nombre,apellidos,carrera,cuatrimestre,grupo  FROM tbl_alumnos"; // Cambia "tu_tabla" por el nombre de tu tabla

// Ejecutar consulta
$result = $conn->query($sql);
?>
