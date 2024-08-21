<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    require("conexion.php");

    if ($stmt = $mysqli->prepare("SELECT * FROM tbl_usuarios WHERE correo = '$correo'")) {
        $stmt->execute();
        $result = $stmt->get_result();

        if ($dato = $result->fetch_array(MYSQLI_ASSOC)) {
            if ($contraseña == $dato['contraseña']) {
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['apellido_p'] = $dato['apellido_p'];
                $_SESSION['direccion'] = $dato['direccion'];
                $_SESSION['municipio'] = $dato['municipio'];
                $_SESSION['correo'] = $dato['correo'];
                $_SESSION['estado'] = $dato['estado'];
                $_SESSION['telefono'] = $dato['telefono'];
                $_SESSION['cargo'] = $dato['cargo'];
                $_SESSION['correo'] = $dato['correo'];
                $_SESSION['contraseña'] = $dato['contraseña'];
                $_SESSION['permiso'] = $dato['permiso'];
                $_SESSION['status'] = $dato['status'];

                echo '<script>alert("Bienvenido al Menú Principal")</script>';
                echo "<script>location.href='index1.php'</script>";
            } else {
                echo '<script>alert("La contraseña que ingresaste es incorrecta")</script>';
                echo "<script>location.href='login1.php'</script>";
            }
        } else {
            echo '<script>alert("El usuario que ingresaste es incorrecto")</script>';
            echo "<script>location.href='login1.php'</script>";
        }

        $stmt->close();
    } else {
        echo '<script>alert("Error al conectar con la base de datos")</script>';
        echo "<script>location.href='login1.php'</script>";
    }

    $mysqli->close();
} else {
    header("location:login1.php");
    exit();
}
?>