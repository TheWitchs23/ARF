<?php
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

require('conexion.php');

$revisar = $mysqli -> query("SELECT * FROM tbl_usuarios WHERE correo = '$correo' and status = '1'");

if($dato = $revisar -> fetch_array()){
if($contraseña == $dato['contraseña']){
	echo '<script>alert("Bienvenido al Menu")</script>';
	echo "<script>location.href='index.php'</script>";
}
else{
	echo '<script>alert("La Contraseña es Incorrecta")</script>';
	echo "<script>location.href='login1.php'</script>";
 }

}
else{
	echo '<script>alert("El Usuario es Incorrecto")</script>';
	echo "<script>location.href='login1.php'</script>";
}
?>