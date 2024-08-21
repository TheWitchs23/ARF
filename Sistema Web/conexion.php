<?php
$mysqli=new mysqli("localhost", "root", "", "dbintegrative");
if($mysqli->connect_errno)
{
echo "No se pudo conectar con la base de datos:(".$mysqli->connect_errno.")".$mysqli->connect_error;
}
?>