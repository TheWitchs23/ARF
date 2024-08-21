<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    require("conexion.php");

    if ($stmt = $mysqli->prepare("SELECT * FROM tbl_docentes WHERE correo = '$correo'")) {
        $stmt->execute();
        $result = $stmt->get_result();

        if ($dato = $result->fetch_array(MYSQLI_ASSOC)) {
            if ($contraseña == $dato['contraseña']) {
                $_SESSION['nombre_completo'] = $dato['nombre_completo'];
                $_SESSION['apellido_p'] = $dato['apellido_p'];
                $_SESSION['correo'] = $dato['correo'];
                $_SESSION['contraseña'] = $dato['contraseña'];
                $_SESSION['telefono'] = $dato['telefono'];
                $_SESSION['carreras'] = $dato['carreras'];
                $_SESSION['carreras1'] = $dato['carreras1'];
                $_SESSION['status'] = $dato['status'];
                $_SESSION['permiso'] = $dato['permiso'];

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