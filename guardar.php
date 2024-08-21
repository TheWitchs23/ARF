<?php 

$mysqli=new mysqli("localhost","root","","dbintegrative");
if($mysqli->connect_errno)
{
echo "algo salio mal al conectar con la base de datos:(".$mysqli->connect_errno.")".$mysqli->connect_error;

}
$nombre= $_POST['nombre'];
$apellido_p= $_POST['apellido_p'];
$apellido_m= $_POST['apellido_m'];
$direccion=$_POST['direccion'];
$municipio= $_POST['municipio'];
$estado= $_POST['estado'];
$telefono= $_POST['telefono'];
$cargo=$_POST['cargo'];
$correo= $_POST['correo'];
$contraseña= $_POST['contraseña'];
$permiso=$_POST['permiso'];
$status= $_POST['status'];


$insertar = $mysqli->query("INSERT INTO tbl_usuarios VALUES( '','$nombre', '$apellido_p','$apellido_m','$direccion','$municipio','$estado','$telefono','$cargo','$correo','$contraseña','$permiso','$status')");

if($insertar){

echo '<script>alert("USUARIO  DE ALTA")</script>';
echo "<script>location.href='index.php'</script>";

}

else{


echo '<script>alert("ERROR,USUARIO NO DADO DE ALTA")</script>';
echo "<script>location.href='formularioproyec.html'</script>";

}